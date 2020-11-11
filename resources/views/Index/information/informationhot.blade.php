@foreach($hot as $v)
    	<h3><a class="artlink" href="{{url('/index/information/information')}}">{{$v['infor_title']}}</a></h3>
        <p>{{$v['infor_content']}}</p>
        <p class="artilabel">
        <span class="ask_label">热门资讯</span>
        <b class="labtime">{{$v['infor_time']}}</b>
        </p>
        <div class="clearh"></div>
@endforeach
