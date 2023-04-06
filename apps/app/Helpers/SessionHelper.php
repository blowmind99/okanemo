<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;

class SessionHelper
{
    /**
     * @param string $status
     * @param string $status'
     */
    public static function alert($status, $message)
    {
        Session::flash('status', $status);
        Session::flash('messages', $message);
    }
}
