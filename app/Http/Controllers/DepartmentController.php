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

      public function edit($id)
      {

         $department = Department::find($id);

         // dd($department);

          return view('edit.departments')->with(['department'=>$department]);
  
       }

       public function update($id)
       {
         // dd($id);
       Department::find($id)->update(
            $this->request->except('_token')
       );
         return Redirect::route('departments')->with('success','Department successfully updated.');
   
        }

        public function destroy($id)
        {
           
        Department::find($id)->delete();
         return Redirect::route('departments')->with('success','Department successfully deleted.');
    
         }
         

}
