<html>
    <head>
        <title>All Laravel - @yield('title')</title>
    </head>
    <body>
        <div id="menu">
            <ul>
                <li><a href="/">Trang chủ</a></li>
                <li><a href="/first-blade-example">Ví dụ</a></li>
                <li><a href="/contact">Liên hệ </a></li>
            </ul>    
        </div>

        @section('sidebar')
            Phần chính trong sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
