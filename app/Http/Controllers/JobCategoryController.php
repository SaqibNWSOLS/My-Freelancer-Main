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
     $jobCategories = JobCategory::all(); 
        return Inertia::render('Job/JobCategory/Index', ['jobCategories' => $jobCategories]);
    }

    public function create()
    {
        return Inertia::render('Job/JobCategory/Create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'parent_id' => 'required|string|max:255',
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
        return Inertia::render('Job/JobCategory/Edit', ['jobCategory' => $jobCategory]);
    }

        public function update(Request $request, JobCategory $jobCategory)
    {
        $validatedData = $request->validate([
            'parent_id' => 'required|max:255',
            'name' => 'required|string|max:255',
            'status' => 'required|in:Active,Inactive',
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
