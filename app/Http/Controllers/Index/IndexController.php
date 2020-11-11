<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideModel;

//前台首页
class IndexController extends Controller
{
    //前台首页
    public function index(){
        $silde = SlideModel::get();
        $a=$silde[0];
        $b=$silde[1];
        $c=$silde[2];

    	return view("Index.index.index",['a'=>$a,'b'=>$b,'c'=>$c]);
    }
}
