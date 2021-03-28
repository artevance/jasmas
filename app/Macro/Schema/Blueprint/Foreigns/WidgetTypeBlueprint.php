<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class WidgetTypeBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'widget_type_id') {
                return $this->foreignId('widget_type_id')
                    ->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
