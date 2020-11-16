<<<<<<< HEAD
 @extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<div class="course_img"><img src="/static/index/images/c1.jpg" width="500"></div>
    <div class="coursetitle">
   		<a class="state">更新中</a>
    	<h2 class="courseh2">会计基础</h2>    
        <p class="courstime">总课时：<span class="course_tt">30课时</span></p>
		<p class="courstime">课程时长：<span class="course_tt">3小时20分</span></p>
        <p class="courstime">学习人数：<span class="course_tt">25987人</span></p>
		<p class="courstime">讲师：马老师</p>
		<p class="courstime">课程评价：<img width="71" height="14" src="/static/index/images/evaluate5.png">&nbsp;&nbsp;<span class="hidden-sm hidden-xs">5.0分（10人评价）</span></p>
        <!--<p><a class="state end">完结</a></p>-->      
        <span class="coursebtn"><a class="btnlink" href="{{url('/index/course/coursecont1')}}">加入学习</a><a class="codol fx" href="javascript:void(0);" onClick="$('#bds').toggle();">分享课程</a><a class="codol sc" href="#">收藏课程</a></span> 
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
    <p class="coutex">本课程主要针对重新改版后的新大纲会计从业资格考试的学习，主要为零基础学生顺利通过会计从业考试而设立！内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。 本教程为2014最新版教材课程详细讲解，学完后可以直接考证，也可以提高会计业务基础知识</p>
	<div class="clearh"></div>
	<h3 class="leftit">课程目录</h3>
    <dl class="mulu">
    	<dt><a href="{{url('/index/course/coursecont1')}}" class="graylink">第一章&nbsp;&nbsp;总论</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>
    	<dt><a href="#" class="graylink">第二章&nbsp;&nbsp;会计要素与会计等式</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>   
    	<dt><a href="#" class="graylink">第三章&nbsp;&nbsp;会计科目与账户</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>   
    	<dt><a href="#" class="graylink">第四章&nbsp;&nbsp;会计记账方法</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>
		<dt><a href="#" class="graylink">第五章&nbsp;&nbsp;借贷记账法下主要经济业务的账务处理</a></dt>
        <dd>介绍ISO/OSI七层模型、TCP/IP四层模型、IP地址、DNS、端口、网关等网络知识，为Linux的网络配置打好基础。</dd>
		<dt><a href="#" class="graylink">第六章&nbsp;&nbsp;会计凭证</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>
		<dt><a href="#" class="graylink">第七章&nbsp;&nbsp; 会计账簿</a></dt>
        <dd>介绍ISO/OSI七层模型、TCP/IP四层模型、IP地址、DNS、端口、网关等网络知识，为Linux的网络配置打好基础。</dd>
		<dt><a href="#" class="graylink">第八章&nbsp;&nbsp;账务处理程序</a></dt>
        <dd>介绍ISO/OSI七层模型、TCP/IP四层模型、IP地址、DNS、端口、网关等网络知识，为Linux的网络配置打好基础。</dd>
		<dt><a href="#" class="graylink">第九章&nbsp;&nbsp; 财产清查</a></dt>
        <dd>介绍ISO/OSI七层模型、TCP/IP四层模型、IP地址、DNS、端口、网关等网络知识，为Linux的网络配置打好基础。</dd>
		<dt><a href="#" class="graylink">第十章&nbsp;&nbsp;财务报表</a></dt>
        <dd>内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列。内容包括会计基础、财经法规和职业道德、电算化三科视频课程全系列</dd>
    </dl>
</div>
<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">授课讲师</h3>
    <div class="teacher">
    <div class="teapic ppi">
    <a href="teacher.html" target="_blank"><img src="/static/index/images/teacher.png" width="80" class="teapicy" title="张民智"></a>
    <h3 class="tname"><a href="teacher.html" class="peptitle" target="_blank">张民智</a><p style="font-size:14px;color:#666">会计讲师</p></h3>
    </div>
    <div class="clearh"></div>
    <p>十年以上Linux从业经验， 培训经验超过八年。在各 个知名培训机构做过金牌 讲师、学科负责人，培训 学员过万人。曾获红帽认 证讲师，微软认证讲师等 资质认证。教学以逻辑性 强、教学细致、知识点准 确著称。</p>
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
        <a href="#"  target="_blank"><img src="/static/index/images/c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images/c2.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images/c3.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="peptitle" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    </div>
    </div>
</div> 
</div>
@endsection
=======
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>laravel</title>
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script src="/static/index/js/mine.js"></script>
<script src="/static/index/js/jquery.tabs.js"></script>
        <!-- video.js must be in the <head> for older IEs to work. -->
<link rel="stylesheet" href="/static/index/video-js.css" >
<link rel="stylesheet" href="/static/index/css/course.css"/>
<link rel="stylesheet" href="/static/index/css/tab.css" media="screen">
<script src="/static/index/video.js"></script>
    
      <!-- Unless using the CDN hosted version, update the URL to the Flash SWF -->
      <script>
        videojs.options.flash.swf = "video-js.swf";
        
      </script>
      <script type="text/javascript">
