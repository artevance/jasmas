<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\{
    Model,
    SoftDeletes,
};
use App\Models\Concerns\{
    HasUserTimestamps,
    HasUserDelete,
};

class Bank extends Model
{
    use SoftDeletes;
    use HasUserTimestamps, HasUserDelete;
}
