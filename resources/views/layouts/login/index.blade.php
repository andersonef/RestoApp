<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>RestoApp - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description" />
        <meta content="themes-lab" name="author" />
        <link rel="shortcut icon" href="assets/img/favicon.png">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/ui.css" rel="stylesheet">
        <link href="assets/plugins/bootstrap-loading/lada.min.css" rel="stylesheet">
    </head>
    <body class="account" data-page="login">
        <!-- BEGIN LOGIN BOX -->
        <div class="container" id="login-block">
            <div class="row">
                <div class="col-sm-6 col-md-4 col-md-offset-4">
                    <div class="account-wall">
                        <i class="user-img icons-faces-users-03">RestoApp</i>
                        {!! Form::open(['url' => route('auth.store'), 'class' => 'form-signin', 'role' => 'form']) !!}{{--<form class="form-signin" role="form">--}}
                            <div class="append-icon">
                                {!! Form::text(
                                    'username',
                                    null,
                                    [
                                        'class' => 'form-control form-white username',
                                        'placeholder' => 'Usuário ou Email',
                                        'required' => ''
                                    ]) !!}
                                {{--<input type="text" name="name" id="name" class="form-control form-white username" placeholder="Usuário ou Email" required>--}}
                                <i class="icon-user"></i>
                            </div>
                            <div class="append-icon m-b-20">
                                {{--<input type="password" name="password" class="form-control form-white password" placeholder="Senha" required>--}}
                                {!! Form::password(
                                    'password',
                                    [
                                        'class'     => 'form-control form-white password',
                                        'placeholder' => 'Senha',
                                        'required' => ''
                                    ])
                                !!}
                                <i class="icon-lock"></i>
                            </div>
                            <button type="submit" id="submit-form" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Entrar</button>

                            {{--<div class="social-btn">
                                <button type="button" class="btn-fb btn btn-lg btn-block btn-primary"><i class="icons-socialmedia-08 pull-left"></i>Connect with Facebook</button>
                                <button type="button" class="btn btn-lg btn-block btn-blue"><i class="icon-social-twitter pull-left"></i>Login with Twitter</button>
                            </div>--}}
                            <div class="clearfix">
                                <p class="pull-left m-t-20"><a id="password" href="#">Esqueceu a senha?</a></p>
                                {{--<p class="pull-right m-t-20"><a href="user-signup-v1.html">New here? Sign up</a></p>--}}
                            </div>
                        {!! Form::close() !!}
                        <form class="form-password" role="form">
                            <div class="append-icon m-b-20">
                                <input type="email" name="email" class="form-control form-white email" placeholder="Endereço de Email" required>
                                <i class="icon-lock"></i>
                            </div>
                            <button type="submit" id="submit-password" class="btn btn-lg btn-danger btn-block ladda-button" data-style="expand-left">Enviar link de recuperação</button>
                            <div class="clearfix">
                                {{--<p class="pull-left m-t-20"><a id="login" href="#">Already got an account? Sign In</a></p>--}}
                                <p class="pull-right m-t-20"><a href="user-signup-v1.html">Realizar Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <script src="assets/plugins/jquery/jquery-1.11.1.min.js"></script>
        <script src="assets/plugins/jquery/jquery-migrate-1.2.1.min.js"></script>
        <script src="assets/plugins/gsap/main-gsap.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/backstretch/backstretch.min.js"></script>
        <script src="assets/plugins/bootstrap-loading/lada.min.js"></script>
        <script src="assets/js/pages/login-v1.js"></script>

        @if(Session::has('error'))
        <script type="text/javascript">
            alert('{!! Session::get('error') !!}');
        </script>
        @endif
    </body>
</html>