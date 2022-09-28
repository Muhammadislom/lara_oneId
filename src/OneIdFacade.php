<?php

namespace oneIdAuth;

use Illuminate\Support\Facades\Facade;

class OneIdFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OneIdClient::class;
    }

}