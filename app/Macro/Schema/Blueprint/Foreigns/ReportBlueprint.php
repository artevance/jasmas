<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ReportBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function ($fieldName = 'report_id', $nullable = false) {
                $table = $this->foreignId('report_id');
                if ($nullable) $table->nullable();
                return $table->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
