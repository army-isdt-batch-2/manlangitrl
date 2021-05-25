@extends('layouts.main')
@section('title','Create Payslips')
@section('body')
@php $active = 'payslips'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-4"> 

                    <div class="col-10">
                        <h4>
                          Create Payslip
                        </h4>
                    </div>
            
                    <div class="col-12">
                        <hr>    
                    </div>
                    <div class="col-12">
                            <form class="row g-3">
                    
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Cut-off start</label>
                                <input type="date" class="form-control" id="inputZip">
                            </div>
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Cut-off end</label>
                                <input type="date" class="form-control" id="inputZip">
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