@extends ('layouts.structure')

@section('title') Library @endsection

@section('content')

	<div class="profile_container">
		<p><strong>surname:</strong> {{$profile_user->surname}}</p>
		<p><strong>name:</strong> {{$profile_user->name}}</p>
		<p><strong>l_name:</strong> 
			@if ($profile_user->l_name == '')
				none
			@else
				{{$profile_user->l_name}}
			@endif
		</p>
	</div>
	
@endsection