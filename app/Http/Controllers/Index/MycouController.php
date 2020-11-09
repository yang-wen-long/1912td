<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//我的详情
class MycouController extends Controller
{
    //
    public function mycourse(){
    	return view("Index.mycourse.mycourse");
    }
}
