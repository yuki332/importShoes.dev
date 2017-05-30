<nav>
	<h1><a href="/">importShoes.dev</a></h1>
	<ul class="flex flex--sparnd">
		@if(!Auth::check())
			<li><a href="#">Sign up</a></li>
			<li><a href="#">Log in</a></li>
		@else
			<li><a href="">{{ auth()->user()->username }}</a></li>
			<li><a href="/logout">Log Out</a></li>
		@endif
	</ul>
</nav>