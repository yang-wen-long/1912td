<?php

namespace App\Http\Controllers\Index;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;
//资讯
class InformationController extends Controller
{
    //热门资讯
    public function informationhot(){
    	$hot=Information::where('infor_hot','>',1000)->limit(20)->get();
    	$infor_time=time();
        $nav = $this->nav();
    	return view("/Index/information/informationhot",["hot"=>$hot,"nav"=>$nav]);
    }
    //资讯详情
    public function information(){
    	$a=Information::where('infor_hot',3445)->limit(1)->get();
        $nav = $this->nav();
    	$hot=Information::where('infor_hot',1000)->limit(5)->get();
    	return view("/Index/information/information",["a"=>$a,"hot"=>$hot,"nav"=>$nav]);
    }
    //资讯
    public function informationlist(){
        $nav = $this->nav();
    	$list=Information::limit(5)->paginate(5);
    	$hot=Information::where('infor_hot',1000)->limit(5)->get();   	
    	return view("/Index/information/informationlist",["list"=>$list,"hot"=>$hot,"nav"=>$nav]);
    }
}
