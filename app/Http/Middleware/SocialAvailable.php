<?php

namespace App\Http\Middleware;

use App\Account;
use Closure;
use Illuminate\Support\Facades\Auth;

class SocialAvailable
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $hasAccount = Account::where('account_userid', Auth::user()->id)->first();
        if (!$hasAccount) {
            return redirect("/social/connect");
        }
        return $next($request);
    }
}
