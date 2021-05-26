<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Redirect;
class DepartmentController extends Controller
{
     protected $request;
     public function __construct (Request $request)
    {
       $this->request=$request; 
    } 

    public function index()
    {
         $data=Department::orderby('id','DESC')->get();

         return view('departments')->with([
                'data'=>$data
                        ]);

     }

     public function create()
     {
 
         return view('create.departments');
 
      }
      
      
     public function save()
     {

        Department::create(
                $this->request->except('_token')
            );
         return Redirect::route('departments')->with('success','Department successfully added.');

 
      }

}
