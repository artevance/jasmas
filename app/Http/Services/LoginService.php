<?php

namespace App\Http\Services;

use App\Foundation\Http\Service;
use Illuminate\Support\Facades\Auth;

class LoginService extends Service
{
    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Auth\User  $user
     * @return void
     */
    public function serve($request, $user = null)
    {
        return Auth::loginUsingId($user->id);
    }
}
