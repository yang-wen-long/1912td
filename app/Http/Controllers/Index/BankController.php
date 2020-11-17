<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\Course;
//题库
class BankController extends Controller
{
    //
    public function bank(){
    	$nav=$this->nav();
        $data=Bank::paginate(6);
        //热门课程
        $course_data=Course::orderby('lll','desc')->limit(5)->get();
        //推荐课程
        $course_tj=Course::where('is_tj','2')->orderby('cou_time','desc')->limit(3)->get();
        // dd($data);
    	return view("Index.Bank.bank",['data'=>$data,'nav'=>$nav,'course_data'=>$course_data,'course_tj'=>$course_tj]);
    }
     
}
