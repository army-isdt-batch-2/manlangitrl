
@extends('layouts.main')
@section('title','Time Keeping view')
@section('body')
@php $active = 'timekeeping'  @endphp
<div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-12">
                        <h4>
                            Attendance for May 25, 2021
                        </h4>
                    </div> 
                    <div class="col-12">
                        <hr>    
                    </div> 

                    <div class="col-12">
                    <form action="/timekeeping/view/save" method="post" class="row g-3">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th class="text-muted" scope="col"></th>
                                    <th class="text-muted" scope="col">Reg In</th>
                                    <th class="text-muted" scope="col">Reg Out</th>
                                    <th class="text-muted" scope="col">Reg Hr</th>
                                    <th class="text-muted" scope="col">OT Hr</th>
                                    <th class="text-muted" scope="col">Night Diff Hr</th>
                                    <th class="text-muted" scope="col">Early Hr</th>
                                    <th class="text-muted" scope="col">Tardy Hr</th>
                                    <th class="text-muted" scope="col">Double Pay</th>
                                    <th class="text-muted" scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <img width="50px" src="https://xsodia.space/payroll/assets/16281099.jpg" alt="">
                                        <br>
                                        <small>Juan delacruz</small>
                                    </th>
                                    <td>
                                        <input type="time" class="form-control" name="clockin" required>
                                    </td>
                                    <td>
                                        <input type="time" class="form-control" name="clockout" required>
                                    </td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>0hrs</td>
                                    <td>
                                        <input type="checkbox">
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Save</button>
                                    </td>
                                </tr>  
                            </tbody>
                        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection