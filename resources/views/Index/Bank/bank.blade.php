@extends('layouts.show')
@section('app.name', '课程')
@section('content')
<link rel="stylesheet" href="/static/index/css/article.css">
<script src="/static/index/js/jquery-1.8.0.min.js"></script>
<script src="/static/index/js/mine.js"></script>
<script type="text/javascript" src="/static/index/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- InstanceBeginEditable name="EditRegion1" -->
<div class="coursecont">
<div class="coursepic">
	<h3 class="righttit">全部数据</h3>
    <div class="clearh"></div>
    <span class="bread nob">
        <a class="fombtn cur" href="{{url('/index/article/articlelist')}}">全部数据</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">热门题选</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">填空题</a>
        <a class="fombtn" href="{{url('/index/article/articlelist')}}">选择题</a>
    </span>
    
</div>
<div class="clearh"></div>
<div class="coursetext">
	<div class="articlelist">
    	<h3><a class="artlink" href="{{url('/index/article/article')}}">PHP算法</a></h3>
        <p>给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。请你找出并返回这两个正序数组的中位数。进阶：你能设计一个时间复杂度为 O(log (m+n)) 的算法解决此问题吗？</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">2015-02-02</b>
        </p>
        <div class="clearh"></div>
    </div>
    <div class="articlelist">
    	<h3><a class="artlink" href="#">PHP算法</a></h3>
        <p>给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。请你找出并返回这两个正序数组的中位数。进阶：你能设计一个时间复杂度为 O(log (m+n)) 的算法解决此问题吗？</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">2015-02-02</b>
        </p>
        <div class="clearh"></div>
    </div>
    <div class="articlelist">
    	<h3><a class="artlink" href="#">PHP算法</a></h3>
        <p>给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。请你找出并返回这两个正序数组的中位数。进阶：你能设计一个时间复杂度为 O(log (m+n)) 的算法解决此问题吗？</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">2015-02-02</b>
        </p>
        <div class="clearh"></div>
    </div>
    <div class="articlelist">
    	<h3><a class="artlink" href="#">PHP算法</a></h3>
        <p>给定两个大小为 m 和 n 的正序（从小到大）数组 nums1 和 nums2。请你找出并返回这两个正序数组的中位数。进阶：你能设计一个时间复杂度为 O(log (m+n)) 的算法解决此问题吗？</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">2015-02-02</b>
        </p>
        <div class="clearh"></div>
    </div>
    
    
	<div class="clearh" style="height:20px;"></div>
	<span class="pagejump">
    	<p class="userpager-list">
       	   <a href="#" class="page-number">首页</a>
           <a href="#" class="page-number">上一页</a>
           <a href="#" class="page-number">1</a>
           <a href="#" class="page-number pageractive">2</a>
           <a href="#" class="page-number">3</a>
            <a href="#" class="page-number">...</a>
            <a href="#" class="page-number">10</a>
           <a href="#" class="page-number">下一页</a>
           <a href="#" class="page-number">末页</a>
        </p>
    </span>
    <div class="clearh" style="height:10px;"></div>
</div>

<div class="courightext">
<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">热门课程</h3>
    <div class="gonggao">
	<ul class="hotask">
        	<li><a class="ask_link" href="#"><strong>●</strong>PHP算法</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>数据库</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>Shell</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>多线程</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>PHP算法</a></li>
            <li><a class="ask_link" href="#"><strong>●</strong>多线程</a></li>
        </ul>
    </div>
    </div>
</div>

<div class="ctext">
    <div class="cr1">
    <h3 class="righttit">推荐课程</h3>
    <div class="teacher">
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images//c1.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images//c2.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    <div class="teapic">
        <a href="#"  target="_blank"><img src="/static/index/images//c3.jpg" height="60" title="财经法规与财经职业道德"></a>
        <h3 class="courh3"><a href="#" class="ask_link" target="_blank">财经法规与财经职业道德</a></h3>
    </div>
    <div class="clearh"></div>
    </div>
    </div>
</div>
   
</div>



<div class="clearh"></div>
</div>
<!-- InstanceEndEditable -->

@endsection