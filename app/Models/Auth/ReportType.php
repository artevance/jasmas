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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
