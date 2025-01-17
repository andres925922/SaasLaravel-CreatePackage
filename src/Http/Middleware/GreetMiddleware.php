<?php

namespace aconvertini\Greetr\Http\Middleware;

use Closure;

class GreetMiddleware
{
    public function handle($request, Closure $next)
    {
        if (!config('greet.enabled')) {
            return response('Package is disabled', 403);
        }

        return $next($request);
    }
}
