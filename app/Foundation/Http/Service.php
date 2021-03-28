<?php

namespace App\Foundation\Http;

abstract class Service
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    abstract public function serve($request);
}
