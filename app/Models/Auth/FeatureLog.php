<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes
};
use App\Models\Concerns\{
    HasUser,
    HasUserDelete,
};

class FeatureLog extends Model
{
    use SoftDeletes;
    use HasUser, HasUserDelete;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
