<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//课程
class CourselistController extends Controller{
    //详情
    public function courselist(){
        
    	return view("Index.Courselist.Courselist");
    }
    //课程目录
    public function coursecont(){
    	return view("Index.Courselist.Coursecont");
    }
    //课程详情页
    public function coursecont1(){
    	return view("Index.Courselist.coursecont1");
    }
}
