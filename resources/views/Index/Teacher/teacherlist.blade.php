@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont" style="background: none repeat scroll 0 0 #fff;border-radius: 3px;box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);" >

	<h3 class="righttit" style="padding-left:50px;">优秀讲师</h3>
	@foreach($teacher as $v)
	<div class="coursepic tecti">
		<div class="teaimg">
		<a href="{{url('/index/teacher/teacher/'.$v->tea_id)}}" target="_blank"><img src="../../{{$v->tea_img}}" width="150"></a>
		</div>
		<div class="teachtext">
			<h3><a href="{{url('/index/teacher/teacher/'.$v->tea_id)}}" target="_blank" class="teatt">{{$v->tea_name}}</a>&nbsp;&nbsp;<strong>{{$v->cate_name}}讲师</strong></h3>
			<h4>个人简介</h4>
			<p>{{$v->tea_resume}}。</p>
			<h4>授课风格</h4>
			<p>{{$v->tea_style}}</p>
		</div>
		<div class="clearh"></div>
	</div>
	@endforeach

	

</div>
<!-- InstanceEndEditable -->





@endsection