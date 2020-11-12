<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//题库
class BankController extends Controller
{
    //
    public function bank(){
    	$nav = $this->nav();
    	return view("Index.Bank.bank",["nav"=>$nav]);
    }
}
