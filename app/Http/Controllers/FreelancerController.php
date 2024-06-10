<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Symfony\Component\HttpFoundation\Response;

class FreelancerController extends Controller
{
    

    public function frontView(){

        return Inertia::render('Freelancer/FrontView');
    }
}
