<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isChatable
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
        // || auth()->user()->access_chat_id !== $request->segment(2)
        if(auth()->guest() || auth()->user()->pricing_tier_id !== 2) {
            abort(403);
        }

        return $next($request);
    }
}
