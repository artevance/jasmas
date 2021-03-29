<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
    HasFile,
};

class ProposalLetterFile extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasFile;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function proposalLetter()
    {
        return $this->belongsTo(ProposalLetter::class);
    }
}
