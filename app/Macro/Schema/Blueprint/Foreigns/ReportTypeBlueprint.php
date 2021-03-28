<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ReportTypeBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register() : Closure
    {
        return (
            function ($fieldName = 'report_type_id') {
                return $this->foreignId('report_type_id')
                    ->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
