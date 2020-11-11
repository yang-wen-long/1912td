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
        <li class="curr"><a href="{{url('/index/page/feedback')}}" >意见反馈<b></b></a></li>
        <li style="border-radius:0 0 3px 3px "><a href="{{url('/index/page/joinus')}}" >加入我们<b></b></a></li>
    </ul>
    </div>
    <div class="courseright pageright" style="min-height:500px;">
        <h3 class="mem-h3">意见反馈</h3>
        <div class="clearh"></div>
        <table id="tablesdesc">
            <tr>
                <td></td>
                <td><p id='p'>*年龄填写须知：请请填写正确的年龄。</p></td>
            </tr>
            <tr>
                <td>联系电话:</td>
                <td>
                    <input type="text" name="u_tel" value="" class="user_desc">
                </td>
            </tr>
            <tr>
                <td>图片（选项，提供问题图片 请点击图片上传）</td>
                <td>
                    <input type="file" name="u_img" value="" id="hideuimg">
                    <img src="../../../../../static/index/images/0-0.JPG" id="heverimg" width="80">
                </td>
            </tr>
            <tr>
                <td>反馈意见和问题</td>
                <td>
                    <textarea name="u_text" id="u_text" cols="30" rows="10" placeholder="请填写10个字以上的问题描述以便我们提供更好的帮助"></textarea>
                </td>
            </tr>
        </table>
       <div>
            <div id="heage_desc"></div>
            <button id="heage_asc">发送</button>   
       </div>
    </div>
    <div class="clearh"></div>
</div>
</div>
<!-- InstanceEndEditable -->
<script>
    $(document).ready(function(){
        $("#heverimg").click(function(){
            $("#hideuimg").show();
            $("#heverimg").hide();
        });
        $("#heage_asc").click(function(){
            alert("添加");
        });
    });
</script>
@endsection