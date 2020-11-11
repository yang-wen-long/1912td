<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MycouController extends Controller
{
    //我的首页
    public function mycourse(){
    	return view("Index.mycourse.mycourse");
    }
    //我的详情
    public function details(){
    	return view("Index.mycourse.details");
    }
}
