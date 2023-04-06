<?php

namespace App\Traits;

trait CreatedTime

{
    public function created_time()
    {
        return date('d F Y h:i:s', strtotime($this->created_at));
    }
}
