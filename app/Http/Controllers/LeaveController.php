<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class LeaveController extends Controller
{
    protected $request;
    public function __construct (Request $request)
   {
      $this->request=$request; 
   }
    public function index()
    {

        return view('leaves');

     }

     public function create()
     {
 
             return view('create.leaves');
 
      }
}
