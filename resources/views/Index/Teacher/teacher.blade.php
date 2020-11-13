@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">

	<div class="coursepic tecti">
		<div class="teaimg">
		<img src="../../../../{{$teacher->tea_img}}" width="150"> 
		</div>
		<div class="teachtext">
			<h3>{{$teacher->tea_name}}&nbsp;&nbsp;<strong>{{$teacher->cate_name}}讲师</strong></h3>
			<h4>个人简介</h4>
			<p>{{$teacher->tea_resume}}</p>
			<h4>授课风格</h4>
			<p>{{$teacher->tea_style}}</p>
		</div>
		<div class="clearh"></div>
	</div>

<div class="clearh"></div>

<div class="tcourselist">
<h3 class="righttit" style="padding-left:50px;">在教课程</h3>

<ul class="tcourseul">
@foreach($course as $v)
	<li>
	    <span class="courseimg tcourseimg"><a href="{{url('/index/course/coursecont')}}" target="_blank"><img width="230" src="../../../../{{$v->cou_img}}"></a></span>
	    <span class="tcoursetext">
	       <h4><a href="{{url('/index/course/coursecont')}}" target="_blank" class="teatt">{{$v->cou_name}}</a><a class="state">更新中</a></h4>
	       <p class="teadec">
			   {{$v->cou_desc}}
			</p>
	       <p class="courselabel clock">
			   30课时 600分钟
			   <span class="courselabel student">{{$v->lll}}人学习</span>
			   <span class="courselabel pingjia">评价：<img width="71" height="14" src="/static/index/images//evaluate.png" data-bd-imgshare-binded="1">
				</span>
			</p>
	   </span>
	   <div style="height:0" class="clearh"></div>
	</li>
@endforeach
	

<div class="clearh"></div>
</ul>

</div>




<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->

@endsection