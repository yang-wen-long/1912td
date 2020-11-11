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
        <a class="fombtn cur" href="{{url('/index/information/informationlist')}}">全部资讯</a>
        <a class="fombtn" href="{{url('/index/information/informationhot')}}">热门资讯</a>
        <a class="fombtn" href="{{url('/index/information/informationlist')}}">考试指导</a>
        <a class="fombtn" href="{{url('/index/information/informationlist')}}">精彩活动</a>
    </span>
</div>
<div class="clearh"></div>
<div class="coursetext">
	<div class="informationlist">
        @foreach($list as $v)
    	<h3><a class="artlink" href="{{url('/index/information/information')}}">{{$v['infor_title']}}</a></h3>
        <p>{{$v['infor_content']}}</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">{{$v['infor_time']}}</b>
        </p>
        <div class="clearh"></div>
        @endforeach
    </div>
	<div class="clearh" style="height:20px;"></div>
	<span class="pagejump">
    	<p class="userpager-list">
       	   <a href="#" class="page-number">首页</a>
           <a href="#" class="page-number">上一页</a>
           <a href="#" class="page-number">1</a>
           <a href="#" class="page-number pageractive">2</a>
           <a href="#" class="page-number">3</a>
            <a href="#" class="page-number">...</a>
            <a href="#" class="page-number">10</a>
           <a href="#" class="page-number">下一页</a>
           <a href="#" class="page-number">末页</a>
        </p>
    </span>
    <div class="clearh" style="height:10px;"></div>
</div>
<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门资讯</h3>
    <div class="gonggao">
	<ul class="informationhot">
            @foreach($hot as $v)
            <li><a class="ask_link" href="#"><strong>●</strong>{{$v['infor_title']}} </a></li>
            @endforeach  
            
        </ul>
    </div>
    </div>
</div>
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">推荐课程</h3>
    <div class="teacher">
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images//c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images//c2.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images//c3.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    </div>
    </div>
</div>  
</div>
<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->
@endsection