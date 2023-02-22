<?php

namespace App\Http\Controllers\Admin;

use App\Message;
use App\Apartment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Message::paginate();
        $apartments = Apartment::all();
        return view('admin.messages.index', [
            'messages' => $messages,
            'apartments' => $apartments
        ]);

    }


    public function create()
    {
        return view('admin.messages.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $message = new Message;
        $message->message            =    $data['message'];
        $message->date             =    $data['date'];
        $message->save();

        return redirect()->route('admin.messages.show', ['message' => $message]);
    }


    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }


    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('admin.messages.index')->with('success_delete', $message);
    }
}
