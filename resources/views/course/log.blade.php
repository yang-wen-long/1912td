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
