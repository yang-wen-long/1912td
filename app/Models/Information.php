<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
     //指定的表名
     protected $table = 'information';
     //指定的主键
     protected $primaryKey = 'infor_id';
     //不自动添加时间
     public $timestamps = false;
     // 黑名单
     protected $guarded = [];
}
