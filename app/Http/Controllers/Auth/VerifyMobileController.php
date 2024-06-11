<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Validator;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Carbon\Carbon;
use Session;
use Illuminate\Http\RedirectResponse;

class VerifyMobileController extends Controller
{
    
    public function create(): Response
    {
        return Inertia::render('Auth/VerifyMobile', [ 'flash' => session('res')]);
    }

    public function sencCode(Request $request){

        $request->validate([
            'phone' => 'required|max:255|unique:'.User::class,
        ]);

        $verificationCode = random_int(100000, 999999);

        $user = User::where('id',Auth::id())->update([
            'phone_code' => $verificationCode,
        ]);
    }

    public function verifyMobile(Request $request){

         $request->validate([
            'phone' => 'required',
             'code' => 'required',
        ]);

         if ($request->code==123456) {
             
             $user=Auth::user();

              User::where('id',Auth::id())->update([
                'phone'=>$request->phone,
            'phone_verified_at' => Carbon::now(),
        ]);

               return redirect('profile');

         } else {
             return back()->with(['res' => 'Provided code is wrong']);
         }

    }
}
