<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //用户登录页面
    public function create()
    {
        return view('sessions.create');
    }
}
