<?php

namespace App\Macro\Schema\Blueprint\Text;

use App\Foundation\Macro\Schema\BlueprintContract;
use Closure;

class FileNameBlueprint implements BlueprintContract
{
    /**
     * @return \Closure
     */
    public static function register() : Closure
    {
        return (
            function () {
                return $this->text('file_name');
            }
        );
    }
}
