<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
        //查询角色列表
        $data['roleList'] =DB::table('pro_role')->where('status', 1)->get();

        return view('admin.user.addUser',['data'=>$data]);
    }
}
