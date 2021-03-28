<?php

namespace App\Macro\Schema\Blueprints\Booleans;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ActiveBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register() : Closure
    {
        return (
            function () {
                return $this->boolean('active');
            }
        );
    }
}
