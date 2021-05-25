
@extends('layouts.main')
@section('title','Leaves')
@section('body')
@php $active = 'leaves'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                           Leaves
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <a href="/leaves/create" class="btn btn-primary pull-right">Create</a>
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
                    <th scope="col">Employee ID</th>
                    <th scope="col">Leave Type</th>
                    <th scope="col">Start</th>
                    <th scope="col">End</th>
                    <th scope="col">Status</th>
                    <th scope="col">	Action</th>

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