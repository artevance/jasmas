<?php

namespace App\Macro\Schema\Blueprint\Booleans;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ActiveBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->boolean('active');
            }
        );
    }
}
