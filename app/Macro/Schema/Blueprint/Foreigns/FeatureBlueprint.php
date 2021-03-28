<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class FeatureBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'feature_id', $nullable = false) {
                $table = $this->foreignId('feature_id');
                if ($nullable) $table->nullable();
                return $table->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
