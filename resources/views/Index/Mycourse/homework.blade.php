@extends('layouts.show')
@section('app.name', '我的详情')
@section('content')
<link rel="stylesheet" href="/static/index/css/member.css"/>
<link rel="stylesheet" href="/static/index/css/information.css">
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script src="/static/index/js/mine.js"></script>
<script type="text/javascript" src="../../../static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<script type="text/javascript">
$(function(){
    $('.demo2').Tabs({
        event:'click'
    });
}); 
</script>
<div class="clearh"></div>
<div class="membertab">
<div class="memblist">
    <div class="membhead">
    <div style="text-align:center;"><img src="/static/index/images/0-0.JPG" width="80" ></div>
    <div style="width:220px;text-align:center;">
    <p class="membUpdate mine">某某某</p> 
    <p class="membUpdate mine"><a href="{{url('/index/mycourse/details')}}">修改信息</a>&nbsp;|&nbsp;<a href="{{url('/index/user/myrepassword')}}">修改密码</a></p>
    <div class="clearh"></div>
    </div>
    </div>
    <div class="memb">
        <ul>
            <li class="mb1 "><a class="mb1" href="{{url('/index/mycourse/mycourse')}}">我的课程</a></li>
            <li><a class="mb3" href="{{url('/index/mycourse/question')}}">我的问答</a></li>
            <li><a class="mb4 " href="{{url('/index/mycourse/biji')}}">我的笔记</a></li>
            <li><a class="mb12 currnav" href="{{url('/index/mycourse/homework')}}">我的作业</a></li>
            <li><a class="mb2 " href="{{url('/index/mycourse/bank')}}" target="_blank">我的题库</a></li>
       </ul>
    </div>
  </div>
<div class="membcont">
    <h3 class="mem-h3">我的作业</h3>
    <div class="box demo2" style="width:820px;">
       <div class="coursetext">
        
        <h3><a class="artlink" href=""></a></h3>
        <p></p>  
        <p class="artilabel">   
        <span class="ask_label">这里是我的作业哦</span></p>
        <b class="labtime"></b>      
        <div class="clearh"></div>
       
    <!-- 结束 -->
    </div>
    </div>
</div>
<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->
@endsection