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

	//注册
	Route::any('/user/reg',"Index\RegController@reg");

	//我的详情
	Route::any('/mycourse/mycourse',"Index\MycouController@mycourse"); 

	//课程首页
	Route::any('/course/courselist',"Index\CourselistController@courselist")->name("courselist");

	//课程目录
	Route::any('/course/coursecont',"Index\CourselistController@coursecont");

	//课程详情
	Route::any('/course/coursecont1',"Index\CourselistController@coursecont1");

	//课程视频
	Route::any('/video/video',"Index\VideoController@video");

	//资讯
	Route::any('/article/articlelist',"Index\ArtiController@articlelist")->name("articlelist");

	//资讯性情
	Route::any('/article/article',"Index\ArtiController@article")->name("article");
	
	//讲师
	Route::any('/teacher/teacherlist',"Index\TeacherController@teacherlist");

	//讲师详情
	Route::any('/teacher/teacher',"Index\TeacherController@teacher");

	//关于我们
	Route::any('/page/page',"Index\PageController@Page");
	
	//联系我们
	Route::any('/page/page_contact',"Index\PageController@page_contact");
});
