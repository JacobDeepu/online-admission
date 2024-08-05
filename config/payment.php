<?php

return [

    /**
     * Username
     */
    'username' => env('PAYMENT_USERNAME'),

    /**
     * Password
     */
    'password' => env('PAYMENT_PASSWORD'),

    /**
     * Product Id
     */
    'product_id' => env('PAYMENT_PRODUCT_ID'),

    /**
     * AES Encryption / Request key
     */
    'enc_request_key' => env('PAYMENT_ENC_REQUEST_KEY'),

    /**
     * AES Decryption / Response key
     */
    'dec_response_key' => env('PAYMENT_DEC_RESPONSE_KEY'),

    /**
     * Payment Url
     */
    'api_url' => env('PAYMENT_API_URL'),

    /**
     * JAvascript Loader Url
     */
    'js_url' => env('PAYMENT_JS_URL'),

];
