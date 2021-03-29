<?php

namespace App\Macro\Schema\Blueprint\Timestamps;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class FourthReviewedAtBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->timestamp('fourth_reviewed_at')->nullable();
            }
        );
    }
}
