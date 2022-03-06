<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
          return view('home');
    }
    public function redirects()
    {
          $usertype = Auth::user()->usertype;//usertype is frome database
          if($usertype=='1')
          {
           return view('Admin.adminHome');
          }
          else{
              return view('home');
          }
    }
}
