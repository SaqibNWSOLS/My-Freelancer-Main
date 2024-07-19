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
use App\Models\Faq;
use App\Models\Tag;


class CategoriesController extends Controller
{
     public function Categories(){

        $categories=JobCategory::with('child_categories')->where('status','Active')->where('parent_id',null)->get();
        $faqs=Faq::where('job_categories_id',null)->get();

       return Inertia::render('Banner/Categories',['categories'=>$categories,'faqs'=>$faqs]);
    }

     public function SubCategories($slug){

        $categories=JobCategory::with('child_categories')->where('status','Active')->where('parent_id',null)->get();
        $catDetail=JobCategory::with('child_categories')->where('slug',$slug)->first();
         $faqs=Faq::where('job_categories_id',$catDetail->id)->get();
          $tags=Tag::where('job_categories_id',$catDetail->id)->get();
       return Inertia::render('Banner/SubCategories',['categories'=>$categories,'catDetail'=>$catDetail,'faqs'=>$faqs,'tags'=>$tags]);
    }

    
}
