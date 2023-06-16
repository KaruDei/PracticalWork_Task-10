@extends('layouts.structure')

@section('title') Library @endsection

@section('content')
	 
	<div class="welcome_block">
		<h1>Welcome To The Library!</h1>
		@if (!Auth::check())
			<div class="welcome_btn_block">
				<a href=" {{ route('auth') }} " class="welcome_btn">Sign In</a>
				<a href=" {{ route('reg') }} " class="welcome_btn">Sign Up</a>
			</div>
		@endif
	</div>
	
@endsection