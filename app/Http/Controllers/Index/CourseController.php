<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \DB;
use App\Models\Course;
use App\Models\Log;
use App\Models\Teacher;
use App\Models\Category;
//课程
class CourseController extends Controller
{
    //列表
   public function list(){
        // 无限极分类
        $data = Category::where('parents_id',0)->orderBy('cate_id','asc')->get('cate_id');
        // dd($data);
        $cate_id= $data[0]->cate_id;
        // dd($cate_id);
        $array=Category::get();
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
        return view("course.list",["nav"=>$nav,'data'=>$data,'course'=>$course]);
    }
    //课程详情
    public function detail($cou_id){
        $nav = $this->nav();
        $name = DB::table("course_notice")->where("notice_del","1")->limit("2")->get();
        $cou_data=Course::leftJoin('shop_admin','course.admin_id','=','shop_admin.admin_id')->where('cou_id',$cou_id)->first();
        // dd($cou_data);
        $a=$cou_data['admin_id'];
        $teacher=Teacher::where('admin_id',$a)->first();
         // var_dump($teacher);die;
        // $c=$b['tea_name'];
         // var_dump($c);die;
        $log_data=Log::where('cou_id',$cou_id)->paginate(6);
    	return view("course.detail",["name"=>$name,'teacher'=>$teacher,"nav"=>$nav,'cou_data'=>$cou_data,'log_data'=>$log_data]);
    }
     
   
}
