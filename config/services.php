<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'google' => [
        'client_id' => '982984904722-q056tsai23t7v5ou0qph3f25t0au2mqh.apps.googleusercontent.com',         // Your GitHub Client ID
        'client_secret' => 'qfgCmVPa_wxWsog3azn0dXuy', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],
    'twitter' => [
        'client_id' => 'AE2n720TIHN6kAYrok0kSLobH',         // Your GitHub Client ID
        'client_secret' => 'RUnA7OySsS6QjlO5x66IgXAaAZCY94hiPK337hyLcy85RGpym4', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],
    'facebook' => [
        'client_id' => '491232337945100',         // Your GitHub Client ID
        'client_secret' => '2d1131b08590ef657a29b831c2d3f4be', // Your GitHub Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

];
