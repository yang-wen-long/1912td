@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="login" style="background:url(../../../../../static/index/images//12.jpg) right center no-repeat #fff">
<h2>登录</h2>
<div>
<div>
    <p class="formrow">
    <label class="control-label">帐号</label>
    <input type="text" name="zh">
    </p>
    <span class="text-danger">请输入Email地址 / 用户昵称</span>
</div>
<div>
    <p class="formrow">
    <label class="control-label" >密码</label>
    <input type="password" name="u_pwd">
    </p>
     
</div>
<div class="loginbtn">
	<label><input type="checkbox"  checked="checked"> <span class="jzmm">记住密码</span> </label>&nbsp;&nbsp;
    <button type="submit" class="uploadbtn ub1">登录</button>
    
</div>
<div class="loginbtn lb">
   <a href="{{url('/index/user/reg')}}" class="link-muted">还没有账号？立即免费注册</a>
   <span>&nbsp;&nbsp;|&nbsp;&nbsp;</span>   
   <a href="forgetpassword.html" class="link-muted">找回密码</a>
</div>
</div>
<div class="hezuologo">
    <span class="hezuo">使用合作网站账号登录</span>
    <div class="hezuoimg">
    <img src="../../../../../static/index/images//hezuoqq.png" class="hzqq" title="QQ" width="40" height="40"/>
    <img src="../../../../../static/index/images//hezuowb.png" class="hzwb" title="微博" width="40" height="40"/>
    </div>
    
  </div>
</div>
<!-- InstanceEndEditable -->
<script src="/layui/layui.js"></script>
 
<script>
      $(document).on('click','button',function(){ 
       var zh = $('[name="zh"]').val();
   
      
       var u_pwd =  $('[name="u_pwd"]').val();

       if(zh==''){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('账号不能为空', {
                        icon: 1,
                        time: 2000,
                        }, function(){
                        //do something
                    });   
                });
           return false;
       }
        var url="/index/user/login_do/"+zh;
       $.ajax({
            url:url,
            type:'post',
            data:{u_pwd:u_pwd},
            dataType: "json",
             success:function(res){
                // console.log(res);
                if(res.code="00000"){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg(res.msg, {
                        icon: 1,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
                    window.location.href=res.url;
                }else{
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg(res.msg, {
                        icon: 5,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
                }
            }
        });
    });  
</script> 
@endsection