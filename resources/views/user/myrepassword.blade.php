@extends('layouts.show')
@section('app.name', '忘记密码')
@section('content')
<link rel="stylesheet" href="/static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/static/index/images/13.jpg) right center no-repeat #fff">
<h2>修改密码</h2>
<form>
    <table>
            <tr>
                <td>要修改账号：</td>
                <td>
                    <input type="text" name="u_name" value="" class="user_desc">
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
                <td>新密码：</td>
                <td>
                    <input type="text" name="new_pwd" value="" class="user_desc">
                </td>
            </tr>
         

    <tr>
                <td></td>
                <td><button style="color: orange; width: 50px; height: 30px;">提交</button></td>
           </tr>
</table>
</form>
</div>
<!-- InstanceEndEditable -->
<script>
 $(document).on('click','button',function () {    
     var u_name = $('[name="u_name"]').val();
        var wt_1 = $('[name="wt_1"]').val();
        var wt_2 = $('[name="wt_2"]').val();
        var wt_3 = $("[name='wt_3']").val(); 
        var new_pwd = $("[name='new_pwd']").val(); 
     

       $.ajax({
        url:"{{url('index/user/xg')}}",
    
            data:{u_name:u_name,wt_1:wt_1,wt_2:wt_2,wt_3:wt_3,new_pwd:new_pwd},
            dataType:'json',
                type:'post',
                  success:function(res){
                // console.log(res);
                 if(res.code=='00000'){
                    alert(res.msg);
                    window.location.href=res.url;
                }else{
                    alert(res.msg);
                }
            }
        }); return false;
   });   
 
</script>

@endsection