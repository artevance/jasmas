<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class ReportType extends Model
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
        return $this->belongsToMany(Module::class)->using(Report::class);
    }
}
