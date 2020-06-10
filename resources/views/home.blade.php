@extends('layouts.app')

@section('content')
<div class="container">    
                    <meta http-equiv="refresh" content="1; url=/{{Auth::user()->account_type}}/Profile/{{Auth::user()->id}}">
</div>
@endsection
