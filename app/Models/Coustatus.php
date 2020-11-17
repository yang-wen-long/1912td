<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coustatus extends Model
{
     //指定的表名
     protected $table = 'coustatus';
     //指定的主键
    //  protected $primaryKey = '';
     //不自动添加时间
     public $timestamps = false;
     // 黑名单
     protected $guarded = [];
}
