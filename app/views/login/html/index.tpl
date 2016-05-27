<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Soportando</title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="favicon.ico">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{$_public.styles}/bootstrap.min.css" />
        <link rel="stylesheet" href="{$_public.styles}/bootstrap-theme.min.css" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- Theme style -->
        <link rel="stylesheet" href="{$_public.styles}/AdminLTE.css">
        <link rel="stylesheet" href="{$_public.styles}/all-skins.css">
        <link rel="stylesheet" href="{$_public.styles}/main.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body ng-app="soportando" class="hold-transition skin-blue sidebar-mini">
        <div class="hold-transition login-page">
            <div class="login-box">
                {if $error}
                    <div class="alert alert-danger" style="color: red !important;" role="alert">{$error}</div>
                {/if}
                <div class="login-logo">
                    <a>Soportando</a>
                </div>
                <div class="login-box-body">
                    <p class="login-box-msg">Inicio de sesión</p>
                    <form role="form" action="{$_site}/login/init" method="POST">
                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" placeholder="Usuario" name="user">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Contraseña" name="pass">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <a href="#">Olvidé mi contraseña</a><br>
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                <input type="submit" class="btn btn-primary btn-block btn-flat" value="Ingresar" />
                            </div><!-- /.col -->
                        </div>
                    </form>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
        </div>
    </body>
</html>