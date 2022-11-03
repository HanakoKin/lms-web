<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('partials.head')

    </head>

    <body>

        <!-- Main -->
        @include('partials.header')

        @include('partials.sidebar')

        <main id="main" class="main">
            @yield('container')
        </main>
        <!-- End Main -->

        @include('partials.script')

    </body>

</html>
