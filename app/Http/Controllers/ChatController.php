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
      $conversation=[];
      if (!empty($request->id)) {
        $conversation=Conversation::where('sender_id', $request->id)
                                     ->orWhere('receiver_id', $request->id)->delete();
         $conversation=Conversation::where('sender_id', $request->id)
                                     ->orWhere('receiver_id', $request->id)->first();
         if (empty($conversation)) {
          
         $conversation=new Conversation();
         $conversation->sender_id=Auth::id();
         $conversation->receiver_id=$request->id;
         $conversation->save();

         }
      }

      echo json_encode($conversation); exit;
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
