@extends('layouts.coach_app')
@section('content')
<div class="container-fluid">
	<div class="row mb-0 w-100">
    <div class="card col-md-12">
      <div class="card-header  bg-primary">
        <span class="h3 text-dark">{{$coach->name}}'s Profile</span>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-4">
            <img src="" alt="{{$coach->name}}" class="img-thumbnail img-fluid w-25">
            <div class="card-body">
              <div><span class="font-weight-bold text-dark m-0 p-0 py-0 text-nowrap">Name:</span> {{$coach->name}}</div>
              <div><span class="font-weight-bold text-dark m-0 p-0 py-0 text-nowrap">Email:</span> {{$coach->email}}</div>
              <div><span class="font-weight-bold text-dark m-0 p-0 py-0 text-nowrap">Contact:</span> +2547085093XX</div>
              <div><span class="font-weight-bold text-dark m-0 p-0 py-0 text-nowrap">Age:</span> XY</div>
              <div class="dropdown-divider"></div>
              


            </div>
          </div>
          <div class="col-md-8 float-right">
            <div class="card">
              <h3 class="h5 text-danger shadow-sm">Coaching Profile</h3>
              <div class="dropdown-divider"></div>
              <div class="card-body">
                <p class="m-0 p-0">Current Club <strong class="text-danger">None</strong></p>
                <p class="m-0 p-0">Coaching Since<data class="text-success">23.02.1990</data></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
	</div>
@endsection
