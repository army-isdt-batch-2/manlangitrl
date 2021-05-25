<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MandatoryDeductionController extends Controller
{
    public function index()
    {

            return view('mandatory_deduction');

     }

     public function create()
     {
 
             return view('create.mandatory_deduction');
 
      }
}
