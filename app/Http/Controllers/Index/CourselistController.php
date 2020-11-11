<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
//课程
class CourselistController extends Controller
{
    //详情
    public function courselist(){
    	return view("Index.Courselist.Courselist");
    }
    //课程目录
    public function coursecont(){
        $name = DB::table("course_notice")->where("is_del","1")->limit("2")->get();
    	return view("Index.Courselist.Coursecont",["name"=>$name]);
    }
    //课程详情页
    public function coursecont1(){
    	return view("Index.Courselist.coursecont1");
    }
}
