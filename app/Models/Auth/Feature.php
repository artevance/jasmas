<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Feature extends Pivot
{
    /**
     * @var boolean
     */
    public $incrementing = true;
}
