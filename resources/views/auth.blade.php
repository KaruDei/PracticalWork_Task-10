<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Authorization</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
	<div class="auth_container">
		<form action=" {{ route('auth.sub') }} " method="POST" class="auth_block">
		@csrf

			<h1 class="form_title">AUTHORIZATION</h1>

			@include('inc.messages')

			<label for="email" class="form_label"> <p class="label_text">Email <span class="required">*</span></p>
				<input type="text" id="email" name="email" class="label_input">
			</label>

			<label for="password" class="form_label"> <p class="label_text">Password <span class="required">*</span></p>
				<input type="password" id="password" name="password" class="label_input">
			</label>

			<label for="auth_sub" class="form_label">
				<input type="submit" id="auth_sub" name="auth_sub" class="label_btn" value="AUTHORIZATION">
			</label>

			<a href=" {{ route('reg') }} " class="menu_item">Sign Up</a>

			<a href=" {{ route('home') }} " class="menu_item">Back</a>

		</form>
	</div>
</body>
</html>