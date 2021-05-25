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
                            <form class="row g-3">
                           
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Employee ID</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-4">
                            <div class="col-md-12">
                                <label for="inputState" class="form-label">Leave Type</label>
                                <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">Start Date</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            <div class="col-md-12">
                                <label for="inputPassword4" class="form-label">End Date</label>
                                <input type="date" class="form-control" id="inputPassword4">
                            </div>
                            </div>
                            <div class="col-md-8">
                            <div class="col-md-12">
                                <label for="inputCity" class="form-label">Notes</label>
                                <textarea type="text" class="form-control" id="inputCity" rows="7"></textarea>
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