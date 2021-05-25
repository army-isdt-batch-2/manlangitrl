
@extends('layouts.main')
@section('title','Mandatory Deductions')
@section('body')
@php $active = 'mandatory-deductions'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                           Dandatory Deductions
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/mandatory-deductions/create" class="btn btn-primary pull-right">Create</a>
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
                    <th scope="col">EmployeeID</th>
                    <th scope="col">Contribution type</th>
                    <th scope="col">Base Range</th>
                    <th scope="col">Monthly Contribution</th>
                    <th scope="col">Employee Share</th>
                    <th scope="col">Employer Share</th>
                    <th scope="col">Action</th>
              
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    
                  </tr>
                  <tr>
                 
              
                </tbody>
              </table>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection