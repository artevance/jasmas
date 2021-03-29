<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ProvinceBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'province_id', $nullable = false) {
                $table = $this->foreignId($fieldName);
                if ($nullable) $table->nullable();
                return $table->constrained('provinces')
                    ->onUpdate('cascade');
            }
        );
    }
}
