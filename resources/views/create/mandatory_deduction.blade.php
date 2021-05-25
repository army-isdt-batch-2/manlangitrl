@extends('layouts.main')
@section('title','Create Mandatory Deductions')
@section('body')
@php $active = 'mandatory-deductions' @endphp
<div class="row align-items-center">
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body row p-4">

                <div class="col-10">
                    <h4>
                        Create Mandatory Deduction
                    </h4>
                </div>

                <div class="col-12">
                    <hr>
                </div>
                <div class="col-12">
                    <form class="row g-3">
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Contribution type</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Base Range</label>
                            <input type="text" class="form-control" id="inputname" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Monthly Contribution</label>
                            <input type="number" class="form-control" id="inputname" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Employee Share</label>
                            <input type="number" class="form-control" id="inputname" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Employer Share</label>
                            <input type="number" class="form-control" id="inputname" required>
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