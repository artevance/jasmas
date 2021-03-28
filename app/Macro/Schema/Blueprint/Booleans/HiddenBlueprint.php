<?php

namespace App\Macro\Schema\Blueprint\Booleans;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class HiddenBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->boolean('hidden');
            }
        );
    }
}
