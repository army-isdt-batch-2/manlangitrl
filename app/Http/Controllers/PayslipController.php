<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipController extends Controller
{
    public function index()
    {

            return view('payslips');

     }
     public function create()
     {
 
             return view('create.payslip');
 
      }
}
