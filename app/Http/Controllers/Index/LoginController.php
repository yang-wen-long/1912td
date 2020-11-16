<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

//登录
class LoginController extends Controller
{
    //
    public function login(){
    	$nav = $this->nav();
    	return view("user.login",["nav"=>$nav]);
    } 

    public function login_do($zh){
    	$u_pwd=request()->u_pwd;
        
        $domain = strstr($zh,'@');
        
         if($domain){
         	//条件
              $where=[
                ['u_email','=',$zh],
                ['u_pwd','=',$u_pwd]
            ];
            $res=User::where($where)->first();
             // dd($res);
            //验证邮箱成功登陆
            if($res){
                  Request()->session()->put('userinfo',$res);
			    $arr=[
			    'code'=>'00000',
                'msg'=>'邮箱登陆成功',
                "url"=>"/"
                ];
            }else{
               
            	//登陆失败
            	$arr=[
			        'code'=>'00001',
                    'msg'=>'邮箱登陆失败',
                    "url"=>"/index/user/login"
                    ];
                    
            }
          return json_encode($arr,true);

         }else{
                //条件
            	$where=[
                    ['u_name','=',$zh],
                    ['u_pwd','=',$u_pwd]
                ];
                $res=User::where($where)->first();
                if($res){
                      Request()->session()->put('userinfo',$res);
                	$arr=[
			        'code'=>'00000',
                    'msg'=>'账号登陆成功',
                    "url"=>"/"
                    ];
                }else{
                	//登陆失败
            	$arr=[
			        'code'=>'00001',
                    'msg'=>'账号登陆失败',
                    "url"=>"/index/user/login"
                    ];
                     

                }
                return json_encode($arr,true);
         }
        
    }
    //修改密码
    public function myrepassword(){
    	$nav = $this->nav();
    	return view("user.myrepassword",["nav"=>$nav]);
    }
    public function quit(){
        $user=Request()->session()->forget('userinfo');
     
            echo  "<script>alert('退出成功');location.href='/';</script>";
        
    }
}
