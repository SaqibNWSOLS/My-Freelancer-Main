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
use App\Http\Controllers\UserVerficationController;
use App\Http\Controllers\BillBoardController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobCategoryController;
use App\Http\Controllers\FreelancerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Admin\VerificationController;
use App\Http\Controllers\Admin\GeneralSettingController;





Route::get('state-list/{id}',[StateController::class,'stateListByCountry'])->name('state-list');
Route::resource('countries', CountryController::class);
Route::resource('states', StateController::class);
Route::resource('cities', CitiesController::class);
Route::resource('verifications', VerificationController::class);

Route::post('aprrove-verfic',[VerificationController::class,'approveVerific'])->name('aprrove-verfic');
Route::post('reject-verfic',[VerificationController::class,'rejectVerific'])->name('reject-verfic');

Route::resource('jobCategory', JobCategoryController::class);
Route::resource('general-setting', GeneralSettingController::class);
