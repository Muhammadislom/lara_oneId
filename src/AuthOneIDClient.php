<?php

namespace oneId;

use Illuminate\Support\Facades\Http;

class AuthOneIDClient
{
    public function getAccessToken()
    {
        $res = Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_AUTH_URL'), [
            'grant_type' => env('ONE_ID_GRANT_TYPE_CODE'),
            'client_id' => env('ONE_ID_CLIENT_ID'),
            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
            'redirect_url' => env('ONE_ID_REDIRECT_URL'),
            'code' => $this->code
        ]);
        // GET ONE ID CLIENT BY ACCESS TOKEN. Token type << Bearer >>
        $access_token = $res->json('access_token');
        $this->access_token = $res->json('access_token');
    }

    public function getOneIdClient()
    {
        // GET ONE ID CLIENT
        $one_id_client = Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_TOKEN_URL'), [
            'grant_type' => env('ONE_ID_GRANT_TYPE_IDENTIFY'),
            'client_id' => env('ONE_ID_CLIENT_ID'),
            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
//            'access_token' => $access_token,
            'scope' => env('ONE_ID_SCOPE')
        ]);
    }

}


//    public function login(): object
//    {
//        // GET ACCESS TOKEN
//        $res = Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_AUTH_URL'), [
//            'grant_type' => env('ONE_ID_GRANT_TYPE_CODE'),
//            'client_id' => env('ONE_ID_CLIENT_ID'),
//            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
//            'redirect_url' => env('ONE_ID_REDIRECT_URL'),
//            'code' => $this->code
//        ]);
//
//        // GET ONE ID CLIENT BY ACCESS TOKEN. Token type << Bearer >>
//        $access_token = $res->json('access_token');
//        $this->access_token = $res->json('access_token');
//
//        // GET ONE ID CLIENT
//        $one_id_client = Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_TOKEN_URL'), [
//            'grant_type' => env('ONE_ID_GRANT_TYPE_IDENTIFY'),
//            'client_id' => env('ONE_ID_CLIENT_ID'),
//            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
//            'access_token' => $access_token,
//            'scope' => env('ONE_ID_SCOPE')
//        ]);
//    }
//
//
//    public function logout()
//    {
//        $res =  Http::withOptions(['verify' => false])->asForm()->post(env('ONE_ID_AUTH_URL'), [
//
//            //            'grant_type' => env('ONE_ID_GRANT_TYPE_CODE'),
//            'grant_type' => 'one_log_out',
//            'client_id' => env('ONE_ID_CLIENT_ID'),
//            'client_secret' => env('ONE_ID_CLIENT_SECRET'),
//            'access_token' => $this->access_token,
//            'scope' => env('ONE_ID_SCOPE')
//        ]);
//    }
//}