<?php

namespace App\Models\Jasmas;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
    HasFile,
};

class ApplicationLetterFile extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasFile;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function applicationLetter()
    {
        return $this->belongsTo(ApplicationLetter::class);
    }
}
