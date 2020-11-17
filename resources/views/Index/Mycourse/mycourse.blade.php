@extends('layouts.show')
@section('app.name', '我的详情')
@section('content')
<link rel="stylesheet" href="/static/index/css/member.css"/>
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
    	<li class=" mb1 currnav"><a class="mb1" href="{{url('/index/mycourse/mycourse')}}">我的课程</a></li>
		<li><a class="mb3" href="{{url('/index/mycourse/question')}}">我的问答</a></li>
		<li><a class="mb4" href="{{url('/index/mycourse/biji')}}">我的笔记</a></li>
		<li><a class="mb12" href="{{url('/index/mycourse/homework')}}">我的作业</a></li>
        <li><a class="mb2" href="{{url('/index/mycourse/bank')}}">我的题库</a></li>
   </ul>
    </div>
  </div>
	<div class="membcont">
<h3 class="mem-h3">我的课程</h3>
<div class="box demo2" style="width:820px;">
     
			<ul class="tab_menu" style="margin-left:30px;">
				<li class="current">学习中</li>
				<li>已学完</li>
            </ul>

			<div class="tab_box">
				<div>
					<ul class="memb_course">                   	
                       
					<ul class="memb_course">
                        @foreach($arr as $v)
                        @if($v->is_xx==1)
                        <li>
                            <div class="courseli">
                            <a href="{{url('/index/course/detail/'.$v->cou_id)}}" target="_blank"><img width="230" src="../../{{$v->cou_img}}"></a>
                            <p class="memb_courname"><a href="{{url('/index/course/detail/'.$v->cou_id)}}" class="blacklink">{{$v->cou_name}}</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:60%;"></div>
                            </div>
                            <p class="goon"><a href="{{url('/index/course/detail/'.$v->cou_id)}}"><span>继续学习</span></a></p>
                            </div>
                        </li>
                        @endif
                        @endforeach
                        <div style="height:10px;" class="clearfix"></div>
                    </ul> 
                </div>
              
				<div class="hide">
					<div>
					<ul class="memb_course">
                    	
                    @foreach($arr as $v)
                    @if($v->is_xx==2)
                        <li>
                            <div class="courseli">
                            <a href="{{url('/index/course/detail/'.$v->cou_id)}}" target="_blank"><img width="230" src="../../{{$v->cou_img}}"></a>
                            <p class="memb_courname"><a href="{{url('/index/course/detail/'.$v->cou_id)}}" class="blacklink">{{$v->cou_name}}</a></p>
                            <div class="mpp">
                                <div class="lv" style="width:100%;"></div>
                            </div>
                            <p class="goon"><a href="{{url('/index/course/detail/'.$v->cou_id)}}"><span>查看课程</span></a></p>
                            </div>
                        </li>
                        @endif
                        @endforeach

                        
                       
                        <div class="clearfix" style="height:10px;"></div>
                    </ul>
                    </div>
                    
                </div>
				</div>
			</div>
		</div>
<div class="clearh"></div>
<!-- InstanceEndEditable -->
@endsection