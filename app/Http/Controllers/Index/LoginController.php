<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//登录
class LoginController extends Controller
{
    //
    public function login(){
    	return view("user.login");
    } 
    //修改密码
    public function myrepassword(){
    	return view("user.myrepassword");
    }
}
