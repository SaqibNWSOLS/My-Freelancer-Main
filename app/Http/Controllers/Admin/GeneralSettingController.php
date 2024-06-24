<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Str;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class GeneralSettingController extends Controller
{
    
    public function index(){
     
       return Inertia::render('Admin/Setting/General');
    }
}
