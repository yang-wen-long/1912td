<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use \DB;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    //导航栏
    public function nav(){
    	$name = DB::table("nav")->where(["is_del"=>'1',"is_show"=>'1'])->get(["nav_name","nav_url"]);
    	return $name;
    }
    //无限极分类
    public function  createTree($data,$pid=0){
	    static $new_arr=[];
	    foreach ($data as $k => $v) {
	        if ($v['pid']==$pid) {
	            $new_arr[]=$v;
	            createTree($data,$v['p_id']);
	        }
	    }
	    return $new_arr;
	}
}
