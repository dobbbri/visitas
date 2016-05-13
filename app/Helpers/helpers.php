<?php

function alert()
{
    return app('App\Helpers\Alert');
}

function formatter()
{
    return app('App\Helpers\Formatter');
}

function converter()
{
    return app('App\Helpers\Converter');
}

function setting()
{
    return app('App\Helpers\Setting');
}

function activity()
{
    return app('App\Helpers\Activity');
}
