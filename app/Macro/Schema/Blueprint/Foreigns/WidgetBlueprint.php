<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class WidgetBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'widget_id', $nullable = false) {
                $table = $this->foreignId('widget_id');
                if ($nullable) $table->nullable();
                return $table->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
