<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {

        return view('leaves');

     }

     public function create()
     {
 
             return view('create.leaves');
 
      }
}
