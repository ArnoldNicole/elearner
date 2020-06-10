@extends('layouts.player_app')
@section('content')
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="card-header bg-dark text-danger w-100">
			<a href="#" onclick="document.getElementById('ErrorLog').style.display='block'" class="float-left btn btn-outline-warning">Back</a>
			<div class="alert alert-info" style="display:none;" id="ErrorLog">
						<span class="close" data-dismiss="alert">&times;</span>
						<h5 class="text-danger text-sm-center">Warning</h5>
						<h6>Unsaved Changes</h6>
						<div class="btn-group-sm">
							<a href="/Player/PlayerProfile/{{$player->id}}" class="btn btn-outline-success btn-sm">Continue with unsaved Changes</a>
							<a href="#" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('ErrorLog').style.display='none'">Stay on page</a>
						</div>
						</div>
		<span class="float-right">Player Profile Edit Form</span>
	</div>
		<form method="post" action="/Player/PlayerProfile/self/ChangePassword/{{$player->id}}" class="card-body">
			@csrf
			<div class="card">	
			<div class="card-header">Be careful while Changing your Password.</div>
			<div class="card-body">	
					 <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">	
                        		<div class="col-md-6">
                        				<button class="btn btn-outline-warning">Confirm Changes</button>
                        			</div>
                        </div>
			</div>			
		</div>	
		</form>
	</div>

</div> 
@endsection
