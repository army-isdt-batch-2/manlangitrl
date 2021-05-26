@extends('layouts.main')
@section('title','Create Leaves')
@section('body')
@php $active = 'leaves'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-4"> 

                    <div class="col-10">
                        <h4>
                          Create Leave
                        </h4>
                    </div>
            
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                            <form action="/leaves/create" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" name="employee_id" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fullname" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Designation</label>
                                <input type="text" class="form-control" name="designation" required>
                            </div>
                            <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Leave Type</label>
                                <select name="leave_type" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Start Date</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </div>
                            </div>
                            <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputCity" class="form-label">Notes</label>
                                <textarea type="text" class="form-control" name="notes" rows="7" required></textarea>
                            </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                            </form>  
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection