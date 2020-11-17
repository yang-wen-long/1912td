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
    //登录LoginController
	Route::any('/index/user/login',"Index\LoginController@login"); 
	Route::any('/index/user/login_do/{zh}',"Index\LoginController@login_do");
	Route::any('/index/user/quit',"Index\LoginController@quit");
	//忘记密码
	Route::any('/index/user/myrepassword',"Index\LoginController@myrepassword");
	//注册
	Route::any('/index/user/reg',"Index\RegController@reg");
    Route::any('/index/user/reg_do',"Index\RegController@reg_do");

Route::prefix("/index")->middleware("Checklogin")->group(function(){

    //设置密保
    Route::any('/mycourse/mb',"Index\MycouController@mb");
    Route::any('/mycourse/mbdo',"Index\MycouController@mbdo");
	//个人中心
	//我的课程
	Route::any('/mycourse/mycourse',"Index\MycouController@mycourse"); 

	//修改信息
	Route::any('/mycourse/details',"Index\MycouController@details"); 

	//我的问答
	Route::any('/mycourse/question',"Index\MycouController@question"); 

	//我的问答详情
	Route::any('/mycourse/questions/{q_id}',"Index\MycouController@questions"); 

	//我的笔记
	Route::any('/mycourse/biji',"Index\MycouController@biji"); 
	

	//我的作业
	Route::any('/mycourse/homework',"Index\MycouController@homework"); 

	//我的题库
	Route::any('/mycourse/bank',"Index\MycouController@bank"); 

	//课程首页
	Route::any('/course/list',"Index\CourseController@list")->name('courselist');
	
	//课程首页处理
	Route::any('/course/Asubclass',"Index\CourseController@Asubclass");

	//课程目录
	Route::any('/course/log/{catalog_id}',"Index\CourseController@log");

	//课程详情
	Route::any('/course/detail/{cou_id}',"Index\CourseController@detail");

	//资讯
	Route::any('/information/informationlist',"Index\InformationController@informationlist")->name("informationlist");

	//资讯详情
	Route::any('/information/information/{infor_id}',"Index\InformationController@information")->name("information");

	//热门资讯
	Route::any('/information/informationhot',"Index\InformationController@informationhot")->name("informationhot");
	//精彩活动
	Route::any('/information/huodonglist',"Index\InformationController@huodonglist")->name("informationlist");
	
	//讲师
	Route::any('/teacher/teacherlist',"Index\TeacherController@teacherlist");

	//讲师详情
	Route::any('/teacher/teacher/{tea_id}',"Index\TeacherController@teacher");

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
	
	//ajax处理前台分类
	Route::post('/points',"Index\IndexController@points");
});
