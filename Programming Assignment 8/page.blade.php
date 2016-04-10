<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('content')

           <p>|====================|
           <p>| This is the master content.        |
           <p>|====================|

        @show

        <div class="container">
            @yield('content2')
        </div>
    </body>
</html>
