<?php

namespace App\Macro\Schema\Blueprint\Strings;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class NameBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register()
    {
        return (
            function () {
                return $this->string('name', 200);
            }
        );
    }
}
