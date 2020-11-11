<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//我的首页
class MycouController extends Controller
{
    //
    public function mycourse(){
    	return view("Index.mycourse.mycourse");
    }
    //我的详情
    public function details(){
    	return view("Index.mycourse.details");
    }
}
