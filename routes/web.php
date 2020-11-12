<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|前台首页
*/
Route::get('/',"Index\IndexController@index")->name("index");

Route::prefix("/index")/*->middleware("auth")*/->group(function(){

	//登录LoginController
	Route::any('/user/login',"Index\LoginController@login");
    Route::any('/user/login_do/{zh}',"Index\LoginController@login_do");
	//忘记密码
	Route::any('/user/myrepassword',"Index\LoginController@myrepassword");

	//注册
	Route::any('/user/reg',"Index\RegController@reg");
    Route::any('/user/reg_do',"Index\RegController@reg_do");

	//我的首页
	Route::any('/mycourse/mycourse',"Index\MycouController@mycourse"); 

	//我的详情
	Route::any('/mycourse/details',"Index\MycouController@details"); 
	

	//课程首页
	Route::any('/course/course',"Index\CourseController@course")->name("course");

	//课程目录
	Route::any('/course/coursecont',"Index\CourseController@coursecont");

	//课程详情
	Route::any('/course/detail/{cou_id}',"Index\CourseController@detail");

	//课程视频
	Route::any('/video/video',"Index\VideoController@video");

	//资讯
	Route::any('/information/informationlist',"Index\InformationController@informationlist")->name("informationlist");

	//资讯详情
	Route::any('/information/information',"Index\InformationController@information")->name("information");

	//热门资讯
	Route::any('/information/informationhot',"Index\InformationController@informationhot")->name("informationhot");;
	
	//讲师
	Route::any('/teacher/teacherlist',"Index\TeacherController@teacherlist");

	//讲师详情
	Route::any('/teacher/teacher',"Index\TeacherController@teacher");

	//题库
	Route::any('/question/bank',"Index\BankController@bank")->name("informationlist");

	//关于我们
	Route::any('/page/page',"Index\PageController@Page");

	//联系我们
	Route::any('/page/page_contact',"Index\PageController@page_contact");

	//帮助中心
	Route::any('/page/help_center',"Index\PageController@help_center");

	//反馈意见
	Route::any('/page/feedback',"Index\PageController@feedback");

	//加入我们
	Route::any('/page/joinus',"Index\PageController@joinus");

	//调用导航栏数据
	Route::any('/navigation',"Index\IndexController@navigation");
});
