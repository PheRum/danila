<?php

namespace App\Http\Middleware;

use App\Events\UserLogin;
use Closure;

class UserStat
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth()->check()) {
            if (auth()->user()->updated_at->format('Y-m-d') !== now()->toDateString()) {
                /** @noinspection PhpParamsInspection */
                event(new UserLogin(auth()->user()));
            }
        }

        return $next($request);
    }
}
