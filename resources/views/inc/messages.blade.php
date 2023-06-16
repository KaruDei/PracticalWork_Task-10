@if (session('success'))
	<div class="mess-block">
		<h4>SUCCESS!</h4>
		<p class="success">{{ session('success') }}</p>
	</div>
@endif

@if (session('error'))
	<div class="mess-block">
		<h4>ERORR!</h4>
		<p class="error">{{ session('error') }}</p>
	</div>
@endif

@if ($errors -> any())
	<div class="mess-block">
		<h4>WARNING!</h4>
		<ul>
			@foreach ($errors -> all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif