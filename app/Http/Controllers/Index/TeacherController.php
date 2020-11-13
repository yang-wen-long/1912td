<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeacherModel;
use App\Models\Category;
use App\Models\Course;

//教师
class TeacherController extends Controller
{
    //教师
    public function teacherlist(){
        // 导航栏
        $nav = $this->nav();
        //讲师
        $teacher = TeacherModel::join('course_category',"teacher.cate_id","=","course_category.cate_id")
        ->take(4)
        ->get();
        // dd($teacher);
    	return view("Index.Teacher.teacherlist",["nav"=>$nav,'teacher'=>$teacher]);
    }

    //讲师详情
    public function teacher($tea_id){
        // 导航栏
         $nav = $this->nav();
        //  讲师的详情
        //讲师
        $teacher = TeacherModel::join('course_category',"teacher.cate_id","=","course_category.cate_id")->where('tea_id',$tea_id)->first();
        // dd($teacher);
        // 课程
        $course = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
        ->take(2)
        ->get();
        // dd($course);
    	return view("Index.Teacher.teacher",["nav"=>$nav,'teacher'=>$teacher,'course'=>$course]);
    }
}
