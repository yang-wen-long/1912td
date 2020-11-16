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
                <li value="{{$v->cate_id}}" class='ss'>{{$v->cate_name}}</a></li>
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
            <a href="{{url('/index/course/detail/'.$v->cou_id)}}" target="_blank">
            <img style="border-radius:3px 3px 0 0;" width="240" src="../../{{$v->cou_img}}" title="会计基础"></a>
            <p class="courTit"><a href="{{url('/index/course/detail/'.$v->cou_id)}}" target="_blank">{{$v->cou_name}}</a></p>
            <div class="gray">
            <span>添加时间：{{date('Y-m-d H:i:s',$v->cou_time)}}</span>
            <br>
            <span class="sp1">{{$v->lll}}人学习</span>
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

