<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Inertia\Inertia;
use App\Models\Profile;
use Auth;

class FreelancerController extends Controller
{

       public function index()
    {
          $freelancers = User::whereHas('roles', function($query) {
            $query->where('name', 'Freelancer');
        })->get();

        return Inertia::render('Freelancer/Index', ['freelancers' => $freelancers]);
    }
    

    public function frontView(){


        $profileFront=Profile::where('users_id',Auth::id())->first();

        return Inertia::render('Freelancer/FrontView',['profileFront'=>$profileFront]);
    }
}
