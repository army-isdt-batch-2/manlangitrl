<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class LoanController extends Controller
{
    public function index()
    {

            return view('loans');

     }

     public function create()
     {
 
             return view('create.loans');
 
      }
}
