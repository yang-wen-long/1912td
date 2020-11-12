@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!--课程选项卡-->
<script type="text/javascript">
function nTabs(thisObj,Num){
    if(thisObj.className == "current")return;
    var tabObj = thisObj.parentNode.id;
    var tabList = document.getElementById(tabObj).getElementsByTagName("li");
    for(i=0; i <tabList.length; i++)
        {
        if (i == Num)
        {
           thisObj.className = "current"; 
           document.getElementById(tabObj+"_Content"+i).style.display = "block";
        }else{
           tabList[i].className = "normal"; 
           document.getElementById(tabObj+"_Content"+i).style.display = "none";
        }
        } 
}
</script>
<div class="content">
<div class="fullwidthbanner-container">
        <div id="revolution-slider" style="max-height:850px !important; ">
            <ul>
                 <li data-transition="fade" data-slotamount="10" data-masterspeed="400" data-thumb="../../../../../../uploads/banner2.jpg">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{$a->silde_log}}" alt="" rotateMatrix.setRotate(-10, rotate); />
                    <!-- /static/index/images-slider/wide2.jpg -->
                    <!-- /static/index/images-slider/thumbs/thumb1.jpg -->
                    <!-- THE CAPTIONS IN THIS SLIDE -->
                    <div class="tp-caption sfl"
                        data-x="-130"
                        data-y="190"
                        data-speed="300"
                        data-start="300"
                        data-easing="easeOutBack">
                        <!-- <img src="/static/index/images-slider/rb.png" alt=""> -->
                    </div>

                    <div class="caption sfb"
                        data-x="10"
                        data-y="300"
                        data-speed="300"
                        data-start="800"
                        data-easing="easeOutExpo">
                        <h2>
                            <span  style="font-size:70px;">教育机构专属的&nbsp;&nbsp;&nbsp;在线教学系统</span>
                        </h2>
                    </div>

                    <div class="tp-caption med-white sfl"
                        data-x="120"
                        data-y="400"
                        data-speed="300"
                        data-start="1000"
                        data-easing="easeOutExpo" style="font-size:40px;">
                        <span>开通账号即可使用&nbsp;&nbsp;&nbsp;满足多种线上教学场景</span>
                    </div>

                    <div class="tp-caption small-white sfr"
                        data-x="300"
                        data-y="500"
                        data-speed="300"
                        data-start="1200"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary" style="background:#58b7ed">了解情况</a>
                    </div>

                    <div class="tp-caption small-white lfb"
                        data-x="600"
                        data-y="500"
                        data-speed="1000"
                        data-start="1400"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary"  style="background:#58b7ed">立即咨询</a>
                    </div>
                </li>

                 <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="/static/index/images-slider/thumbs/thumb1.jpg">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{$b->silde_log}}" alt="" />

                    <!-- THE CAPTIONS IN THIS SLIDE -->
                    <div class="tp-caption sfl"
                        data-x="-130"
                        data-y="190"
                        data-speed="300"
                        data-start="300"
                        data-easing="easeOutBack">
                        <!-- <img src="/static/index/images-slider/rb.png" alt=""> -->
                    </div>

                    <div class="caption sfb"
                        data-x="10"
                        data-y="300"
                        data-speed="300"
                        data-start="800"
                        data-easing="easeOutExpo">
                        <h2>
                            <span  style="font-size:70px;">教育机构专属的&nbsp;&nbsp;&nbsp;在线教学系统</span>
                            
                        </h2>
                    </div>

                    <div class="tp-caption med-white sfl"
                        data-x="120"
                        data-y="400"
                        data-speed="300"
                        data-start="1000"
                        data-easing="easeOutExpo" style="font-size:40px;">
                        <span>开通账号即可使用&nbsp;&nbsp;&nbsp;满足多种线上教学场景</span>
                    </div>

                    <div class="tp-caption small-white sfr"
                        data-x="300"
                        data-y="500"
                        data-speed="300"
                        data-start="1200"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary"  style="background:#58b7ed">了解情况</a>
                    </div>

                    <div class="tp-caption small-white lfb"
                        data-x="600"
                        data-y="500"
                        data-speed="1000"
                        data-start="1400"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary"  style="background:#58b7ed">立即咨询</a>
                    </div>
                </li>

                <li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-thumb="/static/index/images-slider/thumbs/thumb1.jpg">
                    <!--  BACKGROUND IMAGE -->
                    <img src="{{$c->silde_log}}" alt="" />

                    <!-- THE CAPTIONS IN THIS SLIDE -->
                    <div class="tp-caption sfl"
                        data-x="-130"
                        data-y="190"
                        data-speed="300"
                        data-start="300"
                        data-easing="easeOutBack">
                        <!-- <img src="/static/index/images-slider/rb.png" alt=""> -->
                    </div>

                    <div class="caption sfb"
                        data-x="10"
                        data-y="300"
                        data-speed="300"
                        data-start="800"
                        data-easing="easeOutExpo">
                        <h2>
                            <span  style="font-size:70px;">乐拧教育机构专属的&nbsp;&nbsp;&nbsp;在线教学系统</span>
                            
                        </h2>
                    </div>

                    <div class="tp-caption med-white sfl"
                        data-x="120"
                        data-y="400"
                        data-speed="300"
                        data-start="1000"
                        data-easing="easeOutExpo" style="font-size:40px;">
                        <span>开通账号即可使用&nbsp;&nbsp;&nbsp;满足多种线上教学场景</span>
                    </div>

                    <div class="tp-caption small-white sfr"
                        data-x="300"
                        data-y="500"
                        data-speed="300"
                        data-start="1200"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary"  style="background:#58b7ed">快来充钱 </a>
                    </div>

                    <div class="tp-caption small-white lfb"
                        data-x="600"
                        data-y="500"
                        data-speed="1000"
                        data-start="1400"
                        data-easing="easeOutExpo">
                        <a href="{{url('/index/course/courselist')}}" class="btn btn-large btn-primary"  style="background:#58b7ed"> 充八万 </a>
                    </div>
                </li>

            </ul>
        </div>
