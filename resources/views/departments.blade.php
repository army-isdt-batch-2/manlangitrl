@extends('layouts.main')
@section('title','Departments')
@section('body')
@php $active = 'department' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-5">

                <div class="col-10">
                    <h4>
                        Departments
                    </h4>
                </div>
                <div class="col-2 text-end">
                    <a href="/departments/create" class="btn btn-primary pull-right">Create</a>
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
                                <th scope="col">Department</th>
                                <th scope="col">Created</th>
                                <th scope="col">Updated</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody <tr>
                            <td>1</td>
                            <td>None</td>
                            <td>None</td>
                            <td>None</td>
                            <td>None</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection