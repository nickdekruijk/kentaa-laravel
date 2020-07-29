<?php

namespace NickDeKruijk\Kentaa;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return Kentaa::class;
    }
}
