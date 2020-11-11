@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/register-login.css"/>

<script type="text/javascript">
$(function(){

  $('.demo2').Tabs({
    event:'click'
  });
  $('.demo3').Tabs({
    event:'click'
  });
});
</script>
<div class="coursecont">
<div class="coursepic1">
   <div class="coursetitle1">
    	<h2 class="courseh21">会计财经法规与会计职业道德</h2>
		<div  style="margin-top:-40px;margin-right:25px;float:right;">
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
   <div class="course_img1">
	   <img src="../../../../../static/index/images/c1.jpg" height="140">	   
   </div>
   <div class="course_xq">
       <span class="courstime1"><p>课时<br/><span class="coursxq_num">100课时</span></p></span>
	   <span class="courstime1"><p>学习人数<br/><span class="coursxq_num">25987人</span></p></span>
	   <span class="courstime1"><p style="border:none;">课程时长<br/><span class="coursxq_num">3小时20分</span></p></span>
   </div>
   <div class="course_xq2">
      <a class="course_learn" href="{{url('/index/video/video')}}">开始学习</a>
   </div> 
    <div class="clearh"></div>
</div>

<div class="clearh"></div>
<div class="coursetext">
	<div class="box demo2" style="position:relative">
			<ul class="tab_menu">
				<li class="current course1">章节</li>
				<li class="course1">评价</li>
				<li class="course1">问答</li>
                <li class="course1">资料区</li>
			</ul>
			<!--<a class="fombtn" style=" position:absolute; z-index:3; top:-10px; width:80px; text-align:center;right:0px;" href="#">下载资料包</a>-->
			<div class="tab_box">
				<div>
					<dl class="mulu noo">
					<div>
                        <dt class="mulu_title"><span class="mulu_img"></span>第一章&nbsp;&nbsp;总论
						<span class="mulu_zd">+</span></dt>
						<div class="mulu_con">
							<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计的概念与目标</strong></dd>
							<a href="video.html"><dd><strong class="cataloglink">课时1：会计的概念与目标1</strong><i class="fini nn"></i></dd></a>
							<a href="video.html"><dd><strong class="cataloglink">课时2：会计的概念与目标2</strong><i class="fini fn"></i></dd></a>
							<dd class="smalltitle"><strong>第二节&nbsp;&nbsp;会计的职能与方法</strong></dd>
							<a href="video.html"><dd><strong class="cataloglink">课时1：会计的职能与方法1</strong><i class="fini nn"></i></dd></a>
							<a href="video.html"><dd><strong class="cataloglink">课时2：会计的职能与方法2</strong><i class="fini fn"></i></dd></a>
							<a href="video.html"><dd><strong class="cataloglink">课时1：会计的职能与方法3</strong><i class="fini ff"></i></dd></a>
						</div>
					</div>
					<div>
                        <dt class="mulu_title"><span class="mulu_img"></span>第二章&nbsp;&nbsp;会计要素与会计等式
						<span class="mulu_zd">+</span></dt>
						<div class="mulu_con">
							<dd class="smalltitle"><strong>第一节&nbsp;&nbsp;会计要素</strong></dd>
							<a href="video.html"><dd><strong class="cataloglink">课时1：会计要素与会计等式1</strong><i class="fini nn"></i></dd></a>
							<a href="video.html"><dd><strong class="cataloglink">课时2：会计要素与会计等式2</strong><i class="fini nn"></i></dd></a>
						</div>
					</div>
                   </dl>                   
				</div>
				<div class="hide">
					<div>
                    <div id="star">
                        <span class="startitle">请打分</span>
                        <ul>
                            <li><a href="javascript:;">1</a></li>
                            <li><a href="javascript:;">2</a></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">4</a></li>
                            <li><a href="javascript:;">5</a></li>
                        </ul>
                        <span></span>
                        <p></p>
	                  </div>
                    <div class="c_eform">                      
                        <textarea rows="7" class="pingjia_con" onblur="if (this.value =='') this.value='评价详细内容';this.className='pingjia_con'" onclick="if (this.value=='评价详细内容') this.value='';this.className='pingjia_con_on'">评价详细内容</textarea>
                       <a href="#" class="fombtn">发布评论</a>
                       <div class="clearh"></div>
                    </div>
					<ul class="evalucourse">
                    	<li>
                        	<span class="pephead"><img src="../../../../../static/index/images/0-0.JPG" width="50" title="候候">
                            <p class="pepname">候候候候</p>                           
                            </span>
                            <span class="pepcont"><p>2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013试真3年国家公。</p>
                            <p class="peptime pswer">2015-01-02</p></span>
                        </li>
                        <li>
                        	<span class="pephead"><img src="../../../../../static/index/images/0-0.JPG" width="50" title="候候">
                            <p class="pepname">候候15kpiii</p>                           
                            </span>
                            <span class="pepcont"><p>2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公。</p>
                            <p class="peptime pswer">2015-01-02</p></span>
                        </li>
                    </ul>
				</div>
				</div>
                <div class="hide">
					<div>
                     <h3 class="pingjia">提问题</h3>
                    <div class="c_eform">
                        <input type="text" class="pingjia_con" value="请输入问题标题" onblur="if (this.value =='') this.value='请输入问题标题';this.className='pingjia_con'" onclick="if (this.value=='请输入问题标题') this.value='';this.className='pingjia_con_on'"/><br/>
                        <textarea rows="7" class="pingjia_con" onblur="if (this.value =='') this.value='请输入问题的详细内容';this.className='pingjia_con'" onclick="if (this.value=='请输入问题的详细内容') this.value='';this.className='pingjia_con_on'">请输入问题的详细内容</textarea>
                       <a href="#" class="fombtn">发布</a>
                       <div class="clearh"></div>
                    </div>
					<ul class="evalucourse">
                    	<li>
                        	<span class="pephead"><img src="../../../../../static/index/images/0-0.JPG" width="50" title="候候">
							<p class="pepname">候候</p>                             
                            </span>
                            <span class="pepcont">
                            <p><a href="#" class="peptitle" target="_blank">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>
                            <p class="peptime pswer"><span class="pepask">回答(<strong><a class="bluelink" href="#">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong><a class="bluelink" href="#">10</a></strong>)</span>2015-01-02</p>                        
                            </span>
                        </li>
                        <li>
                        	<span class="pephead"><img src="../../../../../static/index/images/0-0.JPG" width="50" title="候候">
							<p class="pepname">候候</p>                             
                            </span>
                            <span class="pepcont">
							<p><a href="#" class="peptitle" target="_blank">2013年国家公务员考试真题2013年国家公务员考试真题2013年国家公务员考试真题2013年?</a></p>
                            <p class="peptime pswer"><span class="pepask">回答(<strong><a class="bluelink" href="#">10</a></strong>)&nbsp;&nbsp;&nbsp;&nbsp;浏览(<strong><a class="bluelink" href="#">10</a></strong>)</span>2015-01-02</p>                              
                            </span>
                        </li>                                 
                    </ul>
                    
				</div>
				</div>
				<div class="hide">
					<div>
					<ul class="notelist" >
       <li>
	   <p class="mbm mem_not"><a href="#" class="peptitle">1.rar</a></p>
       		<p class="gray"><b class="coclass">课时：<a href="#" target="_blank">会计的概念与目标1</a></b><b class="cotime">上传时间：<b class="coclass" >2015-05-8</b></b></p>
            
       </li>  
       <li>
	   <p class="mbm mem_not"><a href="#" class="peptitle">资料.rar</a></p>
       		<p class="gray"><b class="coclass">课时：<a href="#" target="_blank">会计的概念与目标2</a></b><b class="cotime">上传时间：<b class="coclass" >2015-05-8</b></b></p>
            
       		
            
       </li>                      
  </ul>
                    
				</div>
				</div>
				
			</div>
		</div>
   
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">授课讲师</h3>
    <div class="teacher">
    <div class="teapic ppi">
    <a href="teacher.html" target="_blank"><img src="../../../../../static/index/images/teacher.png" width="80" class="teapicy" title="张民智"></a>
     <h3 class="tname"><a href="teacher.html" class="peptitle" target="_blank">张民智</a><p style="font-size:14px;color:#666">会计讲师</p></h3>
    </div>
    <div class="clearh"></div>
    <p>十年以上Linux从业经验， 培训经验超过八年。在各 个知名培训机构做过金牌 讲师、学科负责人，培训 学员过万人。曾获红帽认 证讲师，微软认证讲师等 资质认证。教学以逻辑性 强、教学细致、知识点准 确著称。</p>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit" onclick="reglog_open();">最新学员</h3>
        <div class="teacher zxxy">
        <ul class="stuul">
            <li><img src="../../../../../static/index/images/0-0.JPG" width="60" title="张三李四"><p class="stuname">张三李四</p></li>
            <li><img src="../../../../../static/index/images/0-0.JPG" width="60" title="张三李四"><p class="stuname">张三李四</p></li>
            <li><img src="../../../../../static/index/images/0-0.JPG" width="60" title="张三李四"><p class="stuname">张三李四</p></li>
            <li><img src="../../../../../static/index/images/0-0.JPG" width="60" title="张三李四"><p class="stuname">张三李四</p></li>
        </ul>
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

<div class="clearh"></div>
</div>
</div>
@endsection