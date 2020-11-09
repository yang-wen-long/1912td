@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="login" style="background:url(../../../../../static/index/images//12.jpg) right center no-repeat #fff">
<h2>登录</h2>
<form style="width:600px">
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">帐号</label>
    <input type="text">
    </p>
    <span class="text-danger">请输入Email地址 / 用户昵称</span>
</div>
<div>
    <p class="formrow">
    <label class="control-label" for="register_email">密码</label>
    <input type="password">
    </p>
    <p class="help-block"><span class="text-danger">密码错误</span></p>
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
</form>
<div class="hezuologo">
    <span class="hezuo">使用合作网站账号登录</span>
    <div class="hezuoimg">
    <img src="../../../../../static/index/images//hezuoqq.png" class="hzqq" title="QQ" width="40" height="40"/>
    <img src="../../../../../static/index/images//hezuowb.png" class="hzwb" title="微博" width="40" height="40"/>
    </div>
    
  </div>
</div>
<!-- InstanceEndEditable -->

@endsection