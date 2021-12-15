<html>
    <head>
        <link href="{{ asset('asset/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6 border bg-white mx-auto">
                <form action="" method="post">
                @csrf
                    <h1>Login area</h1>
                    <div class="form-group">
                        <input type="text" name="user" class="form-control" placeholder="username" required >
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="password" required >
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <script src="{{ asset('asset/jQuery-v3.6.0.min.js') }}"></script>
        <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js') }}"></script>
    </body>
</html>
