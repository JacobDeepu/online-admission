<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class PaymentController extends Controller
{
    public function setPayData($amount = 0, $email = "", $contact = "", $registration_id)
    {
        $merchTxnId = uniqId();
        $login = "317159";
        $password = "Test@123";
        $product_id = "AIPAY";
        $date = date('Y-m-d H:i:s');
        $encRequestKey = "A4476C2062FFA58980DC8F79EB6A799E";
        $decResponseKey = "75AEF0FA1B94B3C10D4F5B268F757F11";
        $api_url = "https://paynetzuat.atomtech.in/ots/aipay/auth";
        $return_url = route('response');

        $pay_data = array(
            'login' => $login,
            'password' => $password,
            'amount' => $amount,
            'prod_id' => $product_id,
            'txnId' => $merchTxnId,
            'date' => $date,
            'encKey' => $encRequestKey,
            'decKey' => $decResponseKey,
            'payUrl' => $api_url,
            'email' => $email,
            'mobile' => $contact,
            'txnCurrency' => 'INR',
            'return_url' => $return_url,
            'udf1' => "",  // optional
            'udf2' => "",  // optional 
            'udf3' => "",  // optional
            'udf4' => "",  // optional
            'udf5' => ""   // optional
        );

        $atom_token_id = $this->createTokenId($pay_data);

        $data = [
            'login' => $login,
            'url' => $return_url,
            'token' => $atom_token_id
        ];

        Transaction::updateOrCreate(
            ['registration_id' => $registration_id],
            [
                'merch_transaction_id' => $merchTxnId,
                'merch_transaction_date' => $date,
                'bank_transaction_id' => 0,
                'status' => 0
            ]
        );
        return $data;
    }

    // main response function to get response data
    public function response()
    {
        $data = $_POST['encData'];

        $decData = $this->decrypt($data, '75AEF0FA1B94B3C10D4F5B268F757F11', '75AEF0FA1B94B3C10D4F5B268F757F11');
        $jsonData = json_decode($decData, true);

        if ($jsonData['payInstrument']['responseDetails']['statusCode'] == 'OTS0000') {
            $transaction = Transaction::updateOrCreate(
                ['merch_transaction_id' => $jsonData['payInstrument']['merchDetails']['merchTxnId']],
                [
                    'bank_transaction_id' => $jsonData['payInstrument']['payModeSpecificData']['bankDetails']['bankTxnId'],
                    'status' => 1
                ]
            );
            return redirect()->route('export', $transaction->registration_id);
        } else {
            return redirect('/')->with('status', 'Payment Failed!!');
        }
    }

    /**
     * Functions Provided by NTT DATA Payments
     */
    //do not change anything in below function
    public function createTokenId($data)
    {
        $jsondata = '{
                "payInstrument": {
                    "headDetails": {
                        "version": "OTSv1.1",      
                        "api": "AUTH",  
                        "platform": "FLASH"	
                    },
                    "merchDetails": {
                        "merchId": "' . $data['login'] . '",
                        "userId": "",
                        "password": "' . $data['password'] . '",
                        "merchTxnId": "' . $data['txnId'] . '",      
                        "merchTxnDate": "' . $data['date'] . '"
                    },
                    "payDetails": {
                        "amount": "' . $data['amount'] . '",
                        "product": "' . $data['prod_id'] . '",
                        "custAccNo": "213232323",
                        "txnCurrency": "' . $data['txnCurrency'] . '"
                    },	
                    "custDetails": {
                        "custEmail": "' . $data['email'] . '",
                        "custMobile": "' . $data['mobile'] . '"
                    },
                    "extras": {
                        "udf1": "' . $data['udf1'] . '",  
                        "udf2": "' . $data['udf2'] . '",  
                        "udf3": "' . $data['udf3'] . '", 
                        "udf4": "' . $data['udf4'] . '",  
                        "udf5": "' . $data['udf5'] . '" 
                    }
                }  
            }';

        $encData = $this->encrypt($jsondata, $data['encKey'], $data['encKey']);

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $data['payUrl'],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => 1,
            CURLOPT_CAINFO => dirname(__FILE__) . '/cacert.pem', //added in Controllers folder
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "encData=" . $encData . "&merchId=" . $data['login'],
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));
        $atomTokenId = null;
        $response = curl_exec($curl);
        if (curl_errno($curl)) {
            $error_msg = curl_error($curl);
            echo "error = " . $error_msg;
        }
        if (isset($error_msg)) {
            echo "error = " . $error_msg;
        }
        $getresp = explode("&", $response);
        $encresp = substr($getresp[1], strpos($getresp[1], "=") + 1);
        $decData = $this->decrypt($encresp, $data['decKey'], $data['decKey']);
        
        curl_close($curl);
        $res = json_decode($decData, true);
        if ($res) {
            if ($res['responseDetails']['txnStatusCode'] == 'OTS0000') {
                $atomTokenId = $res['atomTokenId'];
            } else {
                echo "Error getting data";
                $atomTokenId = null;
            }
        }
        return $atomTokenId;
    }

    //do not change anything in below function 
    public function encrypt($data, $salt, $key)
    {
        $method = "AES-256-CBC";
        $iv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $chars = array_map("chr", $iv);
        $IVbytes = join($chars);
        $salt1 = mb_convert_encoding($salt, "UTF-8"); //Encoding to UTF-8
        $key1 = mb_convert_encoding($key, "UTF-8"); //Encoding to UTF-8
        $hash = openssl_pbkdf2($key1, $salt1, '256', '65536', 'sha512');
        $encrypted = openssl_encrypt($data, $method, $hash, OPENSSL_RAW_DATA, $IVbytes);
        return strtoupper(bin2hex($encrypted));
    }

    //do not change anything in below function
    public function decrypt($data, $salt, $key)
    {
        $dataEncypted = hex2bin($data);
        $method = "AES-256-CBC";
        $iv = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
        $chars = array_map("chr", $iv);
        $IVbytes = join($chars);
        $salt1 = mb_convert_encoding($salt, "UTF-8"); //Encoding to UTF-8
        $key1 = mb_convert_encoding($key, "UTF-8"); //Encoding to UTF-8
        $hash = openssl_pbkdf2($key1, $salt1, '256', '65536', 'sha512');
        $decrypted = openssl_decrypt($dataEncypted, $method, $hash, OPENSSL_RAW_DATA, $IVbytes);
        return $decrypted;
    }
}
