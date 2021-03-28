<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Widget extends Pivot
{
    /**
     * @var boolean
     */
    public $incrementing = true;
}
