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
		<div class="auth_block">

			<h1 class="form_title">AUTHORIZATION</h1>

			<label for="email" class="form_label"> <p class="label_text">Email <span class="required">*</span></p>
				<input type="text" id="email" name="email" class="label_input">
			</label>

			<label for="password" class="form_label"> <p class="label_text">Password <span class="required">*</span></p>
				<input type="password" id="password" name="password" class="label_input">
			</label>

			<label for="auth_sub" class="form_label">
				<input type="submit" id="auth_sub" name="auth_sub" class="label_btn" value="AUTHORIZATION">
			</label>

		</div>
	</div>
</body>
</html>