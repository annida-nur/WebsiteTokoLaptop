<!DOCTYPE html>
<html>
    <head>
        <title>LOG IN</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../node_modules/bootstrap/dist/css/css.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../node_modules/bootstrap/dist/assets/Powpow.png" rel="icon">
        <style>
            body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
            body, html {
                height: 100%;
               line-height: 1.8;
            }
            .bar .button {padding: 16px;}           
        </style>
    </head>
    <body>
        <!-- Navbar (sit on top) -->
        <div class="top">
            <div class="bar blue-grey card">
                <a class="bar-item button wide"> <img src="../node_modules/bootstrap/dist/assets/Powpow.png" style="width: 30px;"> PowPow</a>
            </div>
        </div>

        <!--Login-->
        <div class="g6">
            <div class="center">
                <div class="container" style="padding:80px 16px" id="team">
                <br>
                    <h3>IT'S NICE TO SEE YOU AGAIN</h3>
                    <div class="row-padding:border-amber" style="margin-top:40px;">
                        <div class="card">
                            <div class="container">
                                <br><img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" alt="image" style="width:50%">
                                <br><br>
                                @if(session()->has('pesan'))
                                <div class="alert alert-success">
                                {{ session()->get('pesan') }}
                                </div>
                                @endif
                                <form action="{{ route('login.process') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                    <input type="text"
                                    class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old('username') }}" placeholder="Username">
                                    @error('username')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <div class="form-group">
                                    <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    id="password" name="password" value="{{ old('password') }}" placeholder="Password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Masuk</button>
                                </form>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="center dark-grey" style="padding:1px 16px">
            <p>Powered by PowPow Teams</p>
        </footer>
    </body>
</html>