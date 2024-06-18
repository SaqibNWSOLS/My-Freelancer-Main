<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\VerficationController;
use App\Http\Controllers\BillBoardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\EmployeeController;


use App\Http\Controllers\ProxyController;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('/');
Route::get('/categories', [FreelancerController::class, 'Categories'])->name('categories');

Route::get('/front-view', [FreelancerController::class, 'FrontView'])->name('front-view');
Route::get('/freelancers', [FreelancerController::class, 'index'])->name('freelancers.index');
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

Route::get('/verifications', [VerficationController::class, 'index'])->name('verifications.index');

Route::get('admin-login',[AuthenticatedSessionController::class,'adminLogin'])->name('admin-dashboard');

Route::get('admin-dashboard',[DashboardController::class,'index'])->name('admin-dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::post('/profile-images', [ProfileController::class, 'profileImages'])->name('profile-images');

    Route::post('updatePassword', [ProfileController::class, 'updatePassword'])->name('updatePassword');
    Route::resource('job',JobController::class);

    Route::get('/category-list', [BillBoardController::class, 'categoryList'])->name('category-list');
    Route::post('/update-profile-pic', [ProfileController::class, 'profilePicUpload'])->name('update-profile-pic');
    Route::post('/update-address', [ProfileController::class, 'updateAddress'])->name('update-address');
     Route::post('/verfication', [VerficationController::class, 'store'])->name('verfication');
      Route::post('/current-photo', [VerficationController::class, 'currentPhoto'])->name('current-photo');
  Route::post('/govt-id', [VerficationController::class, 'govId'])->name('govt-id');
   Route::resource('/bill-board', BillBoardController::class);

   Route::post('billboard-attach',[BillBoardController::class,'billBoardAttchs'])->name('billboard-attach');
   
});

Route::get('/proxy', [ProxyController::class, 'proxy']);

Route::get('state-list/{id}',[StateController::class,'stateListByCountry'])->name('state-list');
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CitiesController::class);

Route::resource('jobCategory', JobCategoryController::class);



require __DIR__.'/auth.php';
