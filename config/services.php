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

    'recaptcha_v3' => [
        'site_key' => env('RECAPTCHA_V3_SITE_KEY'),
        'secret_key' => env('RECAPTCHA_V3_SECRET_KEY'),
    ],

    'palych' => [
        'shop_id' => env('PALYCH_SHOP_ID'),
        'token' => env('PALYCH_TOKEN'),
    ],

    'payop' => [
        'key' => env('PAYOP_PUBLIC_KEY'),
        'secret' => env('PAYOP_SECRET_KEY'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'slack' => [
        'notifications' => [
            'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
            'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
        ],
    ],

];
