<?php
    require "assets/include/lessc.inc.php";
    $less = new lessc;
    $less->checkedCompile("assets/less/main.less", "assets/css/main.css");
?>

<!doctype html>
<html class="no-js" lang="en" ng-app="EmailApp">

    <head>

        <meta content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title>Boilerplate</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- HTML5 SHIV -->
        <!--[if lt IE 9]><script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

        <!-- CSS FILES -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.0/animate.min.css"/>
        <link rel="stylesheet" href="assets/css/shame.css"/>
        <link rel="stylesheet" href="assets/css/main.css"/>

        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        
        <!-- Modernizr -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

    </head>

    <body>
        <!--[if lt IE 9]>
            <div class="ie-error">
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            </div>
        <![endif]-->


        <!-- /Nav -->
        <nav>

            

        </nav>
        <!-- /Nav -->
        <!-- /header -->
        <header><!--Check core.custom.js for full--></header>
        <!-- /header -->

        <main class="main" role="main">
            <div class="container">
                <div class="col-md-12" ng-view>
                    
                </div>
            </div>
        </main>

        


        
        <footer>
            <p>&copy; n1ck 2015</p>
        </footer>



        <!-- Vendor libraries -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <!-- Application Files -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/controllers/inbox.js"></script>
        <script src="assets/js/factories/InboxFactory.js"></script>

        <!-- Custom js Files -->
        <script src="assets/js/core.plugins.js"></script>
        <script src="assets/js/core.main.js"></script>





        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
        
    </body>

</html>

