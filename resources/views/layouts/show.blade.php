<!doctype html>
<html><!-- InstanceBegin template="/Templates/dwt.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="utf-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title>{{config('app.name', 'Laravel') }}</title>
@php $name = Route::currentRouteName();@endphp
@if(!$name == "informationlist" || $name=="courselist")
<link rel="stylesheet" href="/static/index/css/course.css"/>
<link rel="stylesheet" href="/static/index/css/tab.css" media="screen">
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script src="/static/index/js/jquery.tabs.js"></script>
<script src="/static/index/js/mine.js"></script>
@endif
@if($name == "index")
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="/static/index/js/rev-setting-1.js"></script>
<script type="text/javascript" src="/static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" href="/static/index/css/style.css"/>
<link rel="stylesheet" href="/static/index/css/tab.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/index/css/main.css" id="main-css">
@endif
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->

<!-- <script src="../../../../../jquery.js"></script> -->
<script type="text/javascript" src="/static/index/js/rev-setting-1.js"></script>
<script type="text/javascript" src="/static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<link rel="stylesheet" type="text/css" href="/static/index/css/main.css" id="main-css">
</head>

<body>

<div class="head" id="fixed">
  <div class="nav">
      <span class="navimg"><a href="{{url('/')}}"><img border="0" src="/static/index/images/logo.png"></a></span>
        <ul class="nag" id="hidedesc">
          <!-- current -->
            @foreach($nav as $k=>$a)
            <li><a href="{{$a->nav_url}}" class="link1">{{$a->nav_name}}</a></li>
            @endforeach
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
          @php $name = Route::currentRouteName(); $user= Request()->session()->get('userinfo');@endphp
          @if(empty($user))
 
            <a href="{{url('/index/user/login')}}" class="link2 he">登录</a>
            <a href="{{url('/index/user/reg')}}" class="link2 he">注册</a>
            
          @else
              
              <a>欢迎@php echo $user['u_name']; @endphp登陆</a> 
              <a href="{{url('/index/mycourse/mycourse')}}" style="width:70px">个人中心</a>
              <a href="{{url('/index/user/quit')}}">退出</a>

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
           <span>关注微信</span><img width="95" alt="" src="/static/index/images/IMG_20201109_164403.jpg">
       </div>
           <div>
               <span>关注微博</span><img width="95" alt="" src="/static/index/images/weibo.gif">
       </div>               
      </div>
      <div class="fmenu">
       <p><a href="{{url('/index/page/page')}}">关于我们</a> | <a href="{{url('/index/page/page_contact')}}">联系我们</a> | 
          <a href="{{url('/index/teacher/teacherlist')}}">优秀讲师</a> | <a href="{{url('/index/page/help_center')}}">帮助中心</a> | <a href="http://www.plaso.cn/">意见反馈</a> | 
          <a href="http://www.plaso.cn/?page_id=2488&kid=118">加入我们</a></p>
      </div>
      <div class="copyright">
        <div>伯索云学堂-老师版:&nbsp;晋ICP备12006957号</div>
      </div>                                    
    </div>
</div>

<!--右侧浮动-->
<div class="rmbar">
    <span class="barico qq" style="position:relative">
    <div  class="showqq">
       <p>官方客服QQ:<br>448567421</p>
    </div>
    </span><!--//static/index/images/mmqrcode1585737410500.png -->
    <span class="barico em" style="position:relative">
      <img src="/static/index/images/IMG_20201109_164403.jpg" width="75" class="showem">
    </span>
    <span class="barico wb" style="position:relative">
      <img src="/static/index/images/weibo.gif" width="75" class="showwb">
    </span> 
    <span class="barico top" id="top">置顶</span> 
</div>

</body>
</html>
  <style>
    #heage_desc{
        width:820px;
        height:1px;
        background:#6d6d6d;
        margin-top: 51px;
    }
    #heage_asc{
        background:#ffdd62;
        font-size:25px;
        color:#fff;
        margin-top: 15px;
        margin-left: 150px;
        border:1px #cc9e9e solid;
    }
    #tables_name{
        width:710px;
        height:600px;
        margin-left:48px;
         /*border:1px red solid;*/
    }
    .user_name{
        width:290px;
        height:40px;
    }
    .user_desc{
        width:290px;
        height:40px;
        /*onmouseover:red;*/
    }
    #p{
        color:red;
    }
    #u_text{
        width:290px;
        height:100px; 
    }
    #hideuimg{
      display:none;
    }
    #tablesdesc{
        width:710px;
        height:400px;
        margin-left:48px;
    }
</style>
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