<?php

namespace App\Helpers;

class Setting
{
    protected static $values = [
        'records_per_page' => 19,
        'log_enabled'      => true,
    ];

    public static function get($key)
    {
        return static::$values[$key];
    }
}
