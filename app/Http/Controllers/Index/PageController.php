<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageController extends Controller{
    //关于我们
    public function Page(){
        $nav = $this->nav();
    	return view("Index.Page.Page",["nav"=>$nav]);
    }
    //联系我们
    public function page_contact(){
<<<<<<< HEAD
		  return view("Index.Page.page_contact");
=======
        $nav = $this->nav();
		return view("Index.Page.page_contact",["nav"=>$nav]);
>>>>>>> 986333ce1b91661f05d28aa41d5962f17946de2b
    }
    //帮助中心
    public function help_center(){
        $nav = $this->nav();
    	return view("Index.Page.help_center",["nav"=>$nav]);
    }
    //反馈意见
    public function feedback(){
        $nav = $this->nav();
    	return view("Index.Page.feedback",["nav"=>$nav]);
    }
    //加入我们
    public function joinus(){
        $nav = $this->nav();
        return view("Index.Page.joinus",["nav"=>$nav]);
    }
}
