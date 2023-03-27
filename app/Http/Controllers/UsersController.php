<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    public function index(Users $user)
    {
        return view('users/index');
    }
    public function migrateToPost(Users $user)
    {
        return view('users/post');
    }
    public function post(Request $request, Users $user)
    {
        $input = $request['user'];
        $user->fill($input)->save();
        return view('users/index');
    }
    public function get(Users $user)
    {
        return view('users/get')->with(['users'=>$user->get()]);
    }
    public function migrateToPut(Users $user)
    {
        return view('users/put')->with(['users' => $user->get()]);
    }
    public function put(Request $request, Users $user)
    {
        $input_users = $request['user'];
        $user->fill($input_users)->save();
        return view('users/index');
    }
    public function migrateToDelete(Users $user)
    {
        return view('users/delete')->with(['users' => $user->get()]);
    }
    public function delete(Request $request, Users $user)
    {
        $user->delete();
        return redirect('/');
    }
}
