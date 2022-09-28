<?php

namespace oneId;

use Illuminate\Support\Facades\Facade;

class OneIdFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return OneIdClient::class;
    }

}