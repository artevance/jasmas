<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ModuleBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register() : Closure
    {
        return (
            function ($fieldName = 'module_id') {
                return $this->foreignId('module_id')
                    ->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
