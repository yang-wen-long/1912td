@extends('layouts.show')
@section('app.name', '课程')
@section('content')

<link rel="stylesheet" href="/static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/static/index/images/13.jpg) right center no-repeat #fff">
<h2>注册</h2>
<div>
    <div>
    <p class="formrow"><label class="control-label">邮箱地址</label>
    <input type="text" name="u_email"></p>
    <span class="text-danger">请输入邮箱地址</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label">昵称</label>
    <input type="text" name="u_name"></p>
    <span class="text-danger">该怎么称呼你？ 中、英文均可，最长14个英文或7个汉字</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label">密码</label>
    <input type="password" name="u_pwd"></p>
    <span class="text-danger">5-20位英文、数字、符号，区分大小写</span>
    </div>
    <div>
    <p class="formrow"><label class="control-label">确认密码</label>
    <input type="password" name="u_pwdd"></p>
    <span class="text-danger">再输入一次密码</span>
    </div>
    <div class="loginbtn reg">
    <button class="uploadbtn ub1">注册</button>
    </div>

</div>
</div>
<!-- InstanceEndEditable -->
 
 
<script src="/layui/layui.js"></script>
 
<script>
      $(document).on('click','button',function(){
       var u_email = $('[name="u_email"]').val();
       var u_name =  $('[name="u_name"]').val();
       var u_pwd  =  $('[name="u_pwd"]').val();
       var u_pwdd =  $('[name="u_pwdd"]').val();

       if(u_name==''){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('昵称不能为空', {
                        icon: 1,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
           return false;
       }

       if(u_pwd !== u_pwdd){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg('两次输入的密码不一致', {
                        icon: 1,
                        time: 3000 //2秒关闭（如果不配置，默认是3秒）
                        }, function(){
                        //do something
                    });   
                });
           return false;
       }

       // return false;
       $.ajax({
            url:"{{url('/index/user/reg_do')}}",
            type:'post',
            data:{u_email:u_email,u_name:u_name,u_pwd,u_pwd},
            dataType: "json",
            success:function(res){
                // console.log(res);
                if(res.code="00000"){
                layui.use('layer', function(){
                    var layer = layui.layer;
                    layer.msg(res.msg, {
                        icon: 5,
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
