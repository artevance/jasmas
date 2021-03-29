<?php

namespace App\Macro\Schema\Blueprint\Strings;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class PhoneBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->string('phone', 30);
            }
        );
    }
}
