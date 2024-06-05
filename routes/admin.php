<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Admin related routes





Route::prefix('admin')->middleware(['auth'])->group(function () {
     Route::get('users', [ App\Http\Controllers\Admin\Users\UsersController::class,'index']);
	  Route::resources([
          'site-pages'=>App\Http\Controllers\Admin\SitePagesController::class,
          'pages-category'=>App\Http\Controllers\Admin\SitePageCategoryController::class,
          'blogs'=> App\Http\Controllers\Admin\Blog\BlogController::class,
           'comments'=> App\Http\Controllers\Admin\CommentController::class
     ]);
    Route::any('profile', [App\Http\Controllers\Admin\ProfileControlller::class,'profile'])->name('profile');
    Route::post('page-status',[App\Http\Controllers\Admin\SitePagesController::class,'pageStatus']);
     Route::post('blog-status',[App\Http\Controllers\Admin\Blog\BlogController::class,'blogStatus']);
    Route::post('update-parent-order',[App\Http\Controllers\Admin\SitePageCategoryController::class,'updateParentOrder']);
    Route::post('update-cat',[App\Http\Controllers\Admin\SitePageCategoryController::class,'updateCat']);
    Route::post('cat-search',[App\Http\Controllers\Admin\SitePageCategoryController::class,'catSearch']);
    Route::post('load-page-date',[App\Http\Controllers\Admin\SitePagesController::class,'loadPageData']);
    Route::post('load-blog-date',[App\Http\Controllers\Admin\Blog\BlogController::class,'loadBlogData']);
    Route::get('createCatModel',[App\Http\Controllers\Admin\SitePageCategoryController::class,'createCatModel']);
    Route::get('editCatModel',[App\Http\Controllers\Admin\SitePageCategoryController::class,'editCatModel']);

     Route::delete('users/{id}',[App\Http\Controllers\Admin\Blog\BlogController::class,'deleteUser']);
});
