<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Tag;
use App\Models\JobCategory;
use App\Traits\uploadTrait;

class TagController extends Controller
{
    use uploadTrait;
     public function index()
    {
        $tags = Tag::with('category_detail')->get();
        return Inertia::render('Admin/Tag/Index', ['tags' => $tags]);
    }

     public function create()
    {
         $categories = JobCategory::where('parent_id',null)->with('child_categories')->get();
        return Inertia::render('Admin/Tag/Create', ['categories' => $categories]);
    }

     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
             'job_categories_id' => 'required|exists:job_categories,id',
            'status' => 'required|in:Active,In-Active',
        ]);

        $tag = Tag::create($validatedData);

        $filePath=$this->uploadIcon($request);
          $tag->slug=generateSlug($request->name);
        $tag->icon=$filePath;
        $tag->save();

         return redirect(route('tag.index', [], false));
    }

       public function edit(Tag $tag)
    {
         $categories = JobCategory::where('parent_id',null)->with('child_categories')->get();
        return Inertia::render('Admin/Tag/Edit', ['tag' => $tag, 'categories' => $categories]);
    }

      public function update(Request $request, Tag $tag)
    {

          $validatedData = $request->validate([
            'name' => 'required|string|max:255',
             'job_categories_id' => 'required|exists:job_categories,id',
            'status' => 'required|in:Active,In-Active',
        ]);
        $tag->update($validatedData);
         $tag->slug=generateSlug($request->name);
        if ($request->has('icon') && !empty($request->icon)) {
           $filePath=$this->uploadIcon($request);
        $tag->icon=$filePath;
      
        }
          $tag->save();
       

         return redirect(route('tag.index', [], false))->with('success', 'Faq has been updated successfully!');
    }

      public function destroy(Tag $tag)
    {
        $tag->delete();

       return redirect(route('tag.index', [], false));
    }
}
