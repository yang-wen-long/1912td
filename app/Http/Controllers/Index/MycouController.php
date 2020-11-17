<?php
namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Answer;
use App\Models\Question;
use App\Models\Course;
use App\Models\Mb;
use App\Models\Catalog_bank;
use App\Models\User_bank;
use  App\Models\Coustatus;
use \DB;
class MycouController extends Controller
{
    //我的课程
    public function mycourse(){
        // 导航栏
        $nav = $this->nav();  
        $users = Request()->session()->get("userinfo")->u_id;
        // dd($users);
        $where = [
            "coustatus.u_id"=>$users
        ];
        $arr = Coustatus::where($where)->join('course','coustatus.cou_id',"=",'course.cou_id')->get();
        // dd($arr);
        $userinfo=Request()->session()->get('userinfo');
        // dd($userinfo);   
    	return view("Index.mycourse.mycourse",["nav"=>$nav,'userinfo'=>$userinfo,'arr'=>$arr]);    
    }
    //修改信息
    public function details(){
        $userinfo=Request()->session()->get('userinfo');
    	$nav = $this->nav();
    	return view("Index.mycourse.details",["nav"=>$nav,'userinfo'=>$userinfo]);
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
        $users = Request()->session()->get("userinfo")->u_id;
        $where=[
            "user_bank.u_id"=>$users
        ];
        $bank = DB::table('user_bank')
                ->where($where)
                ->join('catalog_bank','user_bank.bank_id',"=",'catalog_bank.bank_id')
                ->get();
        // dd($bank);
        return view("Index.mycourse.bank",["nav"=>$nav,"bank"=>$bank]);
    } 
    public function mb(){
         $nav = $this->nav();
         $userinfo=Request()->session()->get('userinfo');
         $u_id=$userinfo['u_id'];
         $data=Mb::where('u_id',$u_id)->first();
         if($data){
            return "<script>alert('已经设置过密保');location.href='/index/mycourse/mycourse';</script>";
         }
        return view('Index.mycourse.mb',['userinfo'=>$userinfo,'nav'=>$nav]);
    }
    public function mbdo(){
        $data=request()->all();
        $u_id=Request()->session()->get('userinfo')['u_id']; 
        $data['u_id']=$u_id;
        $data=Mb::insert($data);
        if($data){
            $arr=[
                'code'=>'00000',
                'msg'=>'密保添加成功',
            ];
        }else{
            $arr = [
                'code'=>'00002',
                'msg'=>'密保添加失败'
            ];
        }
        return json_encode($arr,true);
    }
}
