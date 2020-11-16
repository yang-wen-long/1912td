<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use App\Models\Category;
use App\Models\Course;

//课程
class CourseController extends Controller{
    //详情
    public function list(){
        // 无限极分类
        $topcss = CateGory::where('parents_id',0)->get();
        $css=CateGory::get();
        $course = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
        ->take('9')
        ->orderBy('lll','desc')
        ->get();
        // 导航栏
        $nav = $this->nav();
    	return view("course.list",["nav"=>$nav,'topcss'=>$topcss,"css"=>$css,'course'=>$course]);
    }

    //课程目录
    public function coursecont(){
        // 导航栏
        $nav = $this->nav();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("3")->get();
    	return view("course.log",["name"=>$name,"nav"=>$nav]);
    }

    //课程详情页
    public function coursecont1(){
        // 导航栏
        $nav = $this->nav();
    	return view("course.detail",["nav"=>$nav]);
    }

    //处理课程首页分类业务
    public function Asubclass(){
        if(request()->isMethod("get")){
            $name = Request()->get("keyword");
            $data = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
                          ->where("cou_name","like","%$name%")
                          ->take('9')
                          ->orderBy('lll','desc')
                          ->get();
            if($data=='[]'){
                return json_encode(["error"=>1,"msg"=>"正在赶往这的路上！"]);
            }
            if($data){
                return json_encode(["error"=>0,"msg"=>"查询","data"=>$data]);
            }else{
                 return json_encode(["error"=>1,"msg"=>"查询失败"]);
            }
        }
        if(request()->isMethod("post")){
            $cate_id = request()->post("cate_id");
            $fgid="/^[0-9]*$/";
            if(!preg_match($fgid,$cate_id)){
                return json_encode(["error"=>1,"msg"=>"请不要测试我的耐性！"]);
            }
            $data = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
                          ->take('9')
                          ->orderBy('lll','desc')
                          ->where("cate_id",$cate_id)
                          ->get();
            if($data=='[]'){
                return json_encode(["error"=>1,"msg"=>"正在赶往这的路上！"]);
            }
            if($data){
                return json_encode(["error"=>0,"msg"=>"成功","data"=>$data]);
            }else{
                 return json_encode(["error"=>1,"msg"=>"分类失败"]);
            }
        }
    }



}
