<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class DistrictBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'district_id', $nullable = false) {
                $table = $this->foreignId($fieldName);
                if ($nullable) $table->nullable();
                return $table->constrained('districts')
                    ->onUpdate('cascade');
            }
        );
    }
}
