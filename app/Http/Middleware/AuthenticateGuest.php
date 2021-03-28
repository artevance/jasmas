<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Foundation\Http\ManageService;
use App\Http\Services\LoginService;

class AuthenticateGuest
{
    use ManageService;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ( ! Auth::check()) {
            $user = User::isGuest()->first();
            $this->manage(new LoginService, $request, $user);
        }

        return $next($request);
    }
}
