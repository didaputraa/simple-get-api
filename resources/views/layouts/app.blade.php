<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        @stack('css')
    </head>
    <body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">CRUD</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a href="{{ url('logout') }}" class="nav-link text-danger" href="#">Logout</a>
            </li>
        </ul>
        </div>
    </nav>


    <div class="container mt-5">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('asset/jQuery-v3.6.0.min.js') }}"></script>
    <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}"></script>
    @stack('script')
    </body>
</html>
