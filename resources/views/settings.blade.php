
@extends('layouts.main')
@section('title','Settings')
@section('body')
<div class="container">
    <div class="card mt-5">
    <div class="card">
    <h4 class="text-bold">Settings</h3>
    </div>
    <div class="card-body">
    <div class="row">
    <div class=" form-group col-md-4">
    <input type="text" class="form-control" placeholder="Search">
    </div>
    <div class="form-group col-md-6">
    <button type="button" class="btn btn-primary" style="position: absolute; right: 20px;" > Create</button>
    </div>
    </div>
    </div>
      <div class="card">
        <div class="card-body">
        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">M.I</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>M</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>V</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>L</td>
          </tr>
        </tbody>
      </table>
      </div>
      </div>

  </div>
</div>
</div>
@endsection