$(function(){

    $('.demo2').Tabs({
        event:'click'
    });
});
</script>
      <style>
      body { overflow:hidden;
             scrollbar-base-color:#fff;
             scrollbar-arrow-color:#fff; /*三角箭头的颜色*/
             scrollbar-face-color: #333; /*立体滚动条的颜色（包括箭头部分的背景色）*/
             scrollbar-3dlight-color: #fff; /*立体滚动条亮边的颜色*/
             scrollbar-highlight-color: #fff; /*滚动条的高亮颜色（左阴影？）*/
             scrollbar-shadow-color: #fff; /*立体滚动条阴影的颜色*/
             scrollbar-darkshadow-color:#fff; /*立体滚动条外阴影的颜色*/
             scrollbar-track-color: #fff; /*立体滚动条背景颜色*/
             
             
            
      }
       /* 设置滚动条的样式 */
            ::-webkit-scrollbar {
                width: 10px;
            }
            /* 滚动槽 */
            ::-webkit-scrollbar-track {
                border-radius:0
            }
            /* 滚动条滑块 */
            ::-webkit-scrollbar-thumb {
                background: #333;
                
            }
            ::-webkit-scrollbar-thumb:window-inactive {
                background: rgba(255,0,0,0.4);
            }
      </style>
</head>

<body>
   <div class="linevideo" style="overflow-x:hidden">
        <span class="returnindex"><a class="gray" href="{{url('/index/course/detail/'.$log->cou_id)}}" style="font-size:14px;">返回课程</a></span>   
        <span class="taskspan"><span class="ts">第{{$log->catalog_chapters}}章</span>&nbsp;&nbsp;<b class="tasktit">{{$log->catalog_name}}</b></span> 
        <div style="width:100%;margin-top:20px;">
            <video width="auto" id="example_video_1" class="video-js vjs-default-skin  vjs-big-play-centered vvi " controls preload="none"  poster="" data-setup="{}"><!--poster是视频未播放前的展示图片-->
            <source src="../../../../../{{$log->video_img}}" type='video/mp4' />
           
            </video>
            <p class="signp"><span class="sign">学过了</span><span class="nextcourse" title="下一课时">∨</span></p>
        </div>       
    </div>    
  <div class="interact">
        <span class="ii" title="展开或收起">></span>
        <div class="clearh"></div>
       
  
          <div class="box1 demo2">
            <ul class="tab_menu vmulu">
                <li class="current">目录</li>
                <li>笔记</li>
                <li>问答</li>
                <li>作业</li>
            </ul>
            <div class="tab_box tabcard">
                <div style="padding-bottom:30px;">
                    <dl class="mulu noo1">
                        @foreach($catalog as $k=>$v)
                        <dt style="width: 200px">第{{$v->catalog_chapters}}章&nbsp;&nbsp;<a style="color: orange;" href="{{url('index/course/log/'.$v->catalog_id)}}">{{$v->catalog_name}}</a></dt>
                        @endforeach
                   </dl>    
                   <div class="clearh"></div>
                </div>
                
                <div class="hide">
                    <div style="padding-left:25px;">
                    <div class="c_eform" style="width:280px;margin-left:10px;">
                        <div class="clearh" ></div>
                        <textarea rows="7" class="pingjia_con" style="width:100%;height:500px;" onblur="if (this.value =='') this.value='记下课程笔记';this.className='pingjia_con'" onclick="if (this.value=='记下课程笔记') this.value='';this.className='pingjia_con_on'">记下课程笔记</textarea>
                       <a href="#" class="fombtn">提交</a>
                       <div class="clearh"></div>
                    </div>                  
                </div>
                </div>
                <div class="hide">
                    <div style="padding-left:15px;">                   
                    <div class="c_eform veform">
                    <div class="clearh" ></div>
                        <input class="inputitle pingjia_con" type="text"  value="请输入问题标题" onblur="if (this.value =='') this.value='请输入问题标题';this.className='inputitle pingjia_con'" onclick="if (this.value=='请输入问题标题') this.value='';this.className='inputitle pingjia_con_on'"/>
                        <textarea rows="7" class="pingjia_con" style="width:90%;"  onblur="if (this.value =='') this.value='请输入问题的详细内容';this.className='pingjia_con'" onclick="if (this.value=='请输入问题的详细内容') this.value='';this.className='pingjia_con_on'"></textarea><br/>
                       <a href="#" class="fombtn" style="margin-right:30px;">发布</a>
                       <div class="clearh"></div>
                    </div>
                    <ul class="evalucourse" style="width:280px;">
                        <li>
                            <p class="vptext"><a target="_blank" class="peptitle" href="#">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>         <p class="peptime pswer"><span style="float:left;"><b class="coclass">候候&nbsp;&nbsp;</b>发表于 2015-05-8 </span><span class="pepask" style="float:right;">回答(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)</span>                    
                            </p>                           
                        </li>
                        <li>
                            <p class="vptext"><a target="_blank" class="peptitle" href="#">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>         <p class="peptime pswer"><span style="float:left;"><b class="coclass">候候&nbsp;&nbsp;</b>发表于 2015-05-8 </span><span class="pepask" style="float:right;">回答(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong style="color:#3eb0e0;"><a href="#" class="bluelink" target="_blank">10</a></strong>)</span>                    
                            </p>                           
                        </li>                       
                    </ul>
                    
                </div>
                </div>
                <div class="hide">
                    <div class="c_eform veform" style="margin-top:15px;margin-left:35px;">
                       <!--四种状态-->
                       <p>此课时暂无作业</p>
                       <p>共4道作业题<a href="homework.html" target="_blank"><span class="star_zy">继续做题</span></a></p>
                       <p>共4道作业题<a href="homework_jiexi.html" target="_blank"><span class="star_zy">查看解析</span></a></p>
                       <p>共4道作业题<a href="homework.html" target="_blank"><span class="star_zy">开始作业</span></a></p>                                 
                </div>
                </div>              
            </div>
        </div> 
    </div>
</body>
</html>
>>>>>>> 59b7486e548a3617cd81d89c0eda62cdd5abf86b
