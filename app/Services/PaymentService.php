<?php

namespace App\Services;

use App\Models\Registration;
use Exception;
use Illuminate\Http\JsonResponse;

class PaymentService
{
    protected $merchTxnId;

    protected $date;

    protected $login;

    protected $password;

    protected $apiUrl;

    protected $encRequestKey;

    protected $decResponseKey;

    public function __construct()
    {
        $this->merchTxnId = uniqid();
        $this->date = now();
        $this->login = config('payment.username');
        $this->password = config('payment.password');
        $this->apiUrl = config('payment.api_url');
        $this->encRequestKey = config('payment.enc_request_key');
        $this->decResponseKey = config('payment.dec_response_key');
    }

    public function processPayment(array $data): JsonResponse
    {
        $registration = Registration::find($data['registration_id']);

        $atomTokenId = $registration->transaction?->atom_token_id;
        if (is_null($atomTokenId)) {
            $atomTokenId = $this->createTokenId($data);
            $registration->transaction()->update(
                [
                    'atom_token_id' => $atomTokenId,
                    'merch_transaction_id' => $this->merchTxnId,
                    'merch_transaction_date' => $this->date,
                ]
            );
        } else {
            $atomTokenId = $registration->transaction->atom_token_id;
            $this->merchTxnId = $registration->transaction->merch_transaction_id;
        }

        $responseData = [
            'atomTokenId' => $atomTokenId,
            'merchId' => $this->login,
            'custEmail' => $data['email'],
            'custMobile' => $data['mobile'],
            'returnUrl' => route('transaction.response', $data['registration_id']),
        ];

        return response()->json($responseData);
    }

    public function processResponse(string $data)
    {
        $decData = $this->decrypt($data, $this->decResponseKey, $this->decResponseKey);
        $jsonData = json_decode($decData, true);

        return $jsonData;
    }

    public function createTokenId($data)
    {
        $jsonData = '{
            "payInstrument": {
                "headDetails": {
                    "version": "OTSv1.1",      
                    "api": "AUTH",  
                    "platform": "FLASH"	
                },
                "merchDetails": {
                    "merchId": "'.$this->login.'",
                    "userId": "",
                    "password": "'.$this->password.'",
                    "merchTxnId": "'.$this->merchTxnId.'",
                    "merchTxnDate": "'.$this->date.'"
                },
                "payDetails": {
                    "amount": "'.$data['amount'].'",
                    "product": "'.$data['prod_id'].'",
                    "custAccNo": "213232323",
                    "txnCurrency": "INR"
                },	
                "custDetails": {
                    "custEmail": "'.$data['email'].'",
                    "custMobile": "'.$data['mobile'].'"
                },
                "extras": {
                    "udf1": "",  
                    "udf2": "",  
                    "udf3": "", 
                    "udf4": "",  
                    "udf5": ""
                }
            }  
        }';

        $encData = $this->encrypt($jsonData, $this->encRequestKey, $this->encRequestKey);

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_CAINFO => storage_path('app/cacert.pem'),
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => 'encData='.$encData.'&merchId='.$this->login,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/x-www-form-urlencoded',
            ],
        ]);

        $atomTokenId = null;
        try {
            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                throw new Exception(curl_error($curl));
            }

            $getresp = explode('&', $response);
            $encresp = substr($getresp[1], strpos($getresp[1], '=') + 1);
            $decData = $this->decrypt($encresp, $this->decResponseKey, $this->decResponseKey);

            curl_close($curl);

            $res = json_decode($decData, true);

            if ($res && isset($res['responseDetails']['txnStatusCode']) && $res['responseDetails']['txnStatusCode'] == 'OTS0000') {
                $atomTokenId = $res['atomTokenId'];
            } else {
                throw new Exception('Error getting data');
            }
        } catch (Exception $e) {
            logger('payment error: '.$e->getMessage());
        }

        return $atomTokenId;
    }

    public function encrypt($data, $salt, $key)
    {
        $method = 'AES-256-CBC';
        $iv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $chars = array_map('chr', $iv);
        $IVbytes = implode($chars);
        $salt1 = mb_convert_encoding($salt, 'UTF-8'); //Encoding to UTF-8
        $key1 = mb_convert_encoding($key, 'UTF-8'); //Encoding to UTF-8
        $hash = openssl_pbkdf2($key1, $salt1, '256', '65536', 'sha512');
        $encrypted = openssl_encrypt($data, $method, $hash, OPENSSL_RAW_DATA, $IVbytes);

        return strtoupper(bin2hex($encrypted));
    }

    public function decrypt($data, $salt, $key)
    {
        $dataEncypted = hex2bin($data);
        $method = 'AES-256-CBC';
        $iv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $chars = array_map('chr', $iv);
        $IVbytes = implode($chars);
        $salt1 = mb_convert_encoding($salt, 'UTF-8'); //Encoding to UTF-8
        $key1 = mb_convert_encoding($key, 'UTF-8'); //Encoding to UTF-8
        $hash = openssl_pbkdf2($key1, $salt1, '256', '65536', 'sha512');
        $decrypted = openssl_decrypt($dataEncypted, $method, $hash, OPENSSL_RAW_DATA, $IVbytes);

        return $decrypted;
    }
}
