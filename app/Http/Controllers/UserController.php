<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Message;
class UserController extends Controller
{
    
    public function getAll(){
        $users = DB::table('users')->get();
        return view('test', ["users" => $users]);
    }
    public function index(){
        $users = User::all();
        return view('users.index',['users' => $users]);
    }
    public function detailById($id){
        $user = User::find($id);
        // echo gettype($user);     
        $messages = Message::where('id_recv','=',$id)->get();
        // echo $messages;
        return view('users.detail',['user' => $user, 'messages' => $messages]);
    }
    public function editUser($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function getSentMsg($id_recv){
    }
}
