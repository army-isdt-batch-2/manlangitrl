<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class TimeKeepingController extends Controller
{
       protected $request;
       public function __construct (Request $request)
      {
         $this->request=$request; 
      }       
    public function index()
    {

        return view('timekeeping');

   }
     public function create()
     {
 
             return view('create.timekeeping');
 
      }

      public function timeview()
      {
  
              return view('view.timekeeping');
  
       }
}