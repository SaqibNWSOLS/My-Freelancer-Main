<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Profile;
use Auth;

class FreelancerController extends Controller
{
    

    public function frontView(){


        $profileFront=Profile::where('users_id',Auth::id())->first();

        return Inertia::render('Freelancer/FrontView',['profileFront'=>$profileFront]);
    }
}
