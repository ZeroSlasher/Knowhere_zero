<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>knowhere</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- PE Icon 7 Stoke -->
    <link href="fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="fonts/pe-icon-7-stroke/css/helper.css" rel="stylesheet">
    <!-- PE Icon Social -->
    <link href="fonts/pe-icon-social/css/pe-icon-social.css" rel="stylesheet">
    <link href="fonts/pe-icon-social/css/helper.css" rel="stylesheet">
    <!-- Quicksand Dash -->
    <link href="fonts/quicksand-dash/stylesheet.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.default.css" rel="stylesheet">
    <!-- Sweet Alert -->
    <link href="css/sweetalert.css" rel="stylesheet">
    <!-- Animate -->
    <link href="css/animate.min.css" rel="stylesheet">
    <!-- Nivo Lightbox -->
    <link href="scripts/Nivo-Lightbox/nivo-lightbox.css" rel="stylesheet">
    <link href="scripts/Nivo-Lightbox/themes/default/default.css" rel="stylesheet">
    <!-- NoUISlider -->
    <link href="css/jquery.nouislider.min.css" rel="stylesheet">
    <!-- Bootstrap Select -->
    <link href="css/bootstrap-select.min.css" rel="stylesheet">
    <!-- Style.css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
    @include('inc.lindex_head')
    <div class="responsive-menu">
        <a href="#" class="responsive-menu-close"><i class="fa fa-times"></i></a>
        <nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
    </div> <!-- end .responsive-menu -->

    <div class="section large transparent dark text-center" style="background-image: url('images/background01.jpg');">
        <div class="inner">
            <div class="container">
                <h1>Discover The City Gems</h1>
                <p class="lead">Find great places to stay, eat, shop, or visit from local experts.</p>
                <form method="GET" action="/searchaction">
                    @csrf
                    <div class="row">

                        <!-- end .col-sm-4 -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input type="text" name="loc" id="loc" autocomplete="off" placeholder="Location">
                                <i class="pe-7s-world"></i>
                                <div style="position: absolute;margin-top: 10px;" id="List">
                                </div>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .col-sm-4 -->
                        <div class="col-sm-6">
                            <div class="form-group">
                                <select class="selectpicker" name="cat" data-live-search="true">
                                    <option value selected>All categories</option>
                                    @isset($data)
                                    @foreach($data as $category)
                                    <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                                    @endforeach
                                    @endisset
                                </select>
                            </div>
                            <!-- end .form-group -->
                        </div>
                        <!-- end .col-sm-4 -->
                    </div>
                    <!-- end .row -->
                    <input type="submit" class="button" value="Search places ">
                </form>
                <div class="highlight-slider-wrapper">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="lead">Or browse the highlights</p>
                            <div class="highlight-slider">
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-food.png" alt="food">
                                        <div class="overlay">Food</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-lodging.png" alt="lodging">
                                        <div class="overlay">Lodging</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-culture.png" alt="culture">
                                        <div class="overlay">Culture</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-shopping.png" alt="shopping">
                                        <div class="overlay">Shopping</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-nightlife.png" alt="nightlife">
                                        <div class="overlay">Nightlife</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                                <div class="item">
                                    <a href="#" class="icon">
                                        <img src="images/highlight-drink.png" alt="drink">
                                        <div class="overlay">Drink</div>
                                    </a>
                                    <!-- end .icon -->
                                </div>
                                <!-- end .item -->
                            </div>
                            <!-- end .highlight-slider -->
                        </div>
                        <!-- end .col-md-8 -->
                    </div>
                    <!-- end .row -->
                </div>
                <!-- end .highlight-slider-wrapper -->
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->

    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">What are you interested in?<small>Explore some of the best tips from around the
                        city from our partners and friends.</small></h2>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category01.jpg');">
                            <div class="inner">
                                <img src="images/category-icon01.png" alt="icon">
                                <span class="number">8</span>
                                <span class="title">Cinema</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category02.jpg');">
                            <div class="inner">
                                <img src="images/category-icon02.png" alt="icon">
                                <span class="number">36</span>
                                <span class="title">Food</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category03.jpg');">
                            <div class="inner">
                                <img src="images/category-icon03.png" alt="icon">
                                <span class="number">26</span>
                                <span class="title">Drink</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category04.jpg');">
                            <div class="inner">
                                <img src="images/category-icon04.png" alt="icon">
                                <span class="number">16</span>
                                <span class="title">Lodging</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                    <div class="col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category05.jpg');">
                            <div class="inner">
                                <img src="images/category-icon05.png" alt="icon">
                                <span class="number">12</span>
                                <span class="title">Nightlife</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-sm-6 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category06.jpg');">
                            <div class="inner">
                                <img src="images/category-icon06.png" alt="icon">
                                <span class="number">4</span>
                                <span class="title">Visit</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                    <div class="col-md-3 col-sm-6">
                        <a href="#" class="category-box" style="background-image: url('images/category07.jpg');">
                            <div class="inner">
                                <img src="images/category-icon07.png" alt="icon">
                                <span class="number">39</span>
                                <span class="title">Shop</span>
                            </div> <!-- end .inner -->
                        </a> <!-- end .category-box -->
                    </div> <!-- end .col-md-3 -->
                </div> <!-- end .row -->
                <div class="text-center">
                    <a href="#" class="button">All Listings</a>
                </div> <!-- end .text-center -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->

    <div class="section light transparent" style="background-image: url('images/background02.jpg');">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">How it Works<small>Discover how EXploreCity can you help you find everything you
                        want.</small></h2>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon01.png" alt="icon" class="img-responsive center-block">
                            <h3>Choose<br>What To Do</h3>
                            <p>Looking for a cozy hotel to stay, a restaurant to eat, a museum to visit or a mall to do
                                some shopping?</p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div> <!-- end .services -->
                    </div> <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon02.png" alt="icon" class="img-responsive center-block">
                            <h3>Find<br>What You Want</h3>
                            <p>Search and filter hundreds of listings, read reviews, explore photos and find the perfect
                                spot.</p>
                            <div class="process"><i class="pe-7s-angle-right-circle"></i></div>
                        </div> <!-- end .services -->
                    </div> <!-- end .col-sm-4 -->
                    <div class="col-sm-4">
                        <div class="services">
                            <img src="images/services-icon03.png" alt="icon" class="img-responsive center-block">
                            <h3>Explore<br>Amazing Places</h3>
                            <p>Go and have a good time or even make a booking directly from the listing page. All of
                                those, thanks to ExploreCity!</p>
                        </div> <!-- end .services -->
                    </div> <!-- end .col-sm-4 -->
                </div> <!-- end .row -->
            </div> <!-- end .container -->
        </div> <!-- end .inner -->
    </div> <!-- end .section -->


    <div class="section light">
        <div class="inner">
            <div class="container">
                <h2 class="text-center">Our Newsletter<small>Get an extra 39% off for next your
                        holiday</small>
                </h2>
                <form action="" method="get" id="mc-embedded-subscribe-form" class="newsletter-form">
                    <input type="email" id="mce-EMAIL" name="EMAIL" placeholder="YourEmail@domain.com">
                    <button type="submit" id="mc-embedded-subscribe" name="subscribe" class="button"
                        disabled>Subscribe</button>
                </form>
            </div>
            <!-- end .container -->
        </div>
        <!-- end .inner -->
    </div>
    <!-- end .section -->

    <footer class="footer">
        <div class="top">
            <div class="left">
                <div class="logo"><a href="/"><img src="images/logo-dark.png" alt="Knowhere" class="img-responsive"></a>
                </div>
                <!-- end .logo -->
            </div>
            <!-- end .left -->
            <div class="social-icons">
                <a href=""><i class="pe-so-facebook"></i></a>
                <a href=""><i class="pe-so-twitter"></i></a>
                <a href=""><i class="pe-so-vimeo"></i></a>
                <a href=""><i class="pe-so-tripadvisor"></i></a>
                <a href=""><i class="pe-so-instagram"></i></a>
            </div>
            <div class="right"></div>
            <!-- end .left -->
        </div>
        <!-- end .top -->
        <div class="bottom">Copyright &copy; 2019. All Rights Reserved By ZeroSlasher</a>
        </div>
    </footer>
    <!-- end .footer -->

    <div class="login-wrapper">
        <div class="login">
            <form action="/login" method="post">
                @csrf
                <div class="form-group">
                    <input type="email" autocomplete="off" placeholder="Email Address" id="email" name="email" required>
                </div> <!-- end .form-group -->
                <div class="form-group">
                    <input type="password" required placeholder="Password" id="password" name="password"
                        onmouseover="this.type='text'" onmouseup="this.type='password'"
                        onmouseout="this.type='password'">
                </div> <!-- end .form-group -->
                <!-- <div class="right">
                    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                	</div> -->
                <div class="clearfix">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                    <div>
                        @if (Session::has('message'))
                        <div>
                            {{Session::get('message')}}
                        </div>
                        @endif
                    </div>
                    <a href="/forgotpwd" class="lost-password">Lost your password ?</a>
                </div> <!-- end .clearfix -->
                <div class="button-wrapper"><button type="submit" class="button">Login</button></div>
                <div class="text-center">
                    <p>Don't have an account ? <a href="#" class="signup-open">Sign up</a></p>
                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                        <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                        <a href="#"><img src="images/google-plus.png" alt="google plus"></a>
                    </div> <!-- end .social -->
                </div>
            </form>
        </div> <!-- end .login -->
    </div> <!-- end .login-wrapper -->

    <div class="signup-wrapper">
        <div class="signup">
            <form method="post" action="/register" onsubmit="return formValidation()">
                @csrf
                <center>
                    <p id="head" style="display: none;">All details are mandatory</p>
                </center>
                <div class="form-group">
                    <input type="text" placeholder="Name" id="name" name="name">
                </div>
                <p id="p1"></p> <!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Email Address" id="mail" name="mail">
                </div>
                <p id="p2"></p><!-- end .form-group -->
                <div class="form-group">
                    <input type="text" placeholder="Contact number" id="phone" name="phone">
                </div>
                <p id="p3"></p><!-- end .form-group -->
                <div class="form-group">
                    <input type="password" placeholder="Password" id="pwd" name="pwd" onmouseover="this.type='text'"
                        onmouseup="this.type='password'" onmouseout="this.type='password'">
                </div>
                <p id="p4"></p><!-- end .form-group -->
                <div class="button-wrapper"><input type="submit" class="button" value="Register"></div>
                <div class="text-center">
                    <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    <div class="social">
                        <p>Connect with Social Networks</p>
                        <a href=""><img src="images/facebook.png" alt="facebook"></a>
                        <a href=""><img src="images/twitter.png" alt="twitter"></a>
                        <a href=""><img src="images/google-plus.png" alt="google plus"></a>
                    </div> <!-- end .social -->
                </div>
            </form>
        </div> <!-- end .signup -->
    </div> <!-- end .signup-wrapper -->

    <div class="listing-wrapper">
        <div class="listing">
            <form method="POST" action="/requestlisting" id="rqstform" enctype="multipart/form-data">
                @csrf
                <div class="form-group1">
                    <input type="text" name='own_name' placeholder="Owner's name">
                </div>
                <div class="form-group1">
                    <input type="text" name='est_name' placeholder="Establishment name">
                </div>

                <div class="form-group1">
                    <select id="catSelect" name="catSelect" required>
                        <option disabled selected value> -- select Category -- </option>
                        @isset($data)
                        @foreach($data as $category)
                        <option value="{{$category->Cat_id}}">{{$category->catagory}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="subcat">
                        <option disabled selected value> -- select Sub-category -- </option>
                    </select>
                </div>

                <div class="form-group1">
                    <select id="state" name="state" required>
                        <option disabled selected value> -- select state -- </option>
                        @isset($state)
                        @foreach($state as $states)
                        <option value="{{$states->state_id}}">{{$states->state}}</option>
                        @endforeach
                        @endisset
                    </select>
                </div>

                <div class="form-group1">
                    <select name="district">
                        <option disabled selected value> -- select district -- </option>
                    </select>
                </div>

                <div class="form-group1">
                    <select name="city">
                        <option disabled selected value> -- select city -- </option>
                    </select>
                </div>
                <div class="form-group1">
                    <input type="text" name='mail' placeholder=" ContactEmail">
                </div>
                <div class="form-group1">
                    <input type="text" name='phone' placeholder="Contact Number">
                </div>
                <div class="form-group1">
                    <!-- <input type="text" placeholder="Proof of existance-documents upload field"> -->
                    <div class="text-center">
                        <label>Documents for Proof of existance</label>
                        <h6>Proof can be Copy of licences, Image of Establishment or any Valid and legal document</h6>

                        <input class=" file" name="proof1" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof1" />
                        <input class=" file" name="proof2" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof2" />
                        <input class=" file" name="proof3" type="file" accept=".pdf,.doc,.png.,.jpg" name="proof3" />
                    </div>
                </div>

                <div class="text-center">
                    <div class="gap">

                        <!-- <div class="verify-wrapper" hidden>
						<div class="verify">
						<div class="form-group">
						<div class="text-center">
						<p>enter Verification code sent to your email</p></div>
						<input type="text" placeholder="Verification code">
						</div>
						<div class="button-wrapper "><button type="submit" class="button">Verify</button></div>
						</div>
						</div> -->

                        <div class="button-wrapper verify-open"><button type="submit" name="submit"
                                class="button">Request verification</button></div>
                    </div>
                    <div class="text-center">
                        <p>Verification details will be sent via email</p>
                        <p>Already have an account? <a href="#" class="login-open">Log in</a></p>
                    </div>
                </div>
            </form>
        </div> <!-- end .signup -->
    </div> <!-- end .listing-wrapper -->

    <!-- jQuery -->
    <script src="js/jquery-3.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- google maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
    <!-- rich marker -->
    <script src="js/richmarker.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Countdown -->
    <script src="js/countdown.js"></script>
    <!-- Sweet Alert -->
    <script src="js/sweetalert.min.js"></script>
    <!-- Nivo Lightbox -->
    <script src="scripts/Nivo-Lightbox/nivo-lightbox.min.js"></script>
    <!-- NoUISlider -->
    <script src="js/jquery.nouislider.all.min.js"></script>
    <!-- Bootstrap Select -->
    <script src="js/bootstrap-select.min.js"></script>
    <!-- Nice Scroll -->
    <script src="js/jquery.nicescroll.min.js"></script>
    <!-- Scripts.js -->
    <script src="js/scripts.js"></script>
    <!-- ajax.js -->
    <script src="js/myajax.js"></script>
    <!-- formvalidate.js -->
    <script src="js/formvalidate.js"></script>

</body>

</html>