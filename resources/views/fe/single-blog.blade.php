<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Blog</title>
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
<div class="container">
    <div class="header">
        <div class="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" class="img-responsive" alt=""></a>
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
<!-- content -->
<div class="container">
    <div class="content-top">

        <div class="single">
            <div class="single-top">
                <img src="{{ asset('images/7.jpg') }}" class="img-responsive" alt="">

                <p class="sin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tinci arted.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliq usit e
                    adipiscing elit, sed diam nonummy nibh euismod tinci. Donec sed odio dui. Duis mollis, est non cons
                    commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Amet, consectetuer  diam teri
                    adipiscing elit, sed diam nonummy nibh euismod tinci.</p>
                <p class="sin">Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Donec ullamco elitider
                    per nulla non metus auctor fringilla. Donec id elit non mi porta gravi da at eget metus. Fusce dap gravi
                    ibus, tellus ac  cursus commodo, Nulla vitae elit libero, a torto ediri
                    pharetra augue. Donec ullamco per nulla non metus auctor fringilla.</p>

                <div class="respon">
                    <div class="artical-links">
                        <ul>
                            <li><small> </small><span>june 14, 2013</span></li>
                            <li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="blog-content-right">
                <div class="b-search">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </form>
                </div>
                <!--start-twitter-weight-->
                <div class="twitter-weights">
                    <h3>Tweet Widget</h3>
                    <div class="twitter-weight-grid">
                        <h4><span> </span>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
                        <i><a href="#">2 days ago</a></i>
                    </div>
                    <div class="twitter-weight-grid">
                        <h4><span> </span>John Doe</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
                        <i><a href="#">2 days ago</a></i>
                    </div>
                    <a class="twittbtn" href="#">See all Tweets</a>
                </div>
                <!--//End-twitter-weight-->
                <!-- start-tag-weight-->
                <div class="b-tag-weight">
                    <h3>Tags Weight</h3>
                    <ul>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">consectetur</a></li>
                        <li><a href="#">dolore</a></li>
                        <li><a href="#">aliqua</a></li>
                        <li><a href="#">sit amet</a></li>
                        <li><a href="#">ipsum</a></li>
                        <li><a href="#">Lorem</a></li>
                        <li><a href="#">consectetur</a></li>
                        <li><a href="#">dolore</a></li>
                        <li><a href="#">aliqua</a></li>
                        <li><a href="#">sit amet</a></li>
                        <li><a href="#">ipsum</a></li>
                    </ul>
                </div>
                <!---- //End-tag-weight---->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- content -->

    <div class="footer">
        <div class="col-md-3 foot-1">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="#">||   Lorem Ipsum passage</a></li>
                <li><a href="#">||   Finibus Bonorum et</a></li>
                <li><a href="#">||   Treatise on the theory</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Favorite Resources</h4>
            <ul>
                <li><a href="#">||   Characteristic words</a></li>
                <li><a href="#">||   combined with a handful</a></li>
                <li><a href="#">||   which looks reasonable</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>About Us</h4>
            <ul>
                <li><a href="#">||  Even slightly believable</a></li>
                <li><a href="#">||  Hidden in the middle</a></li>
                <li><a href="#">||  Ipsum therefore always</a></li>
            </ul>
        </div>
        <div class="col-md-3 foot-1">
            <h4>Custom Menu</h4>
            <ul>
                <li><a href="#">||  Internet tend to repeat</a></li>
                <li><a href="#">||  Alteration in some form</a></li>
                <li><a href="#">||  This book is a treatise</a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
        <div class="copyright">
            <p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
        </div>
    </div>
</div>
</body>
</html>