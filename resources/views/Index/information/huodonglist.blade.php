@extends('layouts.show')
@section('app.name', '课程')
@section('content')
 <style>
    #a{
        width:1098px;
        height:600px;
        
        margin-top:-43px;
        margin-left:-19px;
    }
</style>
<link rel="stylesheet" href="../../../../../static/index/css/information.css">
<script src="../../../../../static/index/js/jquery-1.8.0.min.js"></script>
<script src="../../../../../static/index/js/mine.js"></script>
<script type="text/javascript" src="../../../static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic" style="width:1060px;height:100px">
    <h3 class="righttit">全部资讯</h3>  
    <span class="bread nob">
        <a class="fombtn " href="{{url('/index/information/informationlist')}}">全部资讯</a>
        <a class="fombtn" href="{{url('/index/information/informationhot')}}">热门资讯</a>
        <a class="fombtn" href="{{url('/index/teacher/teacherlist')}}">考试指导</a>
        <a class="fombtn cur" href="{{url('/index/information/huodonglist')}}">精彩活动</a>
    </span>
</div>
<div></div>
<div  class="coursepic">
<div id="a">
    <table>
        <tr>
            @foreach($huo as $v)          
            <td >
                 <center>
                <a href="">{{$v["huo_name"]}}</a>
                </center>
            </td>
            @endforeach
        </tr>
        <tr>
            @foreach($huo as $v)
            <td>
                <img src="../../{{$v['huo_img']}}">
            </td>
            @endforeach
        </tr>
        <tr class="box-title"><td class="box-title">{{$huo->links()}}</td></tr>
    </table>  
</div>
</div>
</div>
<!-- InstanceEndEditable -->
@endsection