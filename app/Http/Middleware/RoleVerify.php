<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class RoleVerify
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

                if (Auth::check()) {

            $user = Auth::user();
            // Check if the user has any roles
            if ($user->roles->isEmpty()) {

                // Redirect to the choose role page
                return redirect()->route('step2');
            }
        }


        return $next($request);
    }
}
