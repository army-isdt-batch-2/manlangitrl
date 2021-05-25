<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeKeepingController extends Controller
{
    public function index()
    {

        return view('timekeeping');

   }
     public function create()
     {
 
             return view('create.timekeeping');
 
      }
}