<?php

namespace App\Models\Concerns;

trait HasPeopleAspiration
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function peopleAspiration()
    {
        return $this->belongsTo(\App\Models\Jasmas\PeopleAspiration::class);
    }
}
