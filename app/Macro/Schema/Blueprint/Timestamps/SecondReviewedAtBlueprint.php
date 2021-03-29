<?php

namespace App\Macro\Schema\Blueprint\Timestamps;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class SecondReviewedAtBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->timestamp('second_reviewed_at')->nullable();
            }
        );
    }
}
