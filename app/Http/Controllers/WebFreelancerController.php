<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Inertia\Inertia;
use App\Models\Profile;
use Auth;

class WebFreelancerController extends Controller
{

     

    public function Categories(){

       return Inertia::render('Categories');
    }
    

    public function frontView(){


        $profileFront=Profile::where('users_id',Auth::id())->first();

        return Inertia::render('Freelancer/FrontView',['profileFront'=>$profileFront]);
    }
}
