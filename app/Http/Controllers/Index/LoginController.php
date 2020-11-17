<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mb;

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
    public function xg(){
        $new_pwd=request()->post('new_pwd');
        $u_name=request()->post('u_name');
        $wt_1=request()->post('wt_1');
        $wt_2=request()->post('wt_2');
        $wt_3=request()->post('wt_3');

  
        $a=User::where('u_name',$u_name)->first();
        $u_id=$a['u_id'];
        $where=[
           ['wt_1','=',$wt_1],
           ['wt_2','=',$wt_2],
           ['wt_3','=',$wt_3],
           ['u_id','=',$u_id]
        ];
        $data=Mb::where($where)->first();
        if($data){
            $ss=User::where('u_id',$u_id)->update(['u_pwd'=>$new_pwd]);
            Request()->session()->forget('userinfo');
            $arr=[
                'code'=>'00000',
                'msg'=>'验证成功 密码已更新',
                'url'=>"/"
            ];
        }else{
            $arr = [
                'code'=>'00002',
                'msg'=>'验证失败',
                'url'=>"/"
            ];
        }
        return json_encode($arr,true);
    }
}
