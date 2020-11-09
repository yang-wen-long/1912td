<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//教师
class TeacherController extends Controller
{
    //教师
    public function teacherlist(){
    	return view("Index.Teacher.teacherlist");
    }
    //讲师详情
    public function teacher(){
    	return view("Index.Teacher.teacher");
    }
}
