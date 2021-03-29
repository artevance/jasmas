<?php

namespace App\Macro\Schema\Blueprint\Strings;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class NikBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->string('nik', 16);
            }
        );
    }
}
