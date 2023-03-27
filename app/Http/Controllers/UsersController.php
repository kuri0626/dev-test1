<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    //ホームページ
    public function index(Users $user)
    {
        return view('users/index');
    }
    
    //ユーザーの新規投稿画面への遷移
    public function migrateToPost(Users $user)
    {
        return view('users/post');
    }
    
    //ユーザーの新規投稿機能
    public function post(Request $request, Users $user)
    {
        $input = $request['user'];
        $user->fill($input)->save();
        return view('users/index');
    }
    
    //ユーザーの取得機能
    public function get(Users $user)
    {
        return view('users/get')->with(['users'=>$user->get()]);
    }
    
    //ユーザーの更新画面への遷移
    public function migrateToPut(Users $user)
    {
        return view('users/put')->with(['users' => $user->get()]);
    }
    
    //ユーザーの更新機能
    public function put(Request $request, Users $user)
    {
        //おそらく$request['user']に最新のユーザー情報が入っており
        $input_users = $request['user'];
        //それをfill()->save()で更新があったユーザーに上書き保存してしまっている
        $user->fill($input_users)->save();
        return view('users/index');
    }
    
    //ユーザーの削除画面への遷移
    public function migrateToDelete(Users $user)
    {
        return view('users/delete')->with(['users' => $user->get()]);
    }
    
    //ユーザーの削除機能（論理削除）
    public function delete(Request $request, Users $user)
    {
        $user->delete();
        return redirect('/');
    }
}
