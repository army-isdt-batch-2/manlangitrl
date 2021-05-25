
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
                            <form class="row g-3">
                            <div class="col-row">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Photo</label>
                                <input type="file" class="form-control" id="inputEmail4">
                            </div>
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">First Name</label>
                                <input type="password" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-5">
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Contact</label>
                                <input type="tel" class="form-control" id="inputPassword4">
                            </div>
                            <div class="row">
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Birthday</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                           
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Gender</label>
                                <select id="inputState" class="form-select">
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
                                <textarea type="text" class="form-control" id="inputCity" rows="4"></textarea>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Department</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>Department 1</option>
                                <option>Department 2</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-4">
                                <label for="inputAddress" class="form-label">Basic Rate Per Day</label>
                                <input type="number" class="form-control" id="inputAddress" >
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">PhilHealth Contribution Table</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">SSS Contribution Table</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">PAGIBIG Contribution Table</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="inputState" class="form-label">Income Tax Table</label>
                                <select id="inputState" class="form-select">
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