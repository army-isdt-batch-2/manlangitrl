<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {

            return view('employees');

     }

     public function create()
     {
 
             return view('create.employees');
 
      }
}