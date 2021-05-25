@extends('layouts.main')
@section('title', 'Layout Test')
@section('body')
    <div class="row align-items-center"> 
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body row p-5"> 

                    <div class="col-10">
                        <h4>
                           Layouts 
                        </h4>
                    </div>
                    <div class="col-2 text-end"> 
                        <button class="btn btn-primary pull-right">Create</button>
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