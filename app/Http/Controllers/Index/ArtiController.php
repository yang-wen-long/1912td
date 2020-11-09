<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//资讯
class ArtiController extends Controller
{
    //资讯
    public function articlelist(){
    	return view("/Index/article/articlelist");
    }
    //资讯性情
    public function article(){
    	return view("/Index/article/article");
    }
}
