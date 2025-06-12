<?php

use App\Models\Setting;

if (! function_exists('setting'))
{
    function setting(): Setting
    {
        return Setting::query()->first();
    }
}
