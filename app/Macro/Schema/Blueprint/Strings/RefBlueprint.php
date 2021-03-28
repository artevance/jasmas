<?php

namespace App\Macro\Schema\Blueprint\Strings;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class RefBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register()
    {
        return (
            function () {
                return $this->string('ref', 200)->unique();
            }
        );
    }
}
