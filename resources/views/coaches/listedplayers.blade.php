@extends('layouts.coach_app')
@section('content')
<div class="container-fluid">
	
<div class="row col-sm-4 d-flex">
	@foreach($players as $player)
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">
                  	{{$player->name}}
                  </h6>
                <!-- Card Body -->
                <div class="card-body">
                  <img src="{{asset('/images/chelsealogo.png')}}" class="img-thumbnail">
                  <h5 class="text-lg-right">{{$player->player->Country}}</h5>
                  <a href="/PlayingUnit/Profile/{{$player->id}}">Profile</a>
                  <br>
                  <p>{{$player->player->Club}}</p>
                  
                </div>
              </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection
