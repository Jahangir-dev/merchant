<?php

namespace App\Http\Middleware;

use App\IPAddress;
use Closure;

class IpMiddleware
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
        $restrictIps = IPAddress::where('ip_address', \Request::ip())->get();
        if (count($restrictIps) > 0) {
            return response()->json(['you don\'t have permission to access this application.']);
        }

        return $next($request);
        return $next($request);
    }
}
