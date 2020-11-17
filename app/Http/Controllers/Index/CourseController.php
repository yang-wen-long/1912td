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
        if(Request()->isMethod("get")){
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
            $log_data=Log::where('cou_id',$cou_id)->paginate(5);
            return view("course.detail",['study'=>$study,"name"=>$name,'teacher'=>$teacher,"nav"=>$nav,'cou_data'=>$cou_data,'log_data'=>$log_data]);
        }
        if(Request()->isMethod("post")){
            $user_id = Request()->session()->get("userinfo")->u_id;
            $name = DB::table("user_bank")->where("bank_id",$cou_id)->first();
            if($name == ''){
                $datas = [
                    "u_id"=>$user_id,
                    "bank_id"=>$cou_id,
                    "add_time"=>time()
                ];
                $data = DB::table("user_bank")->insert($datas);
                if($data){
                    return json_encode(["error"=>0,"msg"=>"添加成功"]);
                }else{
                    return json_encode(["error"=>1,"msg"=>"添加失败"]);
                }
            }else{
                return json_encode(["error"=>1,"msg"=>"请不要重复添加"]);
            }
        }
    }
    //我的目录
    public function log($log_id){
        if(Request()->isMethod("get")){
            //展示当前目录内容
            $log=Log::select("cou_id","catalog_chapters","catalog_name","video_img")->where('catalog_id',$log_id)->first();
            $cou_id=$log['cou_id'];
            //用户课程状态
            $this->username($cou_id);
            //获取大当前课程的目录列表
            $catalog=Log::select("catalog_chapters","catalog_id","catalog_name")->where('cou_id',$cou_id)->get();
            //查询视频展示照片
            $cou_img = DB::table('course')->where("cou_id",$log->cou_id)->first("cou_img");
            return view('course/log',['log'=>$log,'catalog'=>$catalog,"cou_img"=>$cou_img]);
        }
        if(Request()->isMethod("post")){
            $note_desc = Request()->post("note_desc");
            $user_id = request()->session()->get("userinfo")->u_id;
            $data = [
                "cou_id"=>$log_id,
                "note_desc"=>$note_desc,
                "u_id"=>$user_id,
                "create_time"=>time()
            ];
            $name = DB::table("users_note")->insert($data);
            if($name){
                return json_encode(["error"=>0,"msg"=>'添加成功']);
            }else{
                return json_encode(["error"=>1,"msg"=>'添加失败']);
            }

        }
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

    //处理用户浏览课程数据
    public function username($cou_id){
        $user = request()->session()->get("userinfo")->u_id;
        $user_name = DB::table("coustatus")->where(["cou_id"=>$cou_id,"u_id"=>$user])->first();
        if(!empty($user_name)){
            $name = DB::table("coustatus")->where(["cou_id"=>$cou_id,"u_id"=>$user])->update(["add_time"=>time(),"upd_time"=>time()]);
        }else{
            $data = [
                    "cou_id"=>$cou_id,
                    "u_id"=>$user,
                    "is_xx"=>1,
                    "add_time"=>time(),
            ];
            $name = DB::table("coustatus")->insert($data);
        }
        return $name;
    }
}
