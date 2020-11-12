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
	public function CreateTree($data,$parents_id=0,$level=1){
        if(!$data){
            return ;
        }
        static $newarray = [];
        foreach($data as $k=>$v){
            if($v->parents_id == $parents_id){
                $v->level = $level;
                $newarray[] = $v;
                //调用自身
                $this->CreateTree($data,$v->cate_id,$level+1);
            }
        }
        return $newarray;
    }
}
