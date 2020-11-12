@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<div class="coursecont">
    <div class="courseleft">
	<span class="select">     	
      <input type="text" value="请输入关键字" class="pingjia_con"/>
      <a href="#" class="sellink"></a>        
    </span>
    
    <ul class="courseul">
    <li class="curr" style="border-radius:3px 3px 0 0;background:#fb5e55;"><h3 style="color:#fff;"><a href="#" class="whitea">全部课程</a></h3>
    <li>
    <h4>计算机</h4>
        <ul class="sortul">
            @foreach($data as $v)
                <li><a href="/index/course/coursecont">{{$v->cate_name}}</a></li>
            @endforeach
        </ul>
    <div class="clearh"></div>
    </li>
    
    
    </ul>
    <div style="height:20px;border-radius:0 0 5px 5px; background:#fff;box-shadow:0 2px 4px rgba(0, 0, 0, 0.1)"></div>
    </div>
    
    <div class="courseright">
        <div class="clearh"></div>
      <ul class="courseulr">
        @foreach($course as $k=>$v)
        <li>
        	<div class="courselist">
<<<<<<< HEAD
            <a href="{{url('/index/course/coursecont')}}" target="_blank">
            <img style="border-radius:3px 3px 0 0;" width="240" src="../../{{$v->cou_img}}" title="会计基础"></a>
            <p class="courTit"><a href="{{url('/index/course/coursecont')}}" target="_blank">{{$v->cou_name}}</a></p>
            <div class="gray">
            <span>添加时间：{{date('Y-m-d H:i:s',$v->cou_time)}}</span>
            <br>
            <span class="sp1">{{$v->lll}}人学习</span>
=======
            <a href="{{url('/index/course/coursecont')}}" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c1.jpg" title="会计基础"></a>
            <p class="courTit"><a href="{{url('/index/course/coursecont')}}" target="_blank">会计基础</a></p>
            <div class="gray">
            <span>30课时 600分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
        <li>
        	<div class="courselist">
            <a href="{{url('/index/course/coursecont')}}" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c2.jpg" title="会计基础"></a>
            <p class="courTit"><a href="{{url('/index/course/coursecont')}}" target="_blank">HTTP下载课程</a></p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
        </li>
        <li>
        	<div class="courselist">
            <a href="{{url('/index/course/coursecont')}}" target="_blank"><img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c3.jpg" title="会计基础"></a>
            <p class="courTit"><a href="{{url('/index/course/coursecont')}}" target="_blank">HTTP下载课程</a></p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c4.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c5.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c6.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c7.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c8.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       <li>
        	<div class="courselist">
            <img style="border-radius:3px 3px 0 0;" width="240" src="/static/index/images/c9.jpg" >
            <p class="courTit">HTTP下载课程</p>
            <div class="gray">
            <span>5课时 60分钟</span>
            <span class="sp1">1255555人学习</span>
>>>>>>> 015238c756acd50f02e2751caa9ce4bc51f2185e
            <div style="clear:both"></div>
            </div>
            </div>
       </li>
       @endforeach

    </ul>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->
@endsection

