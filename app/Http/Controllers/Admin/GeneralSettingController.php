<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Str;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Models\Setting;

class GeneralSettingController extends Controller
{
    
    public function index(){

      $settings=Setting::get();
     
       return Inertia::render('Admin/Setting/General',['settings'=>$settings]);
    }

    public function store(Request $request){

      $data=$request->all();

      foreach ($data as $key => $row) {

        $item=Setting::where('feature',$row['feature'])->first();
        if (empty($item)) {
           $item= new Setting();
           $item->feature=$row['feature'];
        }
         $item->value=$row['value'];
         $item->save();
      }

      return back();

    }
}
