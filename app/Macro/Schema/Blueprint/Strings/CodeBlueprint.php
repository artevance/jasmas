<?php

namespace App\Macro\Schema\Blueprint\Strings;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class CodeBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register()
    {
        return (
            function () {
                return $this->string('code', 100)->unique();
            }
        );
    }
}
