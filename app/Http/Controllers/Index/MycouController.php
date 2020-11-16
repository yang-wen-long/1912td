<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Course;
class MycouController extends Controller
{
    //我的课程
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
    //修改信息
    public function details(){
    	$nav = $this->nav();
    	return view("Index.mycourse.details",["nav"=>$nav]);
    }
    //我的问答
    public function question(){
        $nav = $this->nav();
        $list=Question::where('q_browse','>','100000')->limit(5)->get();
        return view("Index.mycourse.question",["nav"=>$nav,"list"=>$list]);
    }
     //我的问答详情
    public function questions($q_id){
        $nav = $this->nav();
        $data=Question::where('q_id',$q_id)->first();
        return view("Index.mycourse.questions",["nav"=>$nav,"data"=>$data]);
    }
    //我的笔记
    public function biji(){
        $nav = $this->nav();
        return view("Index.mycourse.biji",["nav"=>$nav]);
    } 
     //我的作业
    public function homework(){
        $nav = $this->nav();
        return view("Index.mycourse.homework",["nav"=>$nav]);
    } 
    //我的题库
    public function bank(){
        $nav = $this->nav();
        return view("Index.mycourse.bank",["nav"=>$nav]);
    } 
}
