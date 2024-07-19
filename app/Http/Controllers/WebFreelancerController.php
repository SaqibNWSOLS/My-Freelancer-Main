<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use Inertia\Inertia;
use App\Models\Profile;
use Auth;
use App\Models\JobCategory;
use App\Models\BillBoard;
use App\Models\Faq;
use App\Models\Tag;


class WebFreelancerController extends Controller
{

     

    public function banners($slug){

        $categories=JobCategory::with('child_categories')->where('status','Active')->where('parent_id',null)->get();
        $catDetail=JobCategory::with('child_categories')->where('slug',$slug)->first();
        $billBoards=BillBoard::where('sub_job_categories_id',$catDetail->id)->get();
        $faqs=Faq::where('job_categories_id',$catDetail->id)->get();
           $tags=Tag::where('job_categories_id',$catDetail->id)->get();
       return Inertia::render('Banner/Banners',['categories'=>$categories,'catDetail'=>$catDetail,'billBoards'=>$billBoards,'faqs'=>$faqs,'tags'=>$tags]);
    }
    

    public function frontView(){


        $profileFront=Profile::where('users_id',Auth::id())->first();

        return Inertia::render('Freelancer/FrontView',['profileFront'=>$profileFront]);
    }
}
