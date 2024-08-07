<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Message;
use App\Models\Conversation;
use Auth;

class ChatController extends Controller
{
    public function index(Request $request)
    {

     if (empty(Auth::user())) {
         
         return redirect('login')->with('flash',['success'=>true,'type'=>'warning','title'=>'Ligin to chat','message'=> 'Kindly login to your account to chat this user.!']);
     }
      $conversation=[];
      if (!empty($request->id)) {
      
         $conversation=Conversation::where('sender_id', $request->id)
                                     ->orWhere('receiver_id', $request->id)->first();
         if (empty($conversation) && !empty(Auth::user())) {
          
         $conversation=new Conversation();
         $conversation->sender_id=Auth::id();
         $conversation->receiver_id=$request->id;
         $conversation->save();

         }
      }

        return Inertia::render('Chat/Index',['conversationProp'=>$conversation]);
    }

    public function send(Request $request)
    {
        $message = new Message();
        $message->user_id = auth()->id();
        $message->content = $request->input('message');
        $message->save();

        return response()->json(['status' => 'Message sent!']);
    }

    public function messages()
    {
        $messages = Message::with('user')->latest()->get();
        return response()->json($messages);
    }
}
