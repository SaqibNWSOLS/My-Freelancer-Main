<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\SitePageCategory;
use App\Helpers\Media;
use App\Models\User;

class BlogController extends Controller
{

    use Media;

     public function index(Request $request)
    {

        $pages = Blog::with('categoryDetail')->select('id', 'name', 'title', 'description', 'route', 'status','page_categories_id');
        if (!empty($request->search)) {
             $pages = $pages->where('name','LIKE', '%'.$request->search.'%');
        }
        $pages = $pages->orderBy('id', 'asc')->paginate(10);

        $per_page_opt = perPageOpt();
        $per_page_record = setting('_general.per_page_record');
        $this->per_page = !empty($per_page_record) ? $per_page_record : 10;

         $mainCategories = SitePageCategory::with('childCategories')->where('page_categories_id', 0)->where('type','blog')->orderBy('sort_id')->get();
        $search=$request->search;

        return view('admin.blog.index', compact('pages', 'per_page_opt','mainCategories','search'))->extends('layouts.admin.app');
    }

    public function loadBlogData(Request $request){
        $childCat=SitePageCategory::where('page_categories_id',$request->catId)->pluck('id')->toArray();
      
        $subChildCat=SitePageCategory::whereIn('page_categories_id',$childCat)->pluck('id')->toArray();

        $mainCat=[(int)$request->catId];
        //echo json_encode($childCat); exit;
        $pages = Blog::with('categoryDetail')->select('id', 'name', 'title', 'description', 'route', 'status','page_categories_id')->whereIn('page_categories_id',array_merge($mainCat,$childCat,$subChildCat));
        if (!empty($request->search)) {
            $pages = $pages->where('name','LIKE', '%'.$request->search.'%');
        }
        $pages = $pages->orderBy('id', 'asc')->paginate(10);
$pages->setPath('/admin/blogs');

        $per_page_opt = perPageOpt();
        $per_page_record = setting('_general.per_page_record');
        $this->per_page = !empty($per_page_record) ? $per_page_record : 10;

        return view('admin.blog.page_data', compact('pages', 'per_page_opt'))->extends('layouts.admin.app');
    }

     public function create()
    {
        $pageCategory = SitePageCategory::where('type', 'blog')->get();
        return view('admin.blog.create', compact('pageCategory'));
    }

      public function store(Request $request)
    {

        $page_data['name'] = sanitizeTextField($request->name);
        $banner = $this->uploads($request->banner_img, 'blog_banner/');
        $page_data['banner_img'] = !empty($banner) ? $banner['filePath'] : '';
        $page_data['title'] = sanitizeTextField($request->title);
        $page_data['seo_keyword'] = sanitizeTextField($request->seo_keyword);
        $page_data['seo_description'] = sanitizeTextField($request->seo_description);
        $page_data['description'] = $request->description;
        $page_data['page_categories_id'] =(int)$request->page_categories_id;
        $page_data['route'] = generateSlug($request->name);
        $page_data['status'] = in_array($request->status, ['publish', 'draft']) ? $request->status : 'publish';

        Blog::create($page_data);

        return redirect('admin/blogs')->with('success', 'Blog has been created successfully!');
    }

    public function update(Request $request, $id)
    {

        $page_data['name'] = sanitizeTextField($request->name);
        $page_data['title'] = sanitizeTextField($request->title);

          if (!empty($request->banner_img)) {
            $banner = $this->uploads($request->banner_img, 'blog_banner/');
            $page_data['banner_img'] = !empty($banner) ? $banner['filePath'] : '';
        }

        $page_data['seo_keyword'] = sanitizeTextField($request->seo_keyword);
        $page_data['seo_description'] = sanitizeTextField($request->seo_description);
        $page_data['description'] = $request->description;
        $page_data['page_categories_id'] = $request->page_categories_id;
        $page_data['route'] = generateSlug($request->name);
        $page_data['status'] = 'publish';

        Blog::where('id', $id)->update($page_data);

        return redirect('admin/blogs')->with('success', 'Blog has been updated successfully!');
    }

     public function edit($id)
    {
        $page = Blog::with('blogComments')->where('id', $id)->first();
        $pageCategory = SitePageCategory::where('type', 'blog')->get();
        return view('admin.blog.edit', compact('page', 'pageCategory'));
    }

     public function destroy($id){

        Blog::where('id', $id)->delete();
        return back()->with('success','Blog has been deleted');
    }


       public function blogStatus(Request $request){
          
     $page = Blog::where('id', $request->id)->first();
     $page->status=$request->status;
     $page->save();
      
      return true;

    }

    public function deleteUser($id){
 User::where('id', $id)->delete();
        return back()->with('success','User has been deleted');
    }
}
