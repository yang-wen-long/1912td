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
    <p class="membUpdate mine">{{$userinfo->u_name}}</p> 
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
                <td>*当前登陆:</td>
                <td>{{$userinfo->u_name}}
                </td>
            </tr>
            <tr>
                <td>密保一：</td>
                <td>
                    <input type="text" name="wt_1" value="" class="user_desc">
                    <p id='p'>*你的父亲叫什么名字</p>
                </td>
            </tr>
            <tr>
                <td>密保二：</td>
                <td>
                    <input type="text" name="wt_2" value="" class="user_desc">
                    <p id='p'>*你的母亲叫什么名字</p>
                </td>
            </tr>
            <tr>
                <td>密保三：</td>
                <td>
                    <input type="text" name="wt_3" value="" class="user_desc">
                    <p id='p'>*你的母校叫什么</p>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button style="color: orange; width: 50px; height: 30px;">保存</button></td>
           </tr>
        </table>

    <!-- 结束 -->
    </div>
</div>
<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->
 
   
<script>
 $(document).on('click','button',function () {     
        var wt_1 = $('[name="wt_1"]').val();
        var wt_2 = $('[name="wt_2"]').val();
        var wt_3 = $("[name='wt_3']").val(); 
       $.ajax({
            url:'/index/mycourse/mbdo',
            type:'post',
            data:{wt_1:wt_1,wt_2:wt_2,wt_3:wt_3},
            dataType:'json',
                type:'post',
                success:function (res) {
                    if (res.code=="00000"){
                        alert(res.msg);
                        location.href="/index/mycourse/mycourse"
                    }else{
                        alert(res.msg);
                    }
                }
            })
        })
 
</script>
@endsection