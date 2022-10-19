<?php

namespace App\Http\Middleware;

use App\Http\Controllers\AdminController;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // not allow user
        if (Auth::check()) {
            return redirect()->route('home');
        }

        // if admin logged in
        if (Auth::guard('admin')->check()) {
            return $next($request);
        } else {
            return redirect()->route('admin.login');
        }
    }
}
