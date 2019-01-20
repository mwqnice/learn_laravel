<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * @desc 管理员列表
     */
    public function index(){
        return view('admin.user.index');
    }
    /**
     * @desc 添加管理员
     */
    public function addUser(){
        return view('admin.user.addUser');
    }
}
