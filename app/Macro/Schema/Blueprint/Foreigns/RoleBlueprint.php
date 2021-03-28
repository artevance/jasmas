<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class RoleBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'role_id', $nullable = false) {
                $table = $this->foreignId('role_id');
                if ($nullable) $table->nullable();
                return $table->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
