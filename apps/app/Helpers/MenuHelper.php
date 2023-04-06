<?php

namespace App\Helpers;

class MenuHelper
{
    /**
     * @param string $param
     * @return string
     */
    public static function checkActive($param)
    {
        if (request()->is($param) || request()->is($param."/*")) {
            return "active current-page";
        }
    }
}
