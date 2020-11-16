@extends('layouts.show')
@section('app.name', '我的详情')
@section('content')
<link rel="stylesheet" href="/static/index/css/member.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<script type="text/javascript">
$(function(){
    $('.demo2').Tabs({
        event:'click'
    });
}); 
</script>
<div class="clearh"></div>
<div class="membertab">
<div class="memblist">
	<div class="membhead">
    <div style="text-align:center;"><img src="/static/index/images/0-0.JPG" width="80" ></div>
    <div style="width:220px;text-align:center;">
    <p class="membUpdate mine">某某某</p> 
    <p class="membUpdate mine"><a href="{{url('/index/mycourse/details')}}">修改信息</a>&nbsp;|&nbsp;<a href="{{url('/index/user/myrepassword')}}">修改密码</a></p>
    <div class="clearh"></div>
    </div>
    </div>
    <div class="memb">
        <ul>
        	<li class="currnav"><a class="mb1" href="">我的课程</a></li>
    		<li><a class="mb3" href="/index/mycourse/question">我的问答</a></li>
    		<li><a class="mb4" href="">我的笔记</a></li>
    		<li><a class="mb12" href="">我的作业</a></li>
            <li><a class="mb2" href="" target="_blank">我的题库</a></li>
       </ul>
    </div>
  </div>
<div class="membcont">
    <h3 class="mem-h3">我的详细信息</h3>
    <div class="box demo2" style="width:820px;">
        <table id="tables_name">
            <tr>
                <td>头像:</td>
                <td>
                    <input type="file" name="u_img" value="" id="hideuimg">
                    <img src="/static/index/images/0-0.JPG" id="heverimg" width="80">
                </td>
            </tr>
            <tr>
                <td>*用户名:</td>
                <td>
                    <input type="text" name="u_name" class="user_name">
                    <p id='p'>*昵称填写须知：与教育或课程冲突的昵称，我们将有可能收回</p>
                </td>
            </tr>
            <tr>
                <td>*性别:</td>
                <td>
                    <input type="radio" name="u_sex" value="1">男
                    <input type="radio" name="u_sex" value="2">女
                </td>
            </tr>
            <tr>
                <td>年龄:</td>
                <td>
                    <input type="text" name="u_age" value="" class="user_desc">
                    <p id='p'>*年龄填写须知：请请填写正确的年龄。</p>
                </td>
            </tr>
            <tr>
                <td>手机号:</td>
                <td>
                    <input type="text" name="u_tel" value="" class="user_desc">
                    <p id='p'>*手机号填写须知：请请填写正确的手机号。</p>
                </td>
            </tr>
            <tr>
                <td>介绍</td>
                <td>
                    <textarea name="u_text" id="u_text" cols="30" rows="10"></textarea>
                    <p id='p'>*介绍填写须知：请请填写正确的介绍。</p>
                </td>
            </tr>
        </table>
	   <div>
            <div id="heage_desc"></div>
            <button id="heage_asc">保存</button>   
       </div>
    <!-- 结束 -->
    </div>
</div>
<div class="clearh"></div>
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