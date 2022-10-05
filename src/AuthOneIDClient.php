<?php

namespace Muhammadislom\oneId;

use Illuminate\Support\Facades\Http;

class AuthOneIDClient
{

    public function getAccessToken($code)
    {
        return  Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_AUTH_URL'), [
            'grant_type' => env('ONE_ID_GRANT_TYPE_CODE'),
            'client_id' => env('ONE_ID_CLIENT_ID'),
            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
            'redirect_url' => env('ONE_ID_REDIRECT_URL'),
            'code' => $code
        ]);
    }
    public function getOneIdClient($access_token)
    {
        return  Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_TOKEN_URL'), [
            'grant_type' => env('ONE_ID_GRANT_TYPE_IDENTIFY'),
            'client_id' => env('ONE_ID_CLIENT_ID'),
            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
            'access_token' => $access_token,
            'scope' => env('ONE_ID_SCOPE')
        ]);
    }

}