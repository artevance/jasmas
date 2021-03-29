<?php

namespace App\Macro\Schema\Blueprint\Date;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class StandardDateBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->date('date');
            }
        );
    }
}
