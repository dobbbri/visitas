<?php

namespace App\Helpers;

use Carbon\Carbon;

class Formatter
{
    public function toTag($class, $text)
    {
        return '<span class="label ' . $class . '"> ' . $text . ' </span>';
    }

    public function toIcon($class, $icon)
    {
        return '<i class="material-icons ' . $class . '">'
            . $icon . '</i>';
    }

    public function disabledTag($is_disabled)
    {
        if ($is_disabled) {

            return $this->toTag('label label-danger', 'Desativado') . '&nbsp;';
        }

        return null;
    }

    public function color($value, $color)
    {
        return '<span class="' . $color . '">' . $value . '</span>';
    }

    public function toYYYYMMDD($value)
    {
        if ($value) {

            return Carbon::parse(
                Carbon::createFromFormat('d/m/Y', $value)
            )->format('Y-m-d');

        } else {

            return '0000-00-00';
        }
    }

    public function toDDMMYYYY($value)
    {
        if ($value !== '0000-00-00') {

            return Carbon::parse($value)->format('d/m/Y');
        }

        return '';
    }

    public function toDDMM($value)
    {
        if ($value !== '0000-00-00') {

            return Carbon::parse($value)->format('d/m');
        }

        return '';
    }

    public function toHHMMSS($value)
    {
        if ($value) {

            return Carbon::parse($value . ':00')->format('H:i:s');

        } else {

            return '00:00:00';
        }
    }

    public function toHHMM($value)
    {
        if ($value !== '00:00:00') {

            return Carbon::parse($value)->format('H:i');
        }
    }

}
