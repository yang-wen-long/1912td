<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  
    protected $table="catalog_bank";
    protected $primarKey="bank_id";
    public $timestamps=false;
}

