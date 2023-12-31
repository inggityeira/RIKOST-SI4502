<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        #main-content {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }
    </style>
    @stack('css')
</head>
<body>
    <section id="main-content">
        @include('layouts.navbar')
    
        @yield('content')
    </section>

    <br>

    @include('layouts.footer')
</body>
</html>