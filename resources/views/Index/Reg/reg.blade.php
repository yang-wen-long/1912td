@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="../../../../../static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(../../../../../static/index/images//13.jpg) right center no-repeat #fff">
<h2>注册</h2>
<form>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">邮箱地址</label>
    <input type="text"></p>
    <span class="text-danger">请输入邮箱地址</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">昵称</label>
    <input type="text"></p>
    <span class="text-danger">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">密码</label>
    <input type="password"></p>
    <span class="text-danger">5-20位英文、数字、符号，区分大小写</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">确认密码</label>
    <input type="password"></p>
    <span class="text-danger">再输入一次密码</span>
    </div>
    <div class="loginbtn reg">
    <button type="submit" class="uploadbtn ub1">注册</button>
    </div>

</form>
</div>
<!-- InstanceEndEditable -->


@endsection