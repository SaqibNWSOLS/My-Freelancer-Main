<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MediaController extends Controller
{
     public function uploadFile(Request $request){
        if ($request->hasFile('upload')) {
        $originName = $request->file('upload')->getClientOriginalName();
        $fileName = pathinfo($originName, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $path = storage_path('app/public/tmp/uploads');
        $fileName = $request->file('upload')->move($path, $fileName)->getFilename();

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('storage/tmp/uploads/' . $fileName);
     return response()->json([
            'uploaded' => true,
            'url' =>  $url 
        ]);
    }
    return false;
        
    } 
}
