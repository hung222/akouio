<html>
    <head>
        <title>trangke - @yield('title')</title>
    </head>
    <body>
        <div id="menu">
            <ul>
                <li><a href="/">cca></li>
                <li><a href="/trangke">Ví dụ</a></li>
            </ul>    
        </div>

        @section('sidebar')
            Phần chính trong sidebar.
        @show
<h1>hật là xuix ẻo</h1>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
