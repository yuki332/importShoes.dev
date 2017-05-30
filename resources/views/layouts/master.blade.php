<!doctype html>
<html>

    @include('layouts.header')

    <body>
		<div id="wrapper">
	        @include('layouts.nav')
	        
	        @yield('content')

	        @include('layouts.footer')
		</div>
		@include('layouts.script')
    </body>
</html>
