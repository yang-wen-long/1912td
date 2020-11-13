<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use App\Models\Course;
use App\Models\Log;
use App\Models\Teacher;
//课程
class CourseController extends Controller
{
    //详情
    public function course(){
        $nav = $this->nav();
    	return view("course.list",["nav"=>$nav]);
    }
    //课程目录
    public function detail($cou_id){
        $nav = $this->nav();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("2")->get();
        $cou_data=Course::leftJoin('shop_admin','course.admin_id','=','shop_admin.admin_id')->where('cou_id',$cou_id)->first();
        // dd($cou_data);
        $a=$cou_data['admin_id'];
        $teacher=Teacher::where('admin_id',$a)->first();
         // var_dump($teacher);die;
        // $c=$b['tea_name'];
         // var_dump($c);die;
        $log_data=Log::where('cou_id',$cou_id)->paginate(5);
    	return view("course.detail",["name"=>$name,'teacher'=>$teacher,"nav"=>$nav,'cou_data'=>$cou_data,'log_data'=>$log_data]);
    }
   
}
