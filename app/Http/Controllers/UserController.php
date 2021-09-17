<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    // public function getAll(){
    //     $users = DB::table('users')->get();
    //     return view('test', ["users" => $users]);
    // }
    public function index(){
        $users = User::all();
        return view('users.index',['users' => $users]);
    }
}
