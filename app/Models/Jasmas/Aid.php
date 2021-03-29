<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
    HasPeopleAspiration,
};

class Aid extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasPeopleAspiration;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function aidFiles()
    {
        return $this->hasMany(AidFile::class);
    }
}
