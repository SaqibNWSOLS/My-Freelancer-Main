<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\JobCategory;
use Inertia\Inertia;
use App\Traits\uploadTrait;


class JobCategoryController extends Controller
{

    use uploadTrait;

      public function index()
    {
     $jobCategories = JobCategory::with('parentDetail')->get(); 
        return Inertia::render('Job/JobCategory/Index', ['jobCategories' => $jobCategories]);
    }

    public function create()
    {
         $jobCategories = JobCategory::where('parent_id',null)->with('child_categories')->get(); 
        return Inertia::render('Job/JobCategory/Create', ['jobCategories' => $jobCategories]);
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id'=>'nullable|integer|max:20',
            'status' => 'required|in:Active,In-Active',
        ]);

        $filePath=$this->uploadIcon($request);
       

        $jobCategory = JobCategory::create($validatedData);
        $jobCategory->slug=generateSlug($request->name);
        $jobCategory->icon=$filePath;

          if ($request->has('banner') && !empty($request->banner)) {

        $bannerPath=$this->uploadBanner($request);
          $jobCategory->banner=$bannerPath;
       
       }
        $jobCategory->save();

         return redirect(route('jobCategory.index', [], false));
    }

    public function show(JobCategory $jobCategory)
    {
        //
    }

      public function edit(JobCategory $jobCategory)
    {
        $jobCategories = JobCategory::where('parent_id',null)->with('child_categories')->get(); 
        return Inertia::render('Job/JobCategory/Edit', ['jobCategory' => $jobCategory,'jobCategories' => $jobCategories]);
    }

        public function update(Request $request, JobCategory $jobCategory)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'parent_id'=>'nullable|integer|max:20',
            'status' => 'required|in:Active,In-Active',
        ]);
              $jobCategory->name=$request->name;
               $jobCategory->slug=generateSlug($request->name);
               $jobCategory->parent_id=$request->parent_id;
                $jobCategory->status=$request->status;


       if ($request->has('icon') && !empty($request->icon)) {

        $filePath=$this->uploadIcon($request);
          $jobCategory->icon=$filePath;
       
       }
       if ($request->has('banner') && !empty($request->banner)) {

        $filePath=$this->uploadBanner($request);
          $jobCategory->banner=$filePath;
       
       }
 $jobCategory->save();
        return redirect(route('jobCategory.index', [], false));
    }

    public function destroy(JobCategory $jobCategory)
{
    $jobCategory->delete();

    return redirect(route('jobCategory.index', [], false));
}


}
