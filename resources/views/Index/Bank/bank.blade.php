@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="/static/index/css/article.css">
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script src="/static/index/js/mine.js"></script>
<script type="text/javascript" src="/static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<h3 class="righttit">全部数据</h3>
    <div class="clearh"></div>
    <span class="bread nob">
        <a class="fombtn cur" href="{{url('/index/article/articlelist')}}">全部数据</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">热门题选</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">填空题</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">选择题</a>
    </span>
   
</div>
<div class="clearh"></div>
<div class="coursetext">
    @foreach($data as $k=>$v)
	<div class="articlelist">
    	<h3><a class="artlink" href="">{{$v->bank_name}}</a></h3>
        <p>{{$v->bank_text}}</p>
        <p class="artilabel">
        <span class="ask_label">{{$v->bank_type==1?'单选题':'多选题'}}</span>
        <b class="labtime">{{date('Y-m-d H:i:s',$v->bank_time)}}</b>
        </p>
        <div class="clearh"></div>
    </div>
    @endforeach
    
    
    
	<div class="clearh" style="height:20px;"></div>
	<span class="pagejump">
    	<p class="userpager-list">
       	  {{$data->links()}}
        </p>
    </span>
    <div class="clearh" style="height:10px;"></div>
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门课程</h3>
    <div class="gonggao">
	<ul class="hotask">
        @foreach($course_data as $k=>$v)
        	<li><a class="ask_link cou_detail" href="JavaScript:;" cou_id="{{$v->cou_id}}"><strong>●</strong>{{$v->cou_name}}</a></li>
             @endforeach
        </ul>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">推荐课程</h3>
    <div class="teacher">
        @foreach($course_tj as $k=>$v)
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images/c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="JavaScript:;" class="ask_link cou_detail" cou_id="{{$v->cou_id}}">{{$v->cou_name}}</a></h3>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>

    <div class="clearh"></div> @endforeach
    </div>  

    </div>
</div>
   
</div>



<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->
<script src="/layui/layui.js"></script>
<script>
  $(".cou_detail").click(function(){
     var _this = $(this);
    var cou_id = _this.attr("cou_id");
    layui.use('layer', function(){
    var layer = layui.layer;
        layer.confirm('is not?', {icon: 4, title:'提示'}, function(index){
        layer.close(index);
        });
        //eg2
        layer.confirm('是否进入详情?', function(index){
          var url = "/index/course/detail/"+cou_id;
          location.href=url;
          layer.close(index);
        });
    });
}); 
</script>
@endsection