</div>

<div class="td1">
    <div class="tdcont">
        <span class="tdimg"><img src="/static/index/images/ico4.jpg" width="450"></span>
        <span class="tdtext">
            <h3>完全免费课程</h3>
            <p>精心录制视频课程与讲解，全部课程完全免费。</p><br/>
            <p><a href="{{url('/index/course/courselist')}}" class="btninto">开始学习</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td2">
    <div class="tdcont">
        <span class="tdimg1"><img src="/static/index/images/ico5.jpg" width="500"></span>
        <span class="tdtext1">
            <h3 class="co1">智能评估题库</h3>
            <p>智能能力评估，学员可以通过具体题目，匹配相关知识点,文字解析与视频解析相结合。</p><br/>
            <p><a href="training.html" class="btninto">点击测评</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td1">
    <div class="tdcont np">
        <span class="tdimg" style="margin-top:80px"><img src="/static/index/images/ico6.jpg" width="550"></span>
        <span class="tdtext" style="margin-top:120px">
            <h3 class="co2">智能匹配练习</h3>
            <p class="tex1">跟随视频课程同步练习，紧扣重点难点，点点精通。</p><br/>
            <p><a href="training.html" class="btninto">开始练习</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>
<div class="td2 np">
    <div class="tdcont np">
        <span class="tdimg1 ni"><img src="/static/index/images/ico7.png" width="300"></span>
        <span class="tdtext1" style="margin-top:100px;">
            <h3 class="co3">全天答疑解惑</h3>
            <p class="tex1">谋刻答疑社区，老师学员共同交流，我们的讲师更是倾囊相授，有问必答。</p><br/>
            <p><a href="{{url('/')}}" class="btninto">提问问题</a></p>
        </span>
        <div style="clear:both"></div>
    </div>
</div>

<div class="crdiv">

<div class="course">
    <h2 style="text-align:center; font-weight:normal; font-size:34px">精品课程</h2>
    <div class="clIT技能earh" style="height:20px;"></div>
    
    <div>
        <ul id="myTab3">
            @foreach($course_category as $k=>$a)
            <!-- class="current"  -->
            <li id="calsssdesc" code_id="{{$a->cate_id}}" class="points">{{$a->cate_name}}</li>
            @endforeach
        </ul>
        <div class="clearh"></div>
        <div id="showdesc">
           <ul class='courseul' id='myTab3_Content0' style='display: block;'>
            @foreach($data as $k=>$a)
            <li id="desc_li" class="descname">
                <div class="courselist">
                <a href="{{url('/index/course/coursecont/'.$a->cou_id)}}">
                    <img width="263" style="border-radius:3px 3px 0 0;" src="{{$a->cou_img}}" >
                </a>
                <p class="courTit">{{$a->cou_name}}</p>
                <div class="gray">
                <span>1小时前更新</span>
                <span class="sp1">{{$a->lll}}人学习</span>
                <div style="clear:both"></div>
                </div>
                </div>
           </li>
           @endforeach
           <div class="clearh"></div>
          </ul>               
        </div>
    </div>
    <div class="line no"></div>
</div>
<span class="morecourse"><a href="{{url('/index/course/courselist')}}" class="btnlink">更多课程</a></span>
<script>
    $(document).ready(function(){
        $(".points").click(function(){
            var _this=$(this);
            // $("#calsssdesc").css("points","points current");
            var cate_id = _this.attr("code_id");
            $.ajax({
                url:"/index/points",
                type:'post',
                dataType:'json',
                data:{cate_id:cate_id},
                async:true,
                success:function(index){
                    var data = index.data;
                    var html = "";
                    $.each(data,function(k,v){
                        html+="<li id='desc_li' class='descname'><div class='courselist'><a href='/index/course/coursecont/"+data[k].cou_id+"'><img width='263' style='border-radius:3px 3px 0 0;' src='"+data[k].cou_img+"' ></a><p class='courTit'>"+data[k].cou_name+"</p><div class='gray'><span>1小时前更新</span><span class='sp1'>"+data[k].lll+"人学习</span><div style='clear:both'></div></div></div></li>";
                    });
                    html+="<div class='clearh'></div>";
                    $(".descname").hide();
                    $(".courseul").append(html);
                }
            });
        });
    });
</script>



@endsection