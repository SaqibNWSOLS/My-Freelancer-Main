<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Validator;
use App\Models\Job;
use App\Models\Setting\Country;
use Auth;

class JobController extends Controller
{
   
   public function create(){
 $countries = Country::all(); 
     return Inertia::render('Job/Create',['countries'=>$countries]);
   }

   public function store(Request $request){


    $pArray=explode('-', $request->price);

 //   return json_encode($pArray);

    $job=new Job();
    $job->title=$request->title;
    $job->slug=generateSlug($request->title);
    $job->users_id=Auth::id();
    $job->job_categories_id=$request->job_categories_id;
    $job->description=$request->description;
    $job->price=$request->price;
    $job->min_price=isset($pArray[0])? (float) $pArray[0]:0;
    $job->max_price=isset($pArray[1])? (float) $pArray[1]:0;
     $job->countries=json_encode($request->countries);
    $job->visile_to=$request->visile_to;
    $job->date_till=date('Y-m-d',strtotime($request->date_till));
    $job->save();
    
     return redirect(route('profile.index', [], false));
   }
}
