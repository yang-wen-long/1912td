<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  
    protected $table="user";
    protected $primarKey="u_id";
    public $timestamps=false;
}

