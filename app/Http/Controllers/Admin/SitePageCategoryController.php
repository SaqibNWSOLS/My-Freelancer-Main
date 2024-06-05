<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Media;
use App\Http\Controllers\Controller;
use App\Models\SitePage;
use App\Models\Blog;
use App\Models\SitePageCategory;
use Illuminate\Http\Request;

class SitePageCategoryController extends Controller
{
    use Media;

    public function index(Request $request)
    {

        $pages = SitePageCategory::with('parentCategory')->select('id', 'name', 'page_categories_id', 'description', 'status');
        if (!empty($request->search)) {
             $pages = $pages->where('name','LIKE', '%'.$request->search.'%');
        }
        $pages = $pages->orderBy('id', 'asc')->paginate(10);

        $per_page_opt = perPageOpt();
        $per_page_record = setting('_general.per_page_record');
        $this->per_page = !empty($per_page_record) ? $per_page_record : 10;

        $mainCategories = SitePageCategory::with('childCategories')->where('page_categories_id', 0)->where('type','support_page')->orderBy('sort_id')->get();
        $blogCategories = SitePageCategory::with('blogsList')->where('page_categories_id', 0)->where('type','blog')->orderBy('sort_id')->get();

        return view('admin.page_categories.index', compact('pages', 'per_page_opt', 'mainCategories','blogCategories'))->extends('layouts.admin.app');
    }

    public function create()
    {
        $pageCategory = SitePageCategory::with('childCategories')->where('page_categories_id', 0)->get();
        return view('admin.page_categories.create', compact('pageCategory'));
    }

    public function createCatModel(Request $request){
        $pageCategory = SitePageCategory::with('childCategories')->where('type',$request->type)->where('page_categories_id', 0)->get();
        $type=$request->type;
        $parentId=$request->id;
        return view('admin.page_categories.create-model', compact('pageCategory','type','parentId'));
    }

    public function editCatModel(Request $request){
         $pageCategory = SitePageCategory::with('childCategories')->where('type',$request->type)->where('page_categories_id', 0)->get();
        $category = SitePageCategory::where('id', $request->id)->first();
         $type=$request->type;
        return view('admin.page_categories.edit-model', compact('pageCategory','category','type'));
    }

    public function edit($id)
    {
        $pageCategory = SitePageCategory::where('page_categories_id', 0)->get();
        $category = SitePageCategory::where('id', $id)->first();
        return view('admin.page_categories.edit', compact('pageCategory', 'category'));
    }

    public function store(Request $request)
    {
      //  echo $request->type; exit;
        $category_data['name'] = sanitizeTextField($request->name);
        $category_data['type'] = sanitizeTextField($request->type);
        $category_data['description'] = $request->description;
        $category_data['page_categories_id'] = empty($request->page_categories_id) ? 0 : $request->page_categories_id;
        $icon = $this->uploads($request->icon, 'icons');
        $category_data['icon'] = !empty($icon) ? $icon['filePath'] : '';
        $category_data['route'] = generateSlug($request->name);
        $category_data['status'] = in_array($request->status, ['publish', 'draft']) ? $request->status : 'publish';
        SitePageCategory::create($category_data);

        return back()->with('success', 'Category has been created successfully!');
    }

    public function update(Request $request, $id)
    {
        $category_data['name'] = sanitizeTextField($request->name);
        $category_data['type'] = sanitizeTextField($request->type);
        $category_data['description'] = $request->description;
        $category_data['page_categories_id'] = empty($request->page_categories_id) ? 0 : $request->page_categories_id;
        if (!empty($request->icon)) {
            $icon = $this->uploads($request->icon, 'icons/');
            $category_data['icon'] = !empty($icon) ? $icon['filePath'] : '';
        }
        $category_data['route'] = generateSlug($request->name);
        $category_data['status'] = in_array($request->status, ['publish', 'draft']) ? 'publish' : 'publish';
        SitePageCategory::where('id', $id)->update($category_data);

        return back()->with('success', 'Category has been updated successfully!');
    }
    
    public function updateCat(Request $request){
         if ($request->has('ids')) {
            $arr = explode(',', $request->input('ids'));

            
                foreach ($arr as $sortOrder => $id) {
                    $sitePageCategory = SitePageCategory::find($id);
                    if (!empty($sitePageCategory)) {
                        $sitePageCategory->sort_id = $sortOrder;
                        $sitePageCategory->page_categories_id=$request->parentId;
                        $sitePageCategory->save();
                    }


            }
        }
    }

    public function catSearch(Request $request){
         $query = SitePageCategory::with('parentCategory')->select('id', 'name', 'page_categories_id', 'description', 'status')->where('type',$request->type);
        if (!empty($request->search)) {
             $query = $query->where('name','LIKE', '%'.$request->search.'%');
        }
          $catelist=$query->get();

        if($request->type=='blog'){
return view('admin.page_categories.search_list_blog',compact('catelist'));
        } else{
            return view('admin.page_categories.search_list',compact('catelist'));
        }

        
    }

     public function destroy($id){

        SitePageCategory::where('id', $id)->delete();
        return back()->with('success','Category has been deleted');
    }
    public function updateParentOrder(Request $request)
    {
        if ($request->has('ids')) {
            $arr = explode(',', $request->input('ids'));

            if ($request->input('category') == 'category') {
                foreach ($arr as $sortOrder => $id) {
                    $sitePageCategory = SitePageCategory::find($id);
                    if (!empty($sitePageCategory)) {
                        $sitePageCategory->sort_id = $sortOrder;
                        $sitePageCategory->save();
                    }

                }
            }

            if ($request->input('category') == 'pages') {
                foreach ($arr as $sortOrder => $id) {
                    $sitePageCategory = SitePage::find($id);
                    if (!empty($sitePageCategory)) {
                        $sitePageCategory->sort_id = $sortOrder;
                        $sitePageCategory->save();
                    }

                }
            }
             if ($request->input('category') == 'blog') {
                foreach ($arr as $sortOrder => $id) {
                    $sitePageCategory = Blog::find($id);
                    if (!empty($sitePageCategory)) {
                        $sitePageCategory->sort_id = $sortOrder;
                        $sitePageCategory->save();
                    }

                }
            }

            return ['success' => true, 'message' => 'Updated'];
        }
    }
}
