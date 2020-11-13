<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Huodong extends Model
{
     //指定的表名
     protected $table = 'huodong';
     //指定的主键
     protected $primaryKey = 'huo_id';
     //不自动添加时间
     public $timestamps = false;
     // 黑名单
     protected $guarded = [];
}
