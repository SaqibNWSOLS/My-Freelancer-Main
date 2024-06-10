<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BillBoard;
use App\Models\JobCategory;
use Auth;
use Str;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use Session;
use Inertia\Inertia;

class BillBoardController extends Controller
{
    

    public function store(Request $request){

        $billBoard=BillBoard::where('id',session('billBoardId'))->first();
        if(empty($billBoard)){
            $billBoard= new BillBoard(); 
        }
       if($request->has('finish')){
        Session::put(['billBoardId'=>null]);
        return redirect('profile')->with('response', $billBoard);
       }

        $input = $request->all();
$input['users_id']=Auth::id();
    // Update the user's address
    $billBoard->fill($input)->save();
   
    Session::put(['billBoardId'=>$billBoard->id]);



    return back()->with('response', $billBoard);

    }

     public function edit(BillBoard $billBoard)
    {
        Session::put(['billBoardId'=>$billBoard->id]);
        return Inertia::render('BillBoard/Edit', ['billBoard' => $billBoard]);
    }

    public function categoryList(){
        $categories=JobCategory::get();

        return json_encode($categories);
    }

    public function billBoardAttchs(Request $request){
         if ($request->hasFile('img1')) {
            $file = $request->file('img1');
        }
        if ($request->hasFile('img2')) {
            $file = $request->file('img2');
        }
        if ($request->hasFile('img3')) {
            $file = $request->file('img3');
        }

         if ($request->hasFile('video')) {
            $file = $request->file('video');
        }
         if ($request->hasFile('doc1')) {
            $file = $request->file('doc1');
        }
         if ($request->hasFile('doc2')) {
            $file = $request->file('doc2');
        }
        if(!empty($file)){
            $originalName = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            // Generate a custom name (e.g., using UUID or any custom logic)
            $customName = Str::uuid() . '.' . $extension;

            // Store the file using the custom name
            $path = $file->move(public_path('uploads'), $customName);
$path = 'uploads/' . $customName;
}
              $billBoard=BillBoard::where('id',session('billBoardId'))->first();
    if(empty($billBoard)){
    $billBoard= new billBoard();
}

if ($request->hasFile('img1')) {
     $billBoard->img1=$path;
      $billBoard->save();
      }  
      if ($request->hasFile('img2')) {
     $billBoard->img2=$path;
      $billBoard->save();
      } 
      if ($request->hasFile('img3')) {
     $billBoard->img3=$path;
      $billBoard->save();
      }  
      if ($request->hasFile('video')) {
     $billBoard->video=$path;
      $billBoard->save();
      }  
      if ($request->hasFile('doc1')) {
     $billBoard->doc1=$path;
      $billBoard->save();
      }  
      if ($request->hasFile('doc2')) {
     $billBoard->doc2=$path;
      $billBoard->save();
      }     
    }
}
