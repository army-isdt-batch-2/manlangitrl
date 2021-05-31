@extends('layouts.main')
@section('title','Create Department')
@section('body')
@php $active = 'department' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                       Update Department
                    </h4>
                </div>

                <div class="col-12">
                    <hr>
                </div>

                <div class="col-12">
                    <form action="{{ route('departments.update',$department->id) }}" method="post" class="row g-3" >
                        @csrf
                        <!-- @method('put') -->
                        <div class="col-md-6">
                            <label for="name" class="form-label">Department</label>
                            <input type="text" class="form-control" name="department" value="{{$department->department }}"required>
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