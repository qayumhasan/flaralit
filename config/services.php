<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain'   => env('MAILGUN_DOMAIN'),
        'secret'   => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses'      => [
        'key'    => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'stripe' => [
        
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'product_id' => env('STRIPE_PRODUCT_ID'),
        
    ],
//    'google'   => [
//        'client_id'     => "764275568312-6cs0m61uhvvv9l1m2he5h4ef0l7i0b7m.apps.googleusercontent.com",
//        'client_secret' => "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",
//        'redirect'      => "http://localhost/appsumo/auth/google/response",
//    ],
//    'facebook' => [
//        'client_id'     => '1641856719530913',
//        'client_secret' => '38f891e64fd714c2e93359f78f1280b8',
//        'redirect'      => "http://localhost/appsumo/auth/facebook/response",
//    ]
];
