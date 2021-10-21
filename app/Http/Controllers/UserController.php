<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $usr = User::orderBy('id')->get();
        
        return view('users.index',['users'=>$usr]);
      }
  }
  