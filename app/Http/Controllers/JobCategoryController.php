<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\JobCategory;
use Inertia\Inertia;


class JobCategoryController extends Controller
{
      public function index()
    {
     $jobCategories = JobCategory::with('parentDetail')->get(); 
        return Inertia::render('Job/JobCategory/Index', ['jobCategories' => $jobCategories]);
    }

    public function create()
    {
         $jobCategories = JobCategory::where('parent_id',0)->get(); 
        return Inertia::render('Job/JobCategory/Create', ['jobCategories' => $jobCategories]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $jobCategory = JobCategory::create($validatedData);

         return redirect(route('jobCategory.index', [], false));
    }

    public function show(JobCategory $jobCategory)
    {
        //
    }

      public function edit(JobCategory $jobCategory)
    {
        $jobCategories = JobCategory::where('parent_id',0)->get(); 
        return Inertia::render('Job/JobCategory/Edit', ['jobCategory' => $jobCategory,'jobCategories' => $jobCategories]);
    }

        public function update(Request $request, JobCategory $jobCategory)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:active,inactive',
        ]);

        $jobCategory->update($validatedData);

        return redirect(route('jobCategory.index', [], false));
    }

    public function destroy(JobCategory $jobCategory)
{
    $jobCategory->delete();

    return redirect(route('jobCategory.index', [], false));
}


}
