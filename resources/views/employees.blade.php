
@extends('layouts.main')
@section('title','Employees test')
@section('body')
@php $active = 'employees'  @endphp
  <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                           Employee
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/employees/create" class="btn btn-primary pull-right">Create</a>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-8"></div>
                    <div class="col-4 text-end"> 
                        <input type="text" class="form-control" placeholder="Search">
                    </div> 

                    <div class="col-12">
                   <table class="table">
                    <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Employee ID</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Department</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Total Earnings</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody
                  <tr>
                   
                  </tr>
                </tbody>
              </table>
                 </div>
                </div>
            </div>
        </div> 
    </div>
@endsection