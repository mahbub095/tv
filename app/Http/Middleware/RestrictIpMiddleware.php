<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
 

class RestrictIpMiddleware  
{

    // Blocked IP addresses
    public $restrictedIp = [];

    public function restrictedIp()
    {
        $this->restrictedIp = \App\Models\BlockedIps::get();
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        $this->restrictedIp();
        if (in_array($request->ip(), $this->restrictedIp->pluck('ip')->toArray())) {
            return response()->json(['message' => "You are not allowed to access this site."]);
        }
        return $next($request);
    }
}
