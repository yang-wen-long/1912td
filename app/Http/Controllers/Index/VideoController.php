<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//课程视频
class VideoController extends Controller
{
    //视频
    public function video(){
    	return view("Index.Video.video");
    }
}
