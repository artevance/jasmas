<?php

namespace App\Models\Jasmas;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
    HasPeopleAspiration,
};

class Domicile extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasPeopleAspiration;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function endorsementFiles()
    {
        return $this->hasMany(DomicileFile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function subdistrict()
    {
        return $this->belongsTo(\App\Models\Master\Subdistrict::class);
    }
}
