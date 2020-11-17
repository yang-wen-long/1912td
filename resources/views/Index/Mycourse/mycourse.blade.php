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
    <p class="membUpdate mine">{{$userinfo->u_name}}</p> 
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
        <li><a class="mb2" href="{{url('/index/mycourse/bank')}}" target="_blank">我的题库</a></li>
        <li><a class="mb2" href="{{url('/index/mycourse/mb')}}" target="_blank">设置密保</a></li>
   </ul>
    </div>
  </div>
	<div class="membcont">
<h3 class="mem-h3">我的课程</h3>
<div class="box demo2" style="width:820px;">
        @foreach($course as $v)
			<ul class="tab_menu" style="margin-left:30px;">
				<li class="current">{{$v->is_xx==1?'学习中':'已学完'}}</li>
				<li>{{$v->is_xx==1?'已学完':'学习中'}}</li>
            </ul>
        @endforeach
			<div class="tab_box">
				<div>
					<ul class="memb_course">                   	
                       
					<ul class="memb_course">
                    	@foreach($data as $v)
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
                        @endforeach
                        <div style="height:10px;" class="clearfix"></div>
                    </ul> 
                </div>               
				<div class="hide">
					<div>
                    @foreach($datas as $v)
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
                        <div class="clearfix" style="height:10px;"></div>
                    </ul>
				</div>
				</div>								
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