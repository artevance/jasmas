<?php

namespace App\Models\Concerns;

trait HasFile
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function file()
    {
        return $this->belongsTo(\App\Models\Storage\File::class);
    }
}
