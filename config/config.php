<?php

return [
    'authorization_url' => env( 'ONEID_AUTHORIZATION_URL', 'https://sso.egov.uz/sso/oauth/Authorization.do' ),

    'response_type' => env( 'ONEID_RESPONSE_TYPE', null),

    'client_id' => env( 'ONEID_CLIENT_ID', null ),

    'redirect_uri' => route('login'),

    'client_secret' => env( 'ONEID_CLIENT_SECRET', null),

    'scope' => env( 'ONEID_SCOPE', null ),

    'state_arr' => [ 'method' => null ],
];