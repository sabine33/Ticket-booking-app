<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
</head>

<body style="background-image:url('/img/ga.jpg');background-size:cover;background-repeat:no-repeat;height:100vh;">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 mx-auto">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="card col">
                                <a href="/">
                                    <h4 class="my-3 text-info text-center">Flights Admin Login</h4>
                                </a>
                                <img src="/img/logo.jpg" style="display:inline-block;width:200px;text-align:center;margin:0px auto" class="text-center my-2" />
                                <form action="{{url('post-login')}}" method="POST" id="logForm">
                                    {{ csrf_field() }}
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif

                                    <div class="form-label-group">
                                        <label for="inputEmail">Email address</label>
                                        <input type="email" name="email" id="inputEmail" value="admin@test.com" class="form-control" placeholder="Email address">
                                        @if ($errors->has('email'))
                                        <span class="error">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-label-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" name="password" value="admin" id="inputPassword" class="form-control" placeholder="Password">
                                        @if ($errors->has('password'))
                                        <span class="error">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold my-4" type="submit">Sign In</button>
                                    <!-- <div class="text-center">If you have an account?
                                        <a class="small" href="{{url('registration')}}">Sign Up</a></div> -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>