@extends('layouts.coach_app')
@section('content')
<div class="container-fluid">
	<div class="row ">
		 <div class="col-lg-4">
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">MATCHES</h6>
                  </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="myPieChart"></canvas>
                  </div>
                  <div class="mt-1 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i>Wins
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i>Losses
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Draws
                    </span>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-lg-4">
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">CUP FINALS STATS</h6>
                  </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="cupFinals"></canvas>
                  </div>
                  <div class="mt-1 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i>Wins
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-danger"></i>Losses
                    </span>
                    
                  </div>
                </div>
              </div>
            </div>

             <div class="col-lg-4">
              <div class="card shadow">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">TROPHIES STATS</h6>
                  </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-pie pt-4 pb-2">
                    <canvas id="Awards"></canvas>
                  </div>
                  <div class="mt-1 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-success"></i>AFCON
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-danger"></i>KPL
                    </span>
                    <span class="mr-2">
                      <i class="fas fa-circle text-dark"></i>ETC
                    </span>
                    
                  </div>
                </div>
              </div>
            </div>


	</div>
  <div class="dropdown-divider"></div>
  <div class="row justify-content-center"><div class="col-md-8"><marquee><h3 class="text-lg-center text-success">UPCOMING FIXTURE</h3></marquee></div></div>
  <div class="row ml-4 mr-4 justify-content-center">
    <div class="col-sm-4">
      <img src="{{asset('/images/chelsealogo.png')}}" class="img-thumbnail img-rounded w-100">
    </div>
    <div class="col-sm-4">
      <div class="row mt-5 mb-5 justify-content-center">
       <h6 class="h6 text-dark"> Time 08:00 Am</h6>
      </div>
      <div class="row justify-content-center">
       <h1 class="h1">VS</h1>
      </div>
      <div class="row mt-5 mb-5 justify-content-center">
         <h6 class="h6 text-dark">Old Trafford</h6>
      </div>
    </div>
    <div class="col-sm-4">
       <img src="{{asset('/images/logo.png')}}" class="img-thumbnail img-rounded w-100">
    </div>
  </div>
	</div>
@endsection
