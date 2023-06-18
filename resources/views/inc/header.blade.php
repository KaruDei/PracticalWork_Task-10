<header>
	<div class="container">
		<div class="header_flex">
			<a href="" class="logo">LIBRARY</a>
			<nav class="menu">
				<a href=" {{ route('home') }} " class="menu_item">Home</a>
				
				@if (Auth::check())
					<a href=" {{ route('library') }} " class="menu_item">Library</a>
					<a href=" {{ route('profile', Auth::user()->id) }} " class="menu_item">Profile</a>
					<a href=" {{ route('logout') }} " class="menu_item">Exit</a>
				@else
					<a href=" {{ route('auth') }} " class="menu_item">Sign In</a>
					<a href=" {{ route('reg') }} " class="menu_item">Sign Up</a>
				@endif
				
			</nav>
		</div>
	</div>
</header>