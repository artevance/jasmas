<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class WidgetType extends Model
{
    /**
     * @var boolean
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function modules()
    {
        return $this->belongsToMany(Module::class)->using(Widget::class);
    }
}
