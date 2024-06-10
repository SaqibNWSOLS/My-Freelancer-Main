<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Validator;
use App\Models\Job;

class JobController extends Controller
{
   
   public function create(){

     return Inertia::render('Job/Create');
   }
}
