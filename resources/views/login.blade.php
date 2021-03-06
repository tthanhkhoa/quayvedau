<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Voguish a Blogging Category Flat Bootstarp Responsive Website Template | Login :: w3layouts</title>
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Voguish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" />
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        $(function () {
            $("#slider").responsiveSlides({
                auto: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });

    </script>

</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="index.html"><img src="{{ asset('images/logo.png') }}" class="img-responsive" alt=""></a>
        </div>


        <!-- script-for-nav -->
        <script>
            $( "span.menu" ).click(function() {
                $( ".head-nav ul" ).slideToggle(300, function() {
                    // Animation complete.
                });
            });
        </script>
        <!-- script-for-nav -->

        <div class="clearfix"> </div>


    </div>
</div>
<!-- header -->
<!-- login -->
<div class="container">
    <div class="login-page">

        <div class="account_grid">
            <div class="col-md-6 login-left wow fadeInLeft" data-wow-delay="0.4s">
                <h3>NEW CUSTOMERS</h3>
                <p>By creating an account with our store, you will be able to move through the checkout process faster,
                    store multiple shipping addresses, view and track your orders in your account and more.</p>
            </div>
            <div class="col-md-6 login-right wow fadeInRight" data-wow-delay="0.4s">
                <h3>REGISTERED CUSTOMERS</h3>
                <p>If you have an account with us, please log in.</p>
                <form method="post" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        <span>Email Address<label>*</label></span>
                        <input name="email" type="text">
                        <span style="color: red; font-weight: bold;">{!! $errors->first('email') !!}</span>
                    </div>
                    <div>
                        <span>Password<label>*</label></span>
                        <input name="password" type="password">
                        <span style="color: red; font-weight: bold;">{!! $errors->first('password') !!}</span>
                    </div>
                    <a class="forgot" href="#">Forgot Your Password?</a>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <!-- login -->

</div>
</body>
</html>