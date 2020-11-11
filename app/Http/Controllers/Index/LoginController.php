<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//登录
class LoginController extends Controller
{
    //
    public function login(){
    	$nav = $this->nav();
    	return view("user.login",["nav"=>$nav]);
    } 
    //修改密码
    public function myrepassword(){
    	$nav = $this->nav();
    	return view("user.myrepassword",["nav"=>$nav]);
    }
}
