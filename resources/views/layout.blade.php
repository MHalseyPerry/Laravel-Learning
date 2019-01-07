<!DOCTYPE HTML>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Poppins|Staatliches" rel="stylesheet">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">
        <title>@yield('title')</title>
    </head>

    <body>

        <header>
            <div class="container">
                <img src="assets/logo.png" width="230" height="33" alt="logo" class="logo">
                <nav>
                    <ul>
                        <li><a href='/'>Home</a></li>
                        <li><a href='/projects'>Projects</a></li>
                        <li><a href='/contact'>Contact</a></li>
                        <li><a href='/about'>About</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class=container>
            @yield('content')
        </div>


    </body>

    </html>
