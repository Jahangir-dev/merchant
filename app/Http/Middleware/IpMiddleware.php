<?php

namespace App\Http\Middleware;

use App\IPAddress;
use Closure;
use Illuminate\Support\Facades\Auth;
use function Symfony\Component\String\s;

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
        $status = Auth::user()->status;

        if (count($restrictIps) > 0 || $status == true) {
            return response()->json(['you don\'t have permission to access this application.']);
        }

        return $next($request);
        return $next($request);
    }
}
