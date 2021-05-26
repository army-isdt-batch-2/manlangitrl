
@extends('layouts.main')
@section('title','Create Employee')
@section('body')
@php $active = 'employees'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-4"> 

                    <div class="col-10">
                        <h4>
                          Create Employee
                        </h4>
                    </div>
            
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                            <form action="/employees/create" method="post" class="row g-3">
                            @csrf
                            <div class="col-row">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Photo</label>
                                <input type="file" class="form-control" name="photo" required>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">First Name</label>
                                <input type="password" class="form-control" name="first_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" name="last_name" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" name="middle_name" required>
                            </div>
                            <div class="col-md-5">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="tel" class="form-control" name="contact" required>
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Birthday</label>
                                <input type="date" class="form-control"  name="birthday" required>
                            </div>
                           
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Gender</label>
                                <select name="gender" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Male</option>
                                <option>Female</option>

                                </select>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-7">
                            <div class="col-md-12">
                                <label for="inputCity" class="form-label">Address</label>
                                <textarea type="text" class="form-control" name="address" rows="4" required></textarea>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Department</label>
                                <select name="department_id" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                                <option>Department 2</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Designation</label>
                                <input type="text" class="form-control" name="designation" required>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Basic Rate Per Day</label>
                                <input type="number" class="form-control" name="rate" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">PhilHealth Contribution Table</label>
                                <select name="ph_id" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">SSS Contribution Table</label>
                                <select name="ss_id" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">PAGIBIG Contribution Table</label>
                                <select name="pi_id" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Income Tax Table</label>
                                <select name="tax_id" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
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