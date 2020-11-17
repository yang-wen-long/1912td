@extends('layouts.show')
@section('app.name', '忘记密码')
@section('content')
<link rel="stylesheet" href="/static/index/css/register-login.css"/>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="register" style="background:url(/static/index/images/13.jpg) right center no-repeat #fff">
<h2>忘记密码</h2>
<form>
    <table>
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
</form>
</div>
<!-- InstanceEndEditable -->


@endsection