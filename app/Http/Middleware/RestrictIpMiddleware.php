<?php

namespace App\Http\Middleware;
use App\Models\BlockedIps;

use Closure;

class RestrictIpMiddleware
{

    // Blocked IP addresses
    public $restrictedIp = [];

    public function restrictedIp()
    {
        $this->restrictedIp =BlockedIps::get();
    }

    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->restrictedIp();
        if (in_array($request->ip(), $this->restrictedIp->pluck('ip')->toArray())) {
            return response()->json(['message' => "You are not allowed to access this site."]);
        }
        return $next($request);
    }
}
