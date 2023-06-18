@extends ('layouts.structure')

@section('title') Library @endsection

@section('content')

<div class="profile_info_block">
	<div class="profile_info_img">
		<img src="{{ asset('imgs/profile/3sohhcx7rrw91.jpg') }}" alt="">
	</div>
	<div class="profile_info_text">
		<p><strong>Surname:</strong> {{ $profile_user->surname }} </p>
		<p><strong>Name:</strong> {{ $profile_user->name }} </p>
		<p><strong>L-Name:</strong> {{ $profile_user->l_name }} </p>
		<p><strong>Email:</strong> {{ $profile_user->email }} </p>
		@if (Auth::check())
			@if (Auth::user()->id == $profile_user->id)
				<div class="sign_btn_block">
					<a href="" class="sign_btn_auth">EDIT</a>
					<a href="" class="sign_btn_auth">MY COMMENTS</a>
					<a href="" class="sign_btn_auth">DELETE</a>
				</div>
			@endif
		@endif
	</div>
</div>
	
@endsection