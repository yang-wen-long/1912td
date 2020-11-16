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
        //轮播图
        $silde = SlideModel::get();
        // dd($silde);
        $a=$silde[0];
        // print_r($a);exit;
        $b=$silde[1];
        $c=$silde[2];
        $course_category = DB::table("course_category")->limit('4')->get();
        $data = DB::table("course")->where("cate_id",$course_category[0]->cate_id)->limit("4")->get();
        // dd($course_category);
    	return view("Index.index.index",['a'=>$a,'b'=>$b,'c'=>$c,"nav"=>$nav,"course_category"=>$course_category,"data"=>$data]);
    }
    //处理分类
    public function points(){
    	$cate_id = request()->post("cate_id");
        $fgid="/^[0-9]*$/";
        if(!preg_match($fgid,$cate_id)){

            return json_encode(["error"=>1,"msg"=>"请不要糊弄我！"]);
        }
        $id = request()->post("id");
        if($id == 1){
            $data = DB::table("course")->orderBY("cate_id","desc")->where("cate_id",$cate_id)->get();
        }else{
            $data = DB::table("course")->where("cate_id",$cate_id)->limit("4")->get();
        }
    	if($data){
	    	$name = [
	    		"error"=>0,
	    		"msg"=>"成功",
	    		"data"=>$data,
	    	];
	    	return json_encode($name);
	    }else{
	    	return json_encode(["error"=>1,"msg"=>"业务繁忙中，请稍后再试！"]);
	    }
    }



}
