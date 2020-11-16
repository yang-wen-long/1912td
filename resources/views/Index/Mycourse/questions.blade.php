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
<div class="membcont">
    <h3 class="mem-h3">我的问答详情</h3>
    <div class="box demo2" style="width:820px;">
       <div class="coursetext">
    	<h3><a class="artlink">{{$data->q_title}}</a></h3>
        <p>{{$data->q_name}}</p>  
        <p class="artilabel">   
        <span class="ask_label">热门提问</span></p>
        <b class="labtime">{{date('Y-m-d H:i:s',$data->q_time)}}</b>      
        <div class="clearh"></div>
       
    <!-- 结束 -->
    </div>
</div>
<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->
@endsection