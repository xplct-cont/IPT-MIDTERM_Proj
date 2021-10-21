<?php

namespace App\Http\Controllers;
use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
     public function index(){
      $acc = Account::orderBy('id')->get();
      
      return view('accounts.index',['accounts'=>$acc]);
    }
}
