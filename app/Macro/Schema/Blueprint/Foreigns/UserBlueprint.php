<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class UserBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'user_id', $nullable = false) {
                $table = $this->foreignId('user_id');
                if ($nullable) $table->nullable();
                return $table->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}