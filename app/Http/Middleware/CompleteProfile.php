<?php

namespace App\Http\Middleware;

use App\Models\NextOfKin;
use Closure;
use Illuminate\Http\Request;

class CompleteProfile
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
        if (auth()->user()) {
            if (auth()->user()->complete == true) {
                return $next($request);
            }
            return redirect()->route('userProfiles.index');
        }

        return redirect('login');
    }
}
