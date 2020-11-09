<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>{{config('app.name', 'Laravel') }}</title>
@php $name = Route::currentRouteName();@endphp
@if(!$name == "articlelist" || $name=="courselist")
<link rel="stylesheet" href="../../../../../static/index/css/course.css"/>
<link rel="stylesheet" href="../../../../../static/index/css/tab.css" media="screen">
<script src="../../../../../static/index/js/jquery-1.8.0.min.js"></script>
<script src="../../../../../static/index/js/jquery.tabs.js"></script>
<script src="../../../../../static/index/js/mine.js"></script>
@endif
@if($name == "index")
<script src="../../../../static/index/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../../../../static/index/js/rev-setting-1.js"></script>
<script type="text/javascript" src="../../../static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" href="../../../../static/index/css/style.css"/>
<link rel="stylesheet" href="../../../../static/index/css/tab.css" media="screen">
<link rel="stylesheet" type="text/css" href="../../../../static/index/css/main.css" id="main-css">
@endif
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->





<script src="../../../../../jquery.js"></script>
<script type="text/javascript" src="../../../../../static/index/js/rev-setting-1.js"></script>
<script type="text/javascript" src="../../../static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../../static/index/css/main.css" id="main-css">

</head>

<body>

<div class="head" id="fixed">
  <div class="nav">
      <span class="navimg"><a href="{{url('/')}}"><img border="0" src="../../../../../static/index/images/logo.png"></a></span>
        <ul class="nag">
          <li><a href="{{url('/index/course/courselist')}}" class="link1 current">课程</a></li>
            <li><a href="{{url('/index/article/articlelist')}}" class="link1">资讯</a></li>
            <li><a href="{{url('/index/teacher/teacherlist')}}" class="link1">讲师</a></li>
            <li><a href="" class="link1">题库</a></li>
            <li><a href="{{url('/index/page/page')}}" class="link1" >关于</a></li>
            
        </ul>
        <span class="massage">
            <!--<span class="select">
          <a href="#" class="sort">课程</a>
          <input type="text" value="关键字"/>
            <a href="#" class="sellink"></a>
            <span class="sortext">
              <p>课程</p>
                <p>题库</p>
                <p>讲师</p>
            </span>
        </span>-->
          @php $name = Route::currentRouteName();@endphp
            @if($name == "courselist")
            <a href="{{url('/index/user/login')}}" class="link2 he">登录</a>
            <a href="{{url('/index/user/reg')}}" class="link2 he">注册</a>
            <a href="{{url('/index/mycourse/mycourse')}}" style="width:70px" class="link2 he ico">个人中心</a>
          @elseif($name == "index")
            <a href="{{url('/index/mycourse/mycourse')}}"  onMouseOver="logmine()" style="width:70px" class="link2 he ico">sherley</a>
            <span id="lne" style="display:none" onMouseOut="logclose()" onMouseOver="logmine()">
                <span style="background:#fff;">
                    <a href="{{url('/index/mycourse/mycourse')}}" style="width:70px; display:block;" class="link2 he ico">sherley</a>
                </span>
                <div class="clearh"></div>
                <ul class="logmine" >
                    <!-- <li><a class="link1" href="#">我的课程</a></li>
                    <li><a class="link1" href="#">我的题库</a></li>
                    <li><a class="link1" href="#">我的问答</a></li>
                    <li><a class="link1" href="#">退出</a></li> -->
                    <li><a href="{{url('/index/user/login')}}" class="link1">登录</a></li>
                </ul>
            </span>
          @else
              <span class="exambtn_lore">
                   <a class="tkbtn tklog" href="{{url('/index/user/login')}}">登录</a>
                   <a class="tkbtn tkreg" href="{{url('/index/user/reg')}}">注册</a>
              </span>
          @endif
        </span>
    </div>
</div>


  @yield('content')




<!-- 尾部 -->
<div class="clearh"></div>
<div class="foot">
<div class="fcontainer">
      <div class="fwxwb"> 
         <div class="fwxwb_1">
           <span>关注微信</span><img width="95" alt="" src="../../../../../static/index/images/num.png">
       </div>
           <div>
               <span>关注微博</span><img width="95" alt="" src="../../../../../static/index/images/wb.png">
       </div>               
      </div>
      <div class="fmenu">
       <p><a href="#">关于我们</a> | <a href="#">联系我们</a> | <a href="#">优秀讲师</a> | <a href="#">帮助中心</a> | <a href="#">意见反馈</a> | <a href="#">加入我们</a></p>
      </div>
      <div class="copyright">      
        <div><a href="/">谋刻网</a>所有&nbsp;晋ICP备12006957号-9</div>
      </div>
    </div>
</div>

<!--右侧浮动-->
<div class="rmbar">
    <span class="barico qq" style="position:relative">
    <div  class="showqq">
       <p>官方客服QQ:<br>2382662404</p>
    </div>
    </span><!--/../../../../../static/index/images/mmqrcode1585737410500.png -->
    <span class="barico em" style="position:relative">
      <img src="../../../../static/index/images/IMG_20201109_164403.jpg" width="75" class="showem">
    </span>
    <span class="barico wb" style="position:relative">
      <img src="../../../../static/index/images/weibo.gif" width="75" class="showwb">
    </span> 
    <span class="barico top" id="top">置顶</span> 
</div>

</body>
</html>
<script>
function logmine(){
    document.getElementById("lne").style.display="block";
}
function logclose(){
    document.getElementById("lne").style.display="none";    
}

 /*右侧客服飘窗*/
    $(".label_pa li").click(function() {
        $(this).siblings("li").find("span").css("background-color", "#fff").css("color", "#666");
        $(this).find("span").css("background", "#fb5e55").css("color", "#fff");
    });
    $(".em").hover(function() {
        $(".showem").toggle();
    });
    $(".qq").hover(function() {
        $(".showqq").toggle();
    });
    $(".wb").hover(function() {
        $(".showwb").toggle();
    });
    $("#top").click(function() {
        if (scroll == "off") return;
        $("html,body").animate({
            scrollTop: 0
        },
        600);
    });
    $(".nag").click(function(){
        $(".nag").find("li").find("a").css("link1 current");
    });
</script>