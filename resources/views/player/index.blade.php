@extends('layouts.player_app')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-dark"><span class="text-light"><i class="fa fa-soccer-ball-o"></i></span><span class="float-right text-success font-weight-bold h5">Playing Unit Dashboard</span></div>                
			   
				<div class="card-body">
				   <div class="row">
					<!-- Statistics and profile Info-->
					   <div class="col-sm-4 bg-light">
						<div class="row">
						<div class="col">
							<div class="text-center"><i class="fa fa-user h1 font-weight-bold text-danger "></i></div>
							<span>Name:<p class="text-success text-capitalize">{{$player->name}}</p></span>
							@can('update', $player->player)
							<div class="text-center btn-group-sm btn-group-vertical">
							<a href="/Player/self/EditPlayerProfile/{{$player->id}}" class="btn btn-outline-primary">Edit Profile</a>
							<a href="#" class="btn btn-outline-success">Verify Email</a>
							<a href="/Player/self/ChangePassword/{{$player->id}}" class="btn btn-outline-info">Change Password</a>
							</div>
							<p>{{$player->created_at->diffForHumans()}}</p>
							@endcan 
						</div>
						
						<div class="col">                            
						   <div class="text-sm-right">
							   
							   <span>Club: <p class="text-success text-capitalize">Free Agent</p></span>
							   <span>Position: <p class="text-success text-capitalize">Center Back</p></span>
							   <span>Fifa Ratings: <p class="text-success text-capitalize">45</p></span>
							   <span>Role: <p class="text-success text-capitalize">Captain</p></span>
						   </div> 
						</div>
						</div>                          
					   </div>
					   <div class="col-md-8 bg-success" style="border-left:4px solid #12E9AF;border-right:4px solid #12E9AF;">
						<div class="row justify-content-center bg-white "><span class="font-weight-bold text-dark h4 text-lg-center ">Player Statistics</span></div>
						  <div class="row justify-content-center">
							  <div class="col-sm-4  bg-info">
								  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								  
							  </div>
							  <div class="col-sm-1 bg-white bg-transparent"></div>
							  <div class="col-sm-4 bg-info float-right">
								  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								 
							  </div>
						  </div> 
					   </div>
				   </div>
				   <div class="dropdown-divider"></div>
				   <div class="row bg-warning">
					   <!-- International Profile-->
					   <div class="col-md-3 bg-white">
						   <div class="card container-fluid">
							   <div class="card-hader bg-transparent text-sm-center text-info font-weight-bold">INTERNATIONAL PROFILE</div>
							   <div class="card-body">
								   <div class="h6">Country <span class="text-sm-left text-warning text-nowrap">{{$player->player->Country}}</span></div>
								   <div class="h6">Internationl Goals <span class="text-sm-left text-warning text-nowrap">56</span>
									<div class="h6">World Cups <span class="text-sm-left text-warning text-nowrap">0</span>
								   <div class="h6">International Trophies <span class="text-sm-left text-warning text-nowrap">34</span> </div>
							   </div>
						   </div>
					   </div>                     

				   </div>

				</div>

				 <div class="col-md-6 bg-white">
						   <div class="card container-fluid">
							   <div class="card-header bg-transparent">PLAYER CAREER OVERVIEW</div>
							   <div class="card-body">
								   <div class="h5">Current Club <span class="text-danger">Mwihoko United</span></div>
								   <div class="card-body bg-light">
									<h3 class="text-center font-weight-bold">Clubs played for</h3>
									<div class="btn-group-vertical"><ul class="list-group">
									   <li class="list-group-item">Kariobangi Sharks: <span class="text-sm-center">1999-2001</span></li>
									   <li class="list-group-item">Karuturi Allstars <span class="text-sm-center">1999-2001</span></li>
									   <li class="list-group-item">Ngurika FC <span class="text-sm-center">1999-2001</span></li>
									   <li class="list-group-item">Developers Society <span class="text-sm-center">1999-2001</span></li>
								   </ul></div> </div>

							   </div>
						   </div>
					   </div>

					   <div class="col-md-3 container-fluid">
						<div class="alert alert-info">
						<span class="close" data-dismiss="alert">&times;</span>
						<h5>Alerts</h5>
						<h6>Coach Francis Wants to access your Profile</h6>
						<div class="btn-group-vertical">
							<a href="#" class="btn btn-success">Accept</a>
							<a href="#" class="btn btn-danger">Reject</a>
						</div>
						</div>
					   </div>

			</div>
		</div>
	</div>
</div>
@endsection
