<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /*
     * 创建
     */
    public function create()
    {
        return view('users.create');
    }

    /*
     * 个人信息
     * */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    /*
     * 创建验证
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|unique:users|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);
    }
}
