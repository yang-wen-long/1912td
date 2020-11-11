<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//教师
class TeacherController extends Controller
{
    //教师
    public function teacherlist(){
    	 $nav = $this->nav();
    	return view("Index.Teacher.teacherlist",["nav"=>$nav]);
    }
    //讲师详情
    public function teacher(){
    	 $nav = $this->nav();
    	return view("Index.Teacher.teacher",["nav"=>$nav]);
    }
}
