<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class EmployeeController extends Controller
{
        protected $request;
        public function __construct (Request $request)
       {
          $this->request=$request; 
       }       
    public function index()
    {

            return view('employees');

     }

     public function create()
     {
 
             return view('create.employees');
 
      }
}
