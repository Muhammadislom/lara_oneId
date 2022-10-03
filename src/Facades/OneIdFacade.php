<?php

namespace Muhammadislom\oneId\Facade;

use Illuminate\Support\Facades\Facade;

class OneIdFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'muhammadislom.one-id';
    }

}