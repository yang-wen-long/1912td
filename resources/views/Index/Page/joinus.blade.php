@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
    <div class="courseleft">
    <ul class="courseul pageul">
        <li style="border-radius:3px 3px 0 0"><a href="{{url('/index/page/page')}}">关于我们<b></b></a></li>
        <li><a href="{{url('/index/page/page_contact')}}" >联系我们<b></b></a></li>
        <li><a href="{{url('/index/page/help_center')}}" >帮助中心<b></b></a></li>
        <li><a href="{{url('/index/page/feedback')}}" >意见反馈<b></b></a></li>
        <li class="curr" style="border-radius:0 0 3px 3px "><a href="{{url('/index/page/joinus')}}" >加入我们<b></b></a></li>
        
    </ul>
    </div>
    <div class="courseright pageright" style="min-height:500px;">
        <h3 class="mem-h3">帮助中心</h3>
        <div class="clearh"></div>
        <div class="pagetext">
            <span class="pagemap">
                <embed src="../../../../../../uploads/mp3/8a583derj4jh344c9a184fd011.mp4" type='' width="740px" height="400px" preload="none">
            </span>
        </div>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->
@endsection