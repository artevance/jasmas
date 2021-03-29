<?php

namespace App\Macro\Schema\Blueprint\Decimal;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ValueDateBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->decimal('value', 20, 4);
            }
        );
    }
}
