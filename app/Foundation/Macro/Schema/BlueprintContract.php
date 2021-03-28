<?php

namespace App\Foundation\Macro\Schema;

use Closure;

interface BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register() : Closure;
}
