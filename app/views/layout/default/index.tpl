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
        <!-- DataTables -->
        <link rel="stylesheet" href="{$_public.lib}/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="{$_public.lib}/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

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
        <!--[if lte IE 8]>
          <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="wrapper" ng-view=""></div>
        {literal}
            <!-- Google Analytics: change UA-XXXXX-X to be your site's ID -->
            <!--     <script>
                   !function(A,n,g,u,l,a,r){A.GoogleAnalyticsObject=l,A[l]=A[l]||function(){
                   (A[l].q=A[l].q||[]).push(arguments)},A[l].l=+new Date,a=n.createElement(g),
                   r=n.getElementsByTagName(g)[0],a.src=u,r.parentNode.insertBefore(a,r)
                   }(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            
                   ga('create', 'UA-XXXXX-X');
                   ga('send', 'pageview');
                </script>-->
        {/literal}
        <!-- build:js(.) scripts/vendor.js -->
        <!-- Libs -->
        <script src="{$_public.lib}/jQuery-2.1.4.min.js"></script>
        <script src="{$_public.lib}/angular.min.js"></script>
        <script src="{$_public.lib}/bootstrap.min.js"></script>
        <script src="{$_public.lib}/angular-animate.min.js"></script>
        <script src="{$_public.lib}/angular-aria.min.js"></script>
        <script src="{$_public.lib}/angular-cookies.min.js"></script>
        <script src="{$_public.lib}/angular-messages.min.js"></script>
        <script src="{$_public.lib}/angular-resource.min.js"></script>
        <script src="{$_public.lib}/angular-route.min.js"></script>
        <script src="{$_public.lib}/angular-sanitize.min.js"></script>
        <script src="{$_public.lib}/angular-touch.min.js"></script>
        <script src="{$_public.lib}/icheck.min.js"></script>
        <script src="{$_public.lib}/ngStorage.min.js"></script>
        <script src="{$_public.lib}/interact.min.js"></script>
        <script src="{$_public.lib}/adminLTE.min.js"></script>
        <!-- DataTables -->
        <script src="{$_public.lib}/datatables/jquery.dataTables.min.js"></script>
        <script src="{$_public.lib}/datatables/dataTables.bootstrap.min.js"></script>
        <script src="{$_public.lib}/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <!-- EndLibs -->
        <!-- endbuild -->

        <!-- Controllers -->
        <script src="{$_public.scripts}/app.js"></script>
        <script src="{$_public.scripts}/controllers/main.js"></script>
        <script src="{$_public.scripts}/controllers/ticket.js"></script>
        <script src="{$_public.scripts}/controllers/admin/customer.js"></script>
        <script src="{$_public.scripts}/services/login.js"></script>
        <script src="{$_public.scripts}/services/company.js"></script>
        <script src="{$_public.scripts}/services/customer.js"></script>
        <script src="{$_public.scripts}/services/user.js"></script>
        <script src="{$_public.scripts}/services/ticket.js"></script>
        <!-- EndControllers -->
    </body>
</html>