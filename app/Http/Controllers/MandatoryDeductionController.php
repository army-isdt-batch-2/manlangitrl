<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class MandatoryDeductionController extends Controller
{
        protected $request;
        public function __construct (Request $request)
       {
          $this->request=$request; 
       }           
    public function index()
    {

            return view('mandatory_deduction');

     }

     public function create()
     {
 
             return view('create.mandatory_deduction');
 
      }
}
