<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;
use App\Models\Setting;

class MobileVerify
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
     
            // Check if the user has the 'admin' role
            if ($user->hasRole('Admin')) {
                // Redirect to the admin dashboard
                return redirect()->route('admin-dashboard');
            }
        }
      
       $settings=Setting::get();

         if ((!$request->user() || !$request->user()->email_verified_at) && (isset($settings[0]) && $settings[0]->value=='Active')){
            return redirect('verify-email');
        }
        if ((!$request->user() || !$request->user()->phone_verified_at)  && (isset($settings[0]) && $settings[1]->value=='Active')) {
            return redirect('verify-mobile');
        }

        return $next($request);
    }
}
