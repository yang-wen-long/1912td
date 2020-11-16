<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use App\Models\Category;
use App\Models\Course;
use App\Models\Log;
use App\Models\Teacher;
//课程
class CourseController extends Controller{
    //详情
    public function list(){
        // 无限极分类
        $topcss = CateGory::where('parents_id',0)->get();
        $css=CateGory::get();
        $course = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
        ->take('9')
        ->orderBy('lll','desc')
        ->get();
        // 导航栏
        $nav = $this->nav();
    	return view("course.list",["nav"=>$nav,'topcss'=>$topcss,"css"=>$css,'course'=>$course]);
    }

    //课程详情
    public function detail($cou_id){
        $where=[
           ['cou_id','=',$cou_id],
           ['catalog_chapters','=','1']
        ];
        $study=Log::where($where)->first();
        // dd($study);
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
    	return view("course.detail",['study'=>$study,"name"=>$name,'teacher'=>$teacher,"nav"=>$nav,'cou_data'=>$cou_data,'log_data'=>$log_data]);
    }
    //我的目录
    public function log($log_id){
        //展示当前目录内容
        $log=Log::where('catalog_id',$log_id)->first();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("3")->get();
        $cou_id=$log['cou_id'];
        //获取大当前课程的目录列表
        $catalog=Log::where('cou_id',$cou_id)->get();
        return view('course/log',['log'=>$log,'catalog'=>$catalog,"name"=>$name]);
    }

    //处理课程首页分类业务
    public function Asubclass(){
        if(request()->isMethod("get")){
            $name = Request()->get("keyword");
            $data = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
                          ->where("cou_name","like","%$name%")
                          ->take('9')
                          ->orderBy('lll','desc')
                          ->get();
            if($data=='[]'){
                return json_encode(["error"=>1,"msg"=>"正在赶往这的路上！"]);
            }
            if($data){
                return json_encode(["error"=>0,"msg"=>"查询","data"=>$data]);
            }else{
                 return json_encode(["error"=>1,"msg"=>"查询失败"]);
            }
        }
        if(request()->isMethod("post")){
            $cate_id = request()->post("cate_id");
            $fgid="/^[0-9]*$/";
            if(!preg_match($fgid,$cate_id)){
                return json_encode(["error"=>1,"msg"=>"请不要测试我的耐性！"]);
            }
            $data = Course::select('cou_id','cou_name','cou_desc','cou_img','cou_time','lll')
                          ->take('9')
                          ->orderBy('lll','desc')
                          ->where("cate_id",$cate_id)
                          ->get();
            if($data=='[]'){
                return json_encode(["error"=>1,"msg"=>"正在赶往这的路上！"]);
            }
            if($data){
                return json_encode(["error"=>0,"msg"=>"成功","data"=>$data]);
            }else{
                 return json_encode(["error"=>1,"msg"=>"分类失败"]);
            }
        }
    }
}
