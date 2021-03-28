<?php

namespace App\Macro\Schema\Blueprint\Foreigns;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class PackageBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public function register() : Closure
    {
        return (
            function ($fieldName = 'package_id') {
                return $this->foreignId('package_id')
                    ->constrained()
                    ->onUpdate('cascade');
            }
        );
    }
}
