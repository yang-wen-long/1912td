@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
    <div class="courseleft">
    <ul class="courseul pageul">
        <li style="border-radius:3px 3px 0 0"><a href="{{url('/index/page/page')}}">关于我们<b></b></a></li>
        <li class="curr"><a href="{{url('/index/page/page_contact')}}" >联系我们<b></b></a></li>
        <li><a href="{{url('/index/page/help_center')}}" >帮助中心<b></b></a></li>
        <li><a href="{{url('/index/page/feedback')}}" >意见反馈<b></b></a></li>
        <li style="border-radius:0 0 3px 3px "><a href="{{url('/index/page/joinus')}}" >加入我们<b></b></a></li>
    </ul>
    </div>
    <div class="courseright pageright" style="min-height:500px;">
        <h3 class="mem-h3">联系我们</h3>
        <div class="clearh"></div>
        <div class="pagetext">
            <span class="pagemap">
                <img src="../../../../../static/index/images/map.jpg" width="400"> 
            </span>
            <span class="contact">
                <p><strong>咨询热线</strong>：400-803-5080</p>
                <p><strong>客服QQ</strong>：2977138424</p>
                <p><strong>公司地址</strong>：山西省太原市高新开发区体育路南内环街口数码港A座4层</p>
            </span>
        </div>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->
@endsection