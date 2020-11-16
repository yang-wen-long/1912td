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
	//忘记密码
	Route::any('/index/user/myrepassword',"Index\LoginController@myrepassword");
	//注册
	Route::any('/index/user/reg',"Index\RegController@reg");
    Route::any('/index/user/reg_do',"Index\RegController@reg_do");

Route::prefix("/index")->middleware("Checklogin")->group(function(){

	//我的首页
	Route::any('/mycourse/mycourse',"Index\MycouController@mycourse"); 

	//我的详情
	Route::any('/mycourse/details',"Index\MycouController@details"); 
	

	//课程首页
	Route::any('/course/course',"Index\CourseController@course")->name("course");
	//课程首页
	Route::any('/course/list',"Index\CourseController@list");

	//课程目录
	Route::any('/course/log/{catalog_id}',"Index\CourseController@log");

	//课程详情
	Route::any('/course/detail/{cou_id}',"Index\CourseController@detail");

    //加入学习
    Route::any('/course/study/{cou_id}',"Index\CourseController@study");
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
                        // var date = index.data;
                        // var str = "<ul class='courseul' id='myTab3_Content0' style='display: block;'><li id='desc_li' class='descname'><div class='courselist'>";
                        // for(var i in date){
                        //     str+="<a href='{{url("+/index/course/coursecont/+date[i]['cou_id']+")}}'><img width='263' style='border-radius:3px 3px 0 0;'src='"+date[i]['cou_img']+"'></a><p class='courTit'>"+date[i]['cou_name']+"</p><div class='gray'><span>1小时前更新</span><span class='sp1'>"+date[i]['lll']+"人学习"
                        // }
                        // str+="</span><div style='clear:both'></div></div></div></li><div class='clearh'></div></ul>";
                        // $("#showdesc").after(str);