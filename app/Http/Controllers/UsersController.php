<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index(Users $users)
    {
        return view('users/index');
    }
    public function migrateToPost(Users $users)
    {
        return view('users/post');
    }
    public function post(Request $request, Users $users)
    {
        $input = $request['user'];
        $users->fill($input)->save();
        return view('users/index');
    }
    public function get(Users $users)
    {
        return view('users/get')->with(['users'=>$users->get()]);
    }
    public function migrateToPut(Users $users)
    {
        return view('users/put')->with(['users' => $users->get()]);
    }
    public function put(Request $request, Users $users)
    {
        $input_users = $request['user'];
        $users->fill($input_users)->save();
        return view('users/index');
    }
    public function migrateToDelete(Users $users)
    {
        return view('users/delete');
    }
}
