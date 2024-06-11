<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MobileVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         if (!$request->user() || !$request->user()->email_verified_at) {
            return redirect('verify-email');
        }
        if (!$request->user() || !$request->user()->phone_verified_at) {
            return redirect('verify-mobile');
        }

        return $next($request);
    }
}
