<!DOCTYPE HTML>
    <head>
        <title>@yield('title')</title>
    </head>

    <body>

        <div class="container">
            @yield('content')
        </div>

        <ul>
            <li><a href='/'>Home Page</a></li>
            <li><a href='/projects'>Projects Page</a></li>
            <li><a href='/projects/create'>Create Page</a></li>
           <!-- //<li><a href='/contact'>Contact Page</a></li>
           <!-- <li><a href='/about'>About Page</a></li>  -->
        </ul>

    </body>

    </html>
