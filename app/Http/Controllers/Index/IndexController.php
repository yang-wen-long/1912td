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
    	$nav = $this->nav();
        $silde = SlideModel::get();
        $a=$silde[0];
        $b=$silde[1];
        $c=$silde[2];
        $course_category = DB::table("course_category")->limit('4')->get();
        $data = DB::table("course")->where("cate_id",$course_category[0]->cate_id)->get();
        // dd($course_category);
    	return view("Index.index.index",['a'=>$a,'b'=>$b,'c'=>$c,"nav"=>$nav,"course_category"=>$course_category,"data"=>$data]);
    }
    //处理业务



}
