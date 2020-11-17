 @extends('layouts.show')
@section('app.name', '课程')
@section('content')
<div class="coursecont">
    <div class="courseleft">
	<span class="select">     	
      <input type="text" value="" name="keyword" placeholder="请输入关键字" class="pingjia_con"/>
      <a href="javascript:;" class="sellink"></a>        
    </span>
    
 
    <ul class="courseul">
    <li class="curr" style="border-radius:3px 3px 0 0;background:#fb5e55;"><h3 style="color:#fff;"><a href="javascript:;" class="whitea">全部课程</a></h3>
    @foreach($topcss as $k=>$a)
    <li>
        <h4>{{$a->cate_name}}</h4>
        @foreach($css as $n=>$v)
            @if($a->cate_id==$v->parents_id)
            <ul class="sortul">
                    <li><a href="javascript:;" class="cate" cate_id="{{$v->cate_id}}">{{$v->cate_name}}</a></li>
            </ul>
            @endif
        @endforeach
    <div class="clearh"></div>
    </li>
    @endforeach
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
<script src="../../layui/layui.js"></script>
<script>
    $(document).ready(function(){
        //无限极分类
        $(".cate").click(function(){
            var _this = $(this);
            var cate_id = _this.attr("cate_id");
            var url = "/index/course/Asubclass";
            $.ajax({
                url:url,
                dataType:'json',
                type:'post',
                data:{cate_id:cate_id},
                async:true,
                success:function(index){
                    if(index.error==0){
                        var data = index.data;
                        var html = "";
                        $.each(data,function(k,v){
                            html+="<li id='desc_li' class='descname'><div class='courselist'><a href='/index/course/coursecont/"+data[k].cou_id+"'><img width='263' style='border-radius:3px 3px 0 0;' src='../../../"+data[k].cou_img+"' ></a><p class='courTit'>"+data[k].cou_name+"</p><div class='gray'><span>1小时前更新</span><span class='sp1'>"+data[k].lll+"人学习</span><div style='clear:both'></div></div></div></li>";
                        });
                        $(".courseulr").children("li").hide();
                        $(".courseulr").append(html);
                    }else{
                        layui.use('layer', function(){
                            var layer = layui.layer;
                            //提示层
                            layer.msg(index.msg);
                        });
                    }
                }
            });
        });
        //搜索
        $(".sellink").click(function(){
            var keyword = $(".pingjia_con").val();
            if(keyword==''){
                layui.use('layer', function(){
                    var layer = layui.layer;
                        //提示层
                        layer.msg("请填写需要的参数");
                });
                return false;
            }
            var url = "/index/course/Asubclass";
            $.ajax({
                url:url,
                dataType:'json',
                type:'get',
                data:{keyword:keyword},
                async:true,
                success:function(index){
                    if(index.error==0){
                        var data = index.data;
                        var html = "";
                        $.each(data,function(k,v){
                            html+="<li id='desc_li' class='descname'><div class='courselist'><a href='/index/course/coursecont/"+data[k].cou_id+"'><img width='263' style='border-radius:3px 3px 0 0;' src='../../../"+data[k].cou_img+"' ></a><p class='courTit'>"+data[k].cou_name+"</p><div class='gray'><span>1小时前更新</span><span class='sp1'>"+data[k].lll+"人学习</span><div style='clear:both'></div></div></div></li>";
                        });
                        $(".courseulr").children("li").hide();
                        $(".courseulr").append(html);
                    }else{
                        layui.use('layer', function(){
                            var layer = layui.layer;
                            //提示层
                            layer.msg(index.msg);
                        });
                    }
                }
            });
        });
    });
</script>
@endsection