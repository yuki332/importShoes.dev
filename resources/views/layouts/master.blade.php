<!doctype html>
<html>

    @include('layouts.header')

    <body>
        <div class="flex-center position-ref full-height">

            @include('layouts.nav')
            
            @yield('content')

        </div>

        @include('layouts.footer')

    </body>
</html>
