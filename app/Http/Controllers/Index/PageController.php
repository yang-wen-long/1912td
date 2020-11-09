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

}
