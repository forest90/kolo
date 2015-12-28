@extends('layouts.index')

@section('content')
	<div class="col-lg-8">
		<ol>
			@foreach($users as $user)
				<li style="margin-top: 15px;">
					@if(isset($user->avatar))
						<img class="avatar-profile" src="{{$user->avatar->path}}"> 
					@endif
					{{$user->nick}}	
				</li>
			@endforeach
		</ol>
	</div>
@stop
