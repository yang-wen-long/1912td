@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/information.css">
<script src="../../../../../static/index/js/jquery-1.8.0.min.js"></script>
<script src="../../../../../static/index/js/mine.js"></script>
<script type="text/javascript" src="../../../static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<h3 class="righttit">全部资讯</h3>
    <div class="clearh"></div>
    <span class="bread nob">
        <a class="fombtn" href="{{url('/index/information/informationlist')}}">全部资讯</a>
        <a class="fombtn  cur" href="{{url('/index/information/informationhot')}}">热门资讯</a>
        <a class="fombtn" href="{{url('/index/information/informationlist')}}">考试指导</a>
        <a class="fombtn" href="{{url('/index/information/informationlist')}}">精彩活动</a>
    </span>
</div>
@foreach($hot as $v)
    	<h3><a class="artlink" href="{{url('/index/information/information')}}">{{$v['infor_title']}}</a></h3>
        <p>{{$v['infor_content']}}</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">{{date('Y-m-d H:i:s',$v['infor_time'])}}</b>
        </p>
        <div class="clearh"></div>
@endforeach
@endsection
