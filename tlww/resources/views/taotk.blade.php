<html>
    <head>
        <title>All Laravel - @yield('title')</title>
    </head>
    <body>

        @section('sidebar')
            Phần chính trong sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>

    </body>
</html>
