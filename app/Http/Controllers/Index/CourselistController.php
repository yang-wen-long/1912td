<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use App\Models\Category;
use App\Models\Course;

//课程
class CourselistController extends Controller{
    //详情
    public function courselist(){
        // 无限极分类
        $data = CateGory::where('parents_id',0)->orderBy('cate_id','asc')->get('cate_id');
        // dd($data);
        $cate_id= $data[0]->cate_id;
        // dd($cate_id);
        $array=CateGory::get();
        $data = $this->CreateTree($array,$cate_id);
        // dd($data);
        // 课程
        // $where=[
        //     'is_sj' => 2,
        //     'is_tj' => 1,
        // ];
        $course = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
        // ->where($where)
        ->take(9)
        ->orderBy('cou_id','desc')
        ->get();
        // dd($course);

        // 导航栏
        $nav = $this->nav();
    	return view("Index.Courselist.Courselist",["nav"=>$nav,'data'=>$data,'course'=>$course]);
    }

    //课程目录
    public function coursecont(){
        // 导航栏
        $nav = $this->nav();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("3")->get();
    	return view("Index.Courselist.Coursecont",["name"=>$name,"nav"=>$nav]);
    }

    //课程详情页
    public function coursecont1(){
        // 导航栏
        $nav = $this->nav();
    	return view("Index.Courselist.coursecont1",["nav"=>$nav]);
    }
}
