<?php

namespace App\Helpers;

class Converter
{
    public function decToInt($value = 0)
    {
        return str_replace([',', '.'], '', $value);
    }

    public function decToFloat($value = 0)
    {
        return $this->decimalToInt($value) / 100;
    }

    public function intToDec($value = 0)
    {
        return number_format(($value / 100), 2, ',', '.');
    }
}
