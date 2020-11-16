<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class MycouController extends Controller
{
    //我的首页
    public function mycourse(){
        // 导航栏
        $nav = $this->nav();
        // 个人中心我的课程
        $where = [
            "is_xx" =>1
        ];
        $course = Course::where($where)->take(1)->get();
        // dd($course);
    	return view("Index.mycourse.mycourse",["nav"=>$nav,'course'=>$course]);
    }
    //我的详情
    public function details(){
    	$nav = $this->nav();
    	return view("Index.mycourse.details",["nav"=>$nav]);
    }
}
