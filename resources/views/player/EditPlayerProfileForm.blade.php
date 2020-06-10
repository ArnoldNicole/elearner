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
							<a href="/Player/PlayerProfile/{{$user->id}}" class="btn btn-outline-success btn-sm">Continue with unsaved Changes</a>
							<a href="#" class="btn btn-outline-danger btn-sm" onclick="document.getElementById('ErrorLog').style.display='none'">Stay on page</a>
						</div>
						</div>
		<span class="float-right">Player Profile Edit Form</span>
	</div>
		<form method="post" action="/Player/PlayerProfile/self/saveUpdate/{{$user->id}}" class="card-body">
			@csrf
			@method('PATCH')
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label class="col-form-label" for="name">Name</label>
						<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name') ?? $user->name}}">
						 @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label class="col-form-label" for="email">Email</label>
						<input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email') ?? $user->email}}">
						 @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
			</div>
				<div class="dropdown-divider"></div>
				<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label class="col-form-label" for="country">Country</label>
						<input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{old('country') ?? $user->player->Country}}">
						 @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-form-label" for="phone">url</label>
						<input type="text" name="url" class="form-control @error('url') is-invalid @enderror" value="{{old('url') ?? $user->player->url}}">
						 @error('url')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="col-form-label" for="country">Club</label>
						<input type="text" name="club" class="form-control @error('club') is-invalid @enderror" value="{{old('club') ?? $user->player->Club}}" readonly>
						 @error('club')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
				</div>
				<div class="dropdown-divider"></div>
				<div class="row justify-content-center">
					<div class="col-md-8">
					<div class="form-group">
						<label class="col-form-label" for="Jersey_Number">Jersey Number</label>
						<input type="number" name="Jersey_Number" class="form-control @error('Jersey_Number') is-invalid @enderror" value="{{old('Jersey_Number') ?? $user->player->Jersey_Number}}"  min="1" max="100" required readonly>
						 @error('Jersey_Number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
					</div>
				</div>
				
			</div>
			<div class="row btn-group-sm justify-content-center">
				<button class="btn btn-outline-primary btn-lg" type="submit">Save Changes</button>
				<button class="btn btn-outline-danger btn-lg" type="reset">Reset Form</button>
			</div>
		</form>
	</div>

</div> 
@endsection
