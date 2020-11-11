<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//关于我们
class PageController extends Controller
{
    //
    public function Page(){
    	return view("Index.Page.Page");
    }
    //联系我们
    public function page_contact(){
		return view("Index.Page.page_contact");
    }
    //帮助中心
    public function help_center(){
    	return view("Index.Page.help_center");
    }
    //反馈意见
    public function feedback(){
    	return view("Index.Page.feedback");
    }
    //加入我们
    public function joinus(){
        return view("Index.Page.joinus");
    }
}
