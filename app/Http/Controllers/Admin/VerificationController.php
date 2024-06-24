<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Verfication;
use Auth;
use Str;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class VerificationController extends Controller
{
       public function index()
{
    $verifications = Verfication::with('user')->get(); 
    return Inertia::render('Verification/Index', ['verifications' => $verifications]);
}

public function show($id)
{
    $verification = Verfication::with('user')->where('id',$id)->first(); 
    return Inertia::render('Verification/Show', ['verification' => $verification]);
}

public function approveVerific(Request $request){


        $validatedData = $request->validate([
            'app_message' => 'required|string|max:512',
            'verifications_id'=>'required'
        ],   [
    'app_message.required'=> 'Approval message is required.'
   ]);
$verification = Verfication::with('user')->where('id',$request->verifications_id)->first(); 
$verification->status='Approved';

$verification->save();
return back();

}

public function rejectVerific(Request $request){
    
        $validatedData = $request->validate([
            'rej_message' => 'required|string|max:512',
            'verifications_id'=>'required'
        ],   [
    'rej_message.required'=> 'Rejection reason is required.'
   ]);
$verification = Verfication::with('user')->where('id',$request->verifications_id)->first(); 
$verification->status='Rejected';

$verification->save();
}
}
