<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD

=======
use \DB;
>>>>>>> 986333ce1b91661f05d28aa41d5962f17946de2b
//课程
class CourselistController extends Controller{
    //详情
    public function courselist(){
<<<<<<< HEAD
        
    	return view("Index.Courselist.Courselist");
=======
        $nav = $this->nav();
    	return view("Index.Courselist.Courselist",["nav"=>$nav]);
>>>>>>> 986333ce1b91661f05d28aa41d5962f17946de2b
    }
    //课程目录
    public function coursecont(){
        $nav = $this->nav();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("2")->get();
    	return view("Index.Courselist.Coursecont",["name"=>$name,"nav"=>$nav]);
    }
    //课程详情页
    public function coursecont1(){
        $nav = $this->nav();
    	return view("Index.Courselist.coursecont1",["nav"=>$nav]);
    }
}
