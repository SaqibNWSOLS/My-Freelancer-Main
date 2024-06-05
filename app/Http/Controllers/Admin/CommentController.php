<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use Auth;
class CommentController extends Controller
{
    public function store(Request $request){
      
      $comment= new Comment;
      $comment->users_id=Auth::id();
      $comment->message=$request->message;
      $comment->ref_id=$request->ref_id;
      $comment->type=$request->type;
      $comment->save();

      $pageComments=Comment::with('userDetail')->where('ref_id',$comment->ref_id)->where('type',$comment->type)->orderBy('id','DESC')->get();

      return view('admin.sitepages.comment',compact('pageComments'));
    }
}
