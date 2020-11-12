<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MycouController extends Controller
{
    //我的首页
    public function mycourse(){
    	$nav = $this->nav();
    	return view("Index.mycourse.mycourse",["nav"=>$nav]);
    }
    //我的详情
    public function details(){
    	$nav = $this->nav();
    	return view("Index.mycourse.details",["nav"=>$nav]);
    }
}
