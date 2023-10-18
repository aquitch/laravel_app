<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    </head>
    <body class="container bg-dark">
    <div class="container">
        @include('include.nav')
    </div>
        <div class="container">
            <div class="row">
                <div class="col-2 text-light">
                    <div class="d-flex justify-content-center">
                        @include('include.l_column')
                    </div>
                </div>
                <div class="col-8 text-light">
                @yield('body')
                </div>
                <div class="col-2 text-light">
                    <div class="d-flex justify-content-center">
                        @include('include.r_column')
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        @include('include.footer')
    </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>
