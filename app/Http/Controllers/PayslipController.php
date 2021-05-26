<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class PayslipController extends Controller
{
       protected $request;
       public function __construct (Request $request)
      {
         $this->request=$request; 
      }      
    public function index()
    {

            return view('payslips');

     }
     public function create()
     {
 
             return view('create.payslip');
 
      }

      public function view()
      {
  
              return view('view.payslip');
  
       }
}
