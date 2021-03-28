<?php

namespace App\Foundation\Macro\Schema;

use Closure;

interface BlueprintContract
{
    /**
     * @var string
     */
    const MAIN_METHOD = 'register';

    /**
     * @return \Closure
     */
    public static function register() : Closure;
}
