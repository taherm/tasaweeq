<?php

namespace App\Http\Middleware;

use Closure;

class AdminAccessOnly
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->check()) {
            abort_if(!auth()->user()->id === 1, '403', 'Admin zone only !!!');
            return $next($request);
        } else {
            abort_if(!auth()->check(), '403', 'Site is Under Maintenance');
        }
    }
}
