<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ActionBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'action_id') {
                return $this->foreignId('action_id')
                    ->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
