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

class Organization extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasPeopleAspiration;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function organizationFiles()
    {
        return $this->hasMany(OrganizationFile::class);
    }
}
