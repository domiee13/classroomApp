<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    //
    function getAll(){
        $messages = Message::all();
        echo $messages;
        // return view('mess', ['$messages' => $messages]);//Failure
        return view('mess', ['messages' => $messages]);
    }
}
