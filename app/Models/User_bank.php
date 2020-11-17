<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_bank extends Model
{
    # 表名
    protected $table = 'user_bank';

    # 主键
    protected $primaryKey = 'u_id';

    # 黑名单
    protected $guarded = [];

    // 关闭laravel自带的时间戳
    public $timestamps = false;
}
