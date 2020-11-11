<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//注册
class RegController extends Controller
{
    //注册
    public function reg(){
    	

    	return view("user.reg");
    }
    public function reg_do(){
        $data=request()->all();
		// $data['cou_time']=time();
		$data=Course::insert($data);
		if($data){
			Request()->session()->put('userinfo',$data);
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

    	return view("user.login");
    }
}
