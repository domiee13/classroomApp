@extends('layouts.app')

@section('title')
  Users 
@endsection

@section('content')
<!-- <div class="row"> -->
  <div class="d-flex justify-content-between">
    <h1>Users</h1>
    <a href="" class="btn btn-success d-inline-block h-25 align-self-center">Add</a>
  </div>

<!-- </div> -->
    <hr>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Full name
						</th>
						<th>
							Actions
						</th>
					</tr>
				</thead>
				<tbody>
          @foreach($users as $user)
          <!-- {{$user}} -->
					<tr>
						<td>
							{{$user->id}}
						</td>
						<td>
              {{$user->fullname}}
						</td>
						<td>
							<a href="" class="btn btn-success">View details</a>
							<a href="" class="btn btn-primary">Edit</a>
							<a href="" class="btn btn-danger">Delete</a>
						</td>
					</tr>
          @endforeach
					
				</tbody>
			</table>
		</div>
	</div>
@endsection