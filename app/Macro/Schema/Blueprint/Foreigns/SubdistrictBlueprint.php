<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class SubdistrictBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'subdistrict_id', $nullable = false) {
                $table = $this->foreignId($fieldName);
                if ($nullable) $table->nullable();
                return $table->constrained('subdistricts')
                    ->onUpdate('cascade');
            }
        );
    }
}
