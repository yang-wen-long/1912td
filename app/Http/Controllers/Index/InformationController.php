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
    	$hot=Information::where('infor_hot',1000)->limit(10)->get();
    	$infor_time=time();
    	return view("/Index/information/informationhot",["hot"=>$hot]);
    }
    //资讯详情
    public function information(){
    	$a=Information::where('infor_hot',988777)->limit(1)->get();
    	$hot=Information::where('infor_hot',1000)->limit(5)->get();
    	return view("/Index/information/information",["a"=>$a,"hot"=>$hot]);
    }
    //资讯
    public function informationlist(){
    	$list=Information::where('infor_id',22)->limit(5)->get();
    	$hot=Information::where('infor_hot',1000)->limit(5)->get();   	
    	return view("/Index/information/informationlist",["list"=>$list,"hot"=>$hot]);
    }
}
