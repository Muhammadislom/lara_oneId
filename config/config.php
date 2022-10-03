<?php

return [
    'authorizationUrl' => env( 'ONEID_AUTHORIZATION_URL', 'https://sso.egov.uz/sso/oauth/Authorization.do' ),
    'responseType' => env( 'ONEID_RESPONSE_TYPE', null),
    'clientId' => env( 'ONEID_CLIENT_ID', null ),
    'redirectUri' => env( 'ONEID_REDIRECT_URI', null ),
    'clientSecret' => env( 'ONEID_CLIENT_SECRET', null),
    'scope' => env( 'ONEID_SCOPE', null ),
    'stateArr' => [ 'method' => null ],
];