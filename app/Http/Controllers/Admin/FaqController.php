<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Faq;
use App\Models\JobCategory;

class FaqController extends Controller
{
   
     public function index()
    {
        $faqs = Faq::with('category_detail')->get();
        return Inertia::render('Admin/Faq/Index', ['faqs' => $faqs]);
    }

     public function create()
    {
         $categories = JobCategory::where('parent_id',null)->with('child_categories')->get();
        return Inertia::render('Admin/Faq/Create', ['categories' => $categories]);
    }

      public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|string|max:255',
             'answer' => 'required',
             'job_categories_id' => 'nullable|exists:job_categories,id',
            'status' => 'required|in:Active,In-Active',
        ]);

        $state = Faq::create($validatedData);

         return redirect(route('faq.index', [], false));
    }

      public function edit(Faq $faq)
    {
         $categories = JobCategory::where('parent_id',null)->with('child_categories')->get();
        return Inertia::render('Admin/Faq/Edit', ['faq' => $faq, 'categories' => $categories]);
    }

     public function update(Request $request, Faq $faq)
    {
         $validatedData = $request->validate([
            'question' => 'required|string|max:255',
             'answer' => 'required',
             'job_categories_id' => 'nullable|exists:job_categories,id',
            'status' => 'required|in:Active,In-Active',
        ]);
        $faq->update($validatedData);

         return redirect(route('faq.index', [], false))->with('success', 'Faq has been updated successfully!');
    }

      public function destroy(Faq $faq)
    {
        $faq->delete();

       return redirect(route('faq.index', [], false));
    }
}
