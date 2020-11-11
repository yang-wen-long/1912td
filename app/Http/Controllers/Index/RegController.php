<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//注册
class RegController extends Controller
{
    //注册
    public function reg(){
    	return view("Index.Reg.reg");
    }
}
