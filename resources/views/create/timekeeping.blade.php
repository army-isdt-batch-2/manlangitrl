
@extends('layouts.main')
@section('title','Create Time Keeping')
@section('body')
@php $active = 'timekeeping'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-4"> 

                    <div class="col-10">
                        <h4>
                          Create Time Keeping
                        </h4>
                    </div>
            
                    <div class="col-12">
                        <hr>    
                    </div>

                    <div class="col-12">
                            <form action="/timekeeping/save" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputZip" class="form-label">Attendance Date</label>
                                <input type="date" class="form-control" name="date" required>
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