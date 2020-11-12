@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/information.css">
<script src="../../../../../static/index/js/jquery-1.8.0.min.js"></script>
<script src="../../../../../static/index/js/mine.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<h3 class="righttit">全部资讯</h3>
    <div class="clearh"></div>
    <span class="bread">
    <a class="ask_link" href="informationlist">全部资讯</a>&nbsp;/&nbsp;<a class="ask_link" href="informationhot">热门资讯</a>&nbsp;/&nbsp;
    @foreach($a as $v)
    {{$v['infor_title']}}
    </span>    
</div>
<div class="clearh"></div>
<div class="coursetext">
	<span class="informationtitle">
        <h2>{{$v['infor_title']}}</h2>
        <p class="gray">2015-02-02</p>
    </span>   
    <p class="coutex">{{$v['infor_content']}}</p>    
	<div class="clearh" style="height:30px;"></div>
    @endforeach
	<span class="pagejump">
    	<a class="pagebtn lpage" title="上一篇" href="#">上一篇</a>
        <a class="pagebtn npage" title="下一篇" href="#">下一篇</a>
    </span>   
</div>
<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门资讯</h3>
    <div class="gonggao">
	<ul class="hotask">
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


