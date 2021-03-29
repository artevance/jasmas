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
    HasFile,
};

class Chairman extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete, HasPeopleAspiration, HasFile;
}
