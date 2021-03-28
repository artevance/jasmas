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

class AuthenticationLog extends Model
{
    use SoftDeletes;
    use HasUser, HasUserDelete;
}
