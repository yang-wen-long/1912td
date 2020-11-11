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
    <input type="text" id="user_email"></p>
    <span class="text-danger">请输入邮箱地址</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">昵称</label>
    <input type="text" id="user_name"></p>
    <span class="text-danger">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">密码</label>
    <input type="password" id="user_pwd"></p>
    <span class="text-danger">5-20位英文、数字、符号，区分大小写</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label" for="register_email">确认密码</label>
    <input type="password" id="user_pwdd"></p>
    <span class="text-danger">再输入一次密码</span>
    </div>
    <div class="loginbtn reg">
    <button type="submit" class="uploadbtn ub1">注册</button>
    </div>

</form>
</div>
<!-- InstanceEndEditable -->
@endsection

<script src="/jquery.js"></script>
<script src="/layui/layui.js"></script>

<script>
      $(document).on('click','button',function(){
       var user_email = $('#user_email').val();
       var user_name = $("#user_name").val();
       var user_pwd  =  $("#user_pwd").val();
       var user_pwdd = $("#user_pwdd").val();

       if(user_name==''){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('昵称不能为空', {
                        icon: 5,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
           return false;
       }

       if(user_pwd !== user_pwdd){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('两次输入的密码不一致', {
                        icon: 5,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
           return false;
       }

       // return false;
       $.ajax({
            url:"{{url('/index/user/reg')}}",
            type:'post',
            data:{user_email:user_email,user_name:user_name,user_pwd,user_pwd},
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