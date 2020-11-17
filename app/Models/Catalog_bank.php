<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog_bank extends Model
{
    # 表名
    protected $table = 'catalog_bank';

    # 主键
    protected $primaryKey = 'bank_id';

    # 黑名单
    protected $guarded = [];

    // 关闭laravel自带的时间戳
    public $timestamps = false;
}
