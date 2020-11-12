<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    # 表名
    protected $table = 'course_catalog';

    # 主键
    protected $primaryKey = 'catalog_id';

    # 黑名单
    protected $guarded = [];

    # 关闭laravel自带的时间戳
    public $timestamps = false;
}
