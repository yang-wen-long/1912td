<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SlideModel;
use \DB;
//前台首页
class IndexController extends Controller
{
    //前台首页
    public function index(){
        // 导航栏
        $nav = $this->nav();
        // 轮播图
        $silde = SlideModel::get();
        // dd($silde);
        $a=$silde[0];
        // print_r($a);exit;
        $b=$silde[1];
        $c=$silde[2];
    	return view("Index.index.index",['a'=>$a,'b'=>$b,'c'=>$c,"nav"=>$nav]);
    }
}
