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

class ProposalLetter extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasPeopleAspiration;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proposalLetterFiles()
    {
        return $this->hasMany(ProposalLetterFile::class);
    }
}
