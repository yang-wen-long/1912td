<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
//注册
class RegController extends Controller
{
    //注册
    public function reg(){
    	

    	return view("user.reg");
    }
    public function reg_do(){
        $data=request()->all();
        // dd($data);
		$data['u_time']=time();
		//验证已注册
		$u_name=request()->u_name;
        $u_email=request()->u_email;
		$res=User::where('u_name',$u_name)->count();
        $res1=User::where('u_email',$u_email)->count();
		if($res){
             $arr=[
                "code"=>'00001',
                "msg"=>"账号已存在",
                "url"=>"/index/user/reg"
            ];
            return json_encode($arr,true);
        }

        if($res1){
             $arr=[
                "code"=>'00001',
                "msg"=>"账号已存在",
                "url"=>"/index/user/reg"
            ];
            return json_encode($arr,true);
        }
		//注册
		$data=User::insert($data);
		if($data){
			$arr=[
			    'code'=>'00000',
                'msg'=>'用户注册成功',
                "url"=>"/index/user/login"
            ];
        }else{
            $arr = [
                'code'=>'00002',
                'msg'=>'用户注册失败'
            ];
        }
        return json_encode($arr,true);
 
    }
}
