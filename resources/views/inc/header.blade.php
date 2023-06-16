<header>
	<div class="container">
		<div class="header_flex">
			<a href="" class="logo">LIBRARY</a>
			<nav class="menu">
				<a href=" {{ route('home') }} " class="menu_item">Home</a>
				<a href="" class="menu_item">Library</a>
				
				@if (Auth::check())
					<a href="" class="menu_item">Profile</a>
					<a href=" {{ route('logout') }} " class="menu_item">Exit</a>
				@else
					<a href=" {{ route('auth') }} " class="menu_item">Sign In</a>
					<a href=" {{ route('reg') }} " class="menu_item">Sign Up</a>
				@endif
				
				
			</nav>
		</div>
	</div>
</header>