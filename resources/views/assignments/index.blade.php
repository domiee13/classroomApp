@extends('layouts.app')

@section('title')
    Challenge
@endsection

@section('content')
    <div class="card mt-5">
        <div class="card-header">Challenge</div>

        <div class="col-md-3 my-3 ms-3">
            <button class="btn btn-success">
                Add <i class="fas fa-plus-square"></i>
            </button>
        </div>
        <div class="card-body">
          <table class="table table-bordered ">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Due to</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                  <button class="btn btn-success">Detail</button>
                  <button class="btn btn-danger">Delete</button>
                </td>
              </tr>
              
            </tbody>
          </table>
        </div>
    </div>
@endsection
