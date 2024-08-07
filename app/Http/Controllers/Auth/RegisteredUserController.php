<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationCodeMail;
use App\Mail\WelcomeMail;
use Session;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

      public function step2()
    {
        $user=Auth::user();
          if (!$user->roles->isEmpty()) {
            return redirect('profile');
          }
        return Inertia::render('Auth/Register2');
    }

      public function step3(): Response
    {
        return Inertia::render('Auth/Register3',[ 'flash' => session('res')]);
    }

    public function emailCode(Request $request){

        $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
        ]);

        $verificationCode = random_int(100000, 999999);

        $user = User::where('id',Auth::id())->update([
            'verification_code' => $verificationCode,
        ]);

          Mail::to($request->email)->send(new VerificationCodeMail($verificationCode));


    }

public function VerfiyEmailCode(Request $request)
{
    // Validate the request to ensure codeInputs is an array and is present
    $validated = $request->validate([
        'verificationCode' => 'required|array',
    ]);

    $codes = $validated['verificationCode'];
    $finalCode = '';
    foreach ($codes as $code) {
        $finalCode .= $code;
    }
/*Auth::user()->verification_code;
*/    if (Auth::user()->verification_code == $finalCode) {

       
        $user = User::where('id',Auth::id())->update([
            'email' => $request->email,
        ]);

         return redirect(route('profile.index', absolute: false));
    } else {

         return response()->json(['res' => 'Provided code is wrong'], 400);
    }

    
}

public function changeEmail(Request $request){
     $request->validate([
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
        ]);

     $verificationCode = random_int(100000, 999999);

        $user = User::where('id',Auth::id())->update([
            'email' => $request->email,
            'verification_code' => $verificationCode,
        ]);


 Mail::to(Auth::user()->email)->send(new VerificationCodeMail($verificationCode));

}

public function resendEmailOtp(Request $request){

    $verificationCode = random_int(100000, 999999);
       $user = User::where('id',Auth::id())->update([
            'verification_code' => $verificationCode,
        ]);


 Mail::to(Auth::user()->email)->send(new VerificationCodeMail($verificationCode));

}

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
        ]);

        $user = User::create([
            'name' => $request->name,
            'image'=>'default.png',
            'email' => $request->email,
            'password' => Hash::make(rand(1,100)),
        ]);

      //  event(new Registered($user));

        Auth::login($user);

        return redirect(route('step2', absolute: false));
    }

      public function storeStep2(Request $request): RedirectResponse
    {
        $request->validate([
            'password' => 'required|string|max:255',
            'roleType'=>'required'
        ]);
$verificationCode = random_int(100000, 999999);
        $user = User::where('id',Auth::id())->update([
            'password' => Hash::make($request->password),
            'verification_code' => $verificationCode,
        ]);

        $user= Auth::user()->assignRole($request->roleType);
 
  Mail::to(Auth::user()->email)->send(new VerificationCodeMail($verificationCode));
        return redirect(route('profile.index', absolute: false));
    }

public function storeStep3(Request $request): RedirectResponse
{
    // Validate the request to ensure codeInputs is an array and is present
    $validated = $request->validate([
        'codeInputs' => 'required',
    ]);

    $finalCode = $validated['codeInputs'];
    
/*Auth::user()->verification_code;
*/    if (Auth::user()->verification_code == $finalCode) {

        Auth::user()->markEmailAsVerified();
        $user=Auth::user();
        Mail::to($user->email)->send(new WelcomeMail($user->name));

         return redirect(route('profile.index', absolute: false));
    }
    // Return an Inertia response with validation errors
  return redirect(route('verification.notice', absolute: false))->with(['res' => 'Provided code is wrong']);
}
    
}
