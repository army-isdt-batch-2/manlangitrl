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
                    <form action="/mandatory-deductions/create" method="post" class="row g-3">
                    @csrf
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Contribution type</label>
                            <select name="deduction_type" class="form-select" required>
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Base Range</label>
                            <input type="text" class="form-control" name="basic_range" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Monthly Contribution</label>
                            <input type="number" class="form-control" name="monthly_contribution" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Employee Share</label>
                            <input type="number" class="form-control" name="employee_share" required>
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Employer Share</label>
                            <input type="number" class="form-control" name="employer_share" required>
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