<!doctype html>
<html>

    @include('layouts.header')

    <body>
		<div id="wrapper">
			<nav>
				<h1><a href="/">importShoes.dev</a></h1>
			</nav>
	        
	        @yield('content')
	
		</div>
	
		@include('layouts.script')
    
    </body>
</html>
