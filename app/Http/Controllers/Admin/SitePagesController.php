<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SitePage;
use App\Models\SitePageCategory;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class SitePagesController extends Controller
{

    public $name, $title, $description, $edit_id, $slug;
    public $search = '';
    public $sortby = 'desc';
    public $per_page = '';
    public $status = 'draft';
    public $per_page_opt = [];

    public function index(Request $request)
    {

        $pages = SitePage::with('categoryDetail')->select('id', 'name', 'title', 'route', 'status','page_categories_id');
        if (!empty($request->search)) {
            $pages = $pages->where('name','LIKE', '%'.$request->search.'%');
        }
        if (!empty($request->cat_id)) {
            $childCat=SitePageCategory::where('page_categories_id',$request->cat_id)->pluck('id')->toArray();
      
        $subChildCat=SitePageCategory::whereIn('page_categories_id',$childCat)->pluck('id')->toArray();

        $mainCat=[(int)$request->cat_id];
    //    echo json_encode(array_merge($mainCat,$childCat,$subChildCat)); exit;
            $pages = $pages->whereIn('page_categories_id',array_merge($mainCat,$childCat,$subChildCat));
        }
        $pages = $pages->orderBy('id', 'asc')->get();
        $mainCategories = SitePageCategory::with('child_categories')->where('page_categories_id', 0)->where('type','support_page')->orderBy('sort_id')->get();
        $search=$request->search;
          return Inertia::render('SitagePages/Index',['pages'=>$pages,'mainCategories'=>$mainCategories,'search',$search]);
    }

    public function loadPageData(Request $request){

        $childCat=SitePageCategory::where('page_categories_id',$request->catId)->pluck('id')->toArray();
      
        $subChildCat=SitePageCategory::whereIn('page_categories_id',$childCat)->pluck('id')->toArray();

        $mainCat=[(int)$request->catId];
        //echo json_encode($childCat); exit;
        $pages = SitePage::with('categoryDetail')->select('id', 'name', 'title', 'description', 'route', 'status','page_categories_id')->whereIn('page_categories_id',array_merge($mainCat,$childCat,$subChildCat));
        if (!empty($request->search)) {
            $pages = $pages->where('name','LIKE', '%'.$request->search.'%');
        }
        $pages = $pages->orderBy('id', 'asc')->paginate(10);
$pages->setPath('/admin/site-pages');

        $per_page_opt = perPageOpt();
        $per_page_record = setting('_general.per_page_record');
        $this->per_page = !empty($per_page_record) ? $per_page_record : 10;

        return view('admin.sitepages.page_data', compact('pages', 'per_page_opt'))->extends('layouts.admin.app');
    }

    public function create()
    {
        $pageCategory = SitePageCategory::where('page_categories_id', '!=', 0)->where('type', 'support_page')->get();
          return Inertia::render('SitagePages/Create',['pageCategory'=>$pageCategory]);
    }

    public function store(Request $request)
    {

        $page_data['name'] = sanitizeTextField($request->name);
        $page_data['title'] = sanitizeTextField($request->title);
        $page_data['seo_keyword'] = sanitizeTextField($request->seo_keyword);
        $page_data['seo_description'] = sanitizeTextField($request->seo_description);
        $page_data['description'] = $request->description;
        $page_data['page_categories_id'] = $request->page_categories_id;
        $page_data['route'] = generateSlug($request->name);
        $page_data['status'] = in_array($request->status, ['publish', 'draft']) ? $request->status : 'publish';

        SitePage::create($page_data);

        return redirect('admin/site-pages')->with('success', 'Page has been created successfully!');
    }

    public function update(Request $request, $id)
    {

        $page_data['name'] = sanitizeTextField($request->name);
        $page_data['title'] = sanitizeTextField($request->title);

        $page_data['seo_keyword'] = sanitizeTextField($request->seo_keyword);
        $page_data['seo_description'] = sanitizeTextField($request->seo_description);
        $page_data['description'] = $request->description;
        $page_data['page_categories_id'] = $request->page_categories_id;
        $page_data['route'] = generateSlug($request->name);
        $page_data['status'] = 'publish';

        SitePage::where('id', $id)->update($page_data);

        return redirect('admin/site-pages')->with('success', 'Page has been update successfully!');
    }

    public function edit($id)
    {
        $page = SitePage::with('pageComments')->where('id', $id)->first();
        $pageCategory = SitePageCategory::where('page_categories_id', '!=', 0)->where('type', 'support_page')->get();
        return view('admin.sitepages.edit', compact('page', 'pageCategory'));
    }

    public function pageStatus(Request $request){
          
     $page = SitePage::where('id', $request->id)->first();
     $page->status=$request->status;
     $page->save();
      
      return true;

    }

    public function destroy($id){

        SitePage::where('id', $id)->delete();
        return back()->with('success','Page has been deleted');
    }
}
