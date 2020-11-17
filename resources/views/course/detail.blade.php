@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<div class="course_img"><img src="../../../../../static/index/images/c1.jpg" width="500"></div>
    <div class="coursetitle">
   		<a class="state">{{$cou_data->cou_status==1?'连载':'完结'}}</a>
    	<h2 class="courseh2">{{$cou_data->cou_name}}</h2>    
        <p class="courstime">总课时：<span class="course_tt">30课时</span></p>
		<p class="courstime">课程时长：<span class="course_tt">3小时20分</span></p>
        <p class="courstime">学习人数：<span class="course_tt">{{$cou_data->lll}}人</span></p>
		<p class="courstime">讲师：{{$teacher->tea_name}}</p>
		<p class="courstime">课程评价：<img width="71" height="14" src="../../../../../static/index/images/evaluate5.png">&nbsp;&nbsp;<span class="hidden-sm hidden-xs">5.0分（10人评价）</span></p>
        <!--<p><a class="state end">完结</a></p>-->  
        <span class="coursebtn"><a class="btnlink" href="{{url('/index/course/log/'.$study->catalog_id)}}">加入学习</a><a class="codol fx" href="javascript:void(0);" onClick="$('#bds').toggle();">分享课程
        </a><a class="codol sc" href="#">收藏课程</a></span> 
		<div style="clear:both;"></div>
		<div id="bds">
            <div class="bdsharebuttonbox">
				<a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a>
				<a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a>
				<a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a>
				<a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a>
				<a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a>
				<a href="#" class="bds_more" data-cmd="more"></a>
				<a class="bds_count" data-cmd="count"></a>
			</div>
            <script>
			window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"24"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
			</script>
       </div>
    </div>
    <div class="clearh"></div>
</div>
<div class="clearh"></div>
<div class="coursetext">
	<h3 class="leftit">课程简介</h3>
    <p class="coutex">{{$cou_data->cou_desc}}</p>
	<div class="clearh"></div>
	<h3 class="leftit">课程目录</h3>
    <dl class="mulu">
        @foreach($log_data as $k=>$v)
    	<dt><a href="{{url('/index/course/log/'.$v->catalog_id)}}" class="graylink">第{{$v->catalog_chapters}}章&nbsp;&nbsp;{{$v->catalog_name}}</a></dt>
        <dd>{{$v->catalog_desc}}</dd>
   @endforeach  	 
    </dl>
</div>
<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">授课讲师</h3>
    <div class="teacher">
    <div class="teapic ppi">
    <a href="teacher.html" target="_blank"><img src="../../../../../static/index/images/teacher.png" width="80" class="teapicy" title="张民智"></a>
    <h3 class="tname"><a href="{{url('/index/teacher/teacher/'.$teacher->tea_id)}}" class="peptitle" target="_blank">{{$teacher->tea_name}}</a><p style="font-size:14px;color:#666">{{$teacher->tea_style}}</p></h3>
    </div>
    <div class="clearh"></div>
    <p>{{$teacher->tea_resume}}</p>
    </div>
    </div>
</div>
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">课程公告</h3>
    <div class="gonggao">
    @foreach($name as $k=>$a)
	<div class="clearh"></div>
    <p>{{$a->notice}}<br/>
	<span class="gonggao_time">{{date("Y-m-d H:i:s",$a->create_time)}}</span>
	</p>
    @endforeach
	<div class="clearh"></div>
    </div>
    </div>
</div>
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">相关课程</h3>
    <div class="teacher">
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images/c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images/c2.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="../../../../../static/index/images/c3.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    </div>
    </div>
</div>  
</div>
@endsection