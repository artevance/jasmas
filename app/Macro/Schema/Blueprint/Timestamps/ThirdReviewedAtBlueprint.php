<?php

namespace App\Macro\Schema\Blueprint\Timestamps;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class ThirdReviewedAtBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->timestamp('third_reviewed_at')->nullable();
            }
        );
    }
}
