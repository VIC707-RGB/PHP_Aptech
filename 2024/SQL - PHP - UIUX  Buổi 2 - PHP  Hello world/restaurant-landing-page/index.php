<?php require_once('php/data.php')  ?>

<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from quomodosoft.com/html/wehungry/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2023 02:47:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>WeHangry</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />
    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/timepicker.css">

    <!-- Revolution-Stylesheets --->
    <link rel="stylesheet" href="rs/css/revolution_style.css">
    <link rel="stylesheet" href="rs/css/rs-settings.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/space.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target=".mainmenu-area">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="preloader">
        <div class="sk-wave">
            <div class="sk-rect sk-rect1"></div>
            <div class="sk-rect sk-rect2"></div>
            <div class="sk-rect sk-rect3"></div>
            <div class="sk-rect sk-rect4"></div>
            <div class="sk-rect sk-rect5"></div>
        </div>
    </div>
    <header class="relative text-white" id="home">
        <!--Mainmenu-Area-->
        <nav class="navbar navbar-inverse navbar-fixed-top mainmenu-area smoth-scroll">
            <div class="container">
                <div class="navbar-header">
                    <a href="#home" class="navbar-brand"><img src="<?php echo $logo ?>" alt=""></a>
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mainmenu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#event">Events</a></li>
                        <li><a href="#book-table">Book A Table</a></li>
                        <li><a href="#team">Team</a></li>
                        <li><a href="#blog">Blog</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Mainmenu-Area / -->
        <!-- Revolution Slider -->
        <div id="slider" class="tp-banner-container index-rev-slider clearfix">
            <div class="round-bottom"></div>
            <div class="tp-banner">
                <ul>
                    <!-- Slide Right
					============================================= -->
                    <li data-transition="fade" data-slotamount="6" data-thumb="">
                        <img src="images/slide/bg-1.jpg" alt="image" />
                        <div class="caption sft big_white" data-x="260" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong> Feel good Diner Menu </strong></div>
                        <div class="caption sfb medium_grey text-center" data-x="140" data-y="350" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sed, aspernatur optio ad libero <br>porro nisi est a, voluptatibus vitae!</div>
                        <div class="caption sfb" data-x="492" data-y="440" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="index5.html" class="bttn white">Read More</a></div>
                    </li>
                    <!-- Slide Right
					============================================= -->
                    <li data-transition="fade" data-slotamount="6" data-thumb="">
                        <img src="images/slide/bg-2.jpg" alt="image" />
                        <div class="caption sft big_white" data-x="260" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>Join Our Steak Club</strong></div>
                        <div class="caption sfb medium_grey text-center" data-x="140" data-y="350" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sed, aspernatur optio ad libero <br>porro nisi est a, voluptatibus vitae!</div>
                        <div class="caption sfb" data-x="492" data-y="440" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="index5.html" class="bttn white">Read More</a></div>
                    </li>
                    <!-- Slide Right
					============================================= -->
                    <li data-transition="fade" data-slotamount="6" data-thumb="">
                        <img src="images/slide/bg-3.jpg" alt="image" />
                        <div class="caption sft big_white" data-x="130" data-y="260" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>Our Summer Menu Has Arrived</strong></div>
                        <div class="caption sfb medium_grey text-center" data-x="140" data-y="350" data-speed="1500" data-start="2500" data-easing="easeOutExpo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint sed, aspernatur optio ad libero <br>porro nisi est a, voluptatibus vitae!</div>
                        <div class="caption sfb" data-x="492" data-y="440" data-speed="2000" data-start="3000" data-easing="easeOutExpo"><a href="index5.html" class="bttn white">Read More</a></div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Revolution Slider / -->
    </header>
    <section class="relative" id="about">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <h3 class="page-title"><?php echo $about_label ?></h3>
                    <h4 class="page-subtitle"><?php echo $about_description ?></h4>
                    <p>Dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p>Suspendisse pulvinar est eget odio porttitor molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.</p>
                    <div class="space-20"></div>
                    <a href="#" class="bttn black">Read More</a>
                </div>
                <div class="hidden-xs col-sm-6">
                    <div class="chif-story relative text-center">
                        <img src="images/about/about-2.jpg" class="dark-image" alt="">
                        <div class="vcenter text-center">
                            <a href="#" class="bttn tr white">Restautant Story</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-80"></div>
    </section>
    <!--Video-Section-->
    <section class="relative text-white">
        <div class="section-bg color hidden visible-xs">
            <div class="section-bg bg1"></div>
        </div>
        <div class="section-video hidden-xs">
            <video autoplay id="bgvideo" loop>
                <source src="http://quomodotheme.website/video/restaurent-1.webm" type="video/webm">
            </video>
        </div>
        <div class="space-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="page-title">Surprise For Your Plate</h2>
                    <div class="space-20"></div>
                    <div class="vd-icon">
                        <i class="icofont icofont-restaurant"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </section>
    <!--Video-Section / -->
    <!--special-area-->
    <section class="relative">
        <div class="space-100"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2 class="page-title">This Week Special</h2>
                </div>
            </div>
            <div class="space-40"></div>
            <div class="row text-white">
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-1.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-2.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-3.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-4.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-5.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="single-special relative">
                        <img src="images/special/sp-6.jpg" alt="">
                        <div class="vcenter text-center">
                            <div class="special-dtls">
                                <h3>For a sweet treat</h3>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                <a href="#" class="bttn tr white">Read more</a>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
    </section>
    <!--special-area / -->
    <!--Menu-Area-->
    <section class="relative" id="menu">
        <div class="space-100"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2 class="page-title">Menu Card</h2>
                </div>
            </div>
            <div class="space-40"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu1.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Fried Egg Sandwich</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;19.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu2.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">French Crostini</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;45.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu3.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Redwine and Colddrinks</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;55.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu4.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Redwine and Colddrinks</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;55.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu5.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Lemon Yogurt Parfait</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;45.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu6.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Fried Egg Sandwich</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;48.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu7.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Multigrain Hot Cereal</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;58.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu8.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Multigrain Hot Cereal</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;65.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu9.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Pizza Hot Chilli</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;85.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="single-menu">
                        <div class="media">
                            <div class="media-left">
                                <div class="menu-img" style="background-image: url('images/menu/menu10.png')">
                                    <img src="images/menu/ovr.png" alt="">
                                </div>
                            </div>
                            <div class="media-right">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <h3 class="menu-title">Branch Special</h3>
                                            </a>
                                        </td>
                                        <td>
                                            <div class="menu-rate">&#36;96.00</div>
                                        </td>
                                    </tr>
                                </table>
                                <p>Layered with two fried eggs, roasted tomatoes, basil</p>
                            </div>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </section>
    <!--Menu-Area / -->
    <!--Plan-Area-->
    <section class="relative text-white">
        <div class="section-bg color">
            <div class="section-bg plan-bg" style="background-image: url('images/sc-2.jpg')"></div>
        </div>
        <div class="space-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2  text-center">
                    <div class="single-plan relative">
                        <h2 class="plan-title">Birthday Party</h2>
                        <h5 class="plan-subtitle">TODAY FROM 7 PM</h5>
                        <div class="space-20"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse pulvinar est eget odio porttitor molestie. Vestibulum id dui quis erat vehicula pulvinar. Duis eu felis justo, vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.onsectetur adipiscing elit. vitae viverra dui. Pellentesque venenatis mi vel sapien adipiscing venenatis.</p>
                        <a href="#" class="bttn tr golden">Book A Table</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </section>
    <!--Plan-Area / -->
    <!--Table-Gallery-->
    <section class="relative" id="event">
        <div class="space-100"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2 class="page-title">Events</h2>
                </div>
            </div>
            <div class="space-40"></div>
            <div class="row text-white">
                <div class="col-xs-12">
                    <div class="special-list">
                        <div class="single-special relative">
                            <img src="images/special/sp-1.jpg" alt="">
                            <div class="vcenter text-center">
                                <div class="special-dtls">
                                    <a href="#" class="glr-btn"><i class="icofont icofont-external-link"></i></a>
                                    <h4>Adamas Birthday</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-special relative">
                            <img src="images/special/sp-2.jpg" alt="">
                            <div class="vcenter text-center">
                                <div class="special-dtls">
                                    <a href="#" class="glr-btn"><i class="icofont icofont-external-link"></i></a>
                                    <h4>Adamas Birthday</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-special relative">
                            <img src="images/special/sp-3.jpg" alt="">
                            <div class="vcenter text-center">
                                <div class="special-dtls">
                                    <a href="#" class="glr-btn"><i class="icofont icofont-external-link"></i></a>
                                    <h4>Adamas Birthday</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                </div>
                            </div>
                        </div>
                        <div class="single-special relative">
                            <img src="images/special/sp-4.jpg" alt="">
                            <div class="vcenter text-center">
                                <div class="special-dtls">
                                    <a href="#" class="glr-btn"><i class="icofont icofont-external-link"></i></a>
                                    <h4>Adamas Birthday</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed tincidunt ut</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Table-Gallery / -->
    <!--Book-A-Table-->
    <section class="relative" id="book-table">
        <div class="space-100"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2 class="page-title">Book a table</h2>
                    <div class="space-20"></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolor.</p>
                    <div class="space-30"></div>
                    <div class="book-form">
                        <form action="#" id="booktable">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-name" class="sr-only">Name</label>
                                        <input type="text" class="form-control" id="book-name" placeholder="Name_">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-email" class="sr-only">email</label>
                                        <input type="text" class="form-control" id="book-email" placeholder="Email_">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-phone" class="sr-only">phone</label>
                                        <input type="text" class="form-control" id="book-phone" placeholder="Phone_">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-guest" class="sr-only">guest</label>
                                        <input type="text" class="form-control" id="book-guest" placeholder="Guest (Amount)">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-date" class="sr-only">date</label>
                                        <input type="text" class="form-control" id="book-date" placeholder="Date">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="form-group">
                                        <label for="book-time" class="sr-only">time</label>
                                        <input type="text" class="form-control" id="book-time" placeholder="Time">
                                    </div>
                                    <div class="space-10"></div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="space-20"></div>
                                    <button type="submit" class="bttn black">Book A Table</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Book-A-Table / -->
    <!--Shafes-Team-->
    <section class="relative" id="team">
        <div class="space-100"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2 class="page-title">Our Shafes</h2>
                </div>
            </div>
            <div class="space-40"></div>
            <div class="row img-full">
                <div class="col-xs-12 col-sm-4">
                    <div class="relative single-shafe">
                        <img src="images/team/team-1.jpg" alt="">
                        <ul class="list-unstyled shafe-socil">
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                        <div class="shafe-dtls">
                            <h4 class="shafe-name">RANDY CRISHEN</h4>
                            <h5 class="shafe-pos">Senior Chief Supervisor</h5>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="relative single-shafe">
                        <img src="images/team/team-2.jpg" alt="">
                        <ul class="list-unstyled shafe-socil">
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                        <div class="shafe-dtls">
                            <h4 class="shafe-name">RANDY CRISHEN</h4>
                            <h5 class="shafe-pos">Senior Chief Supervisor</h5>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="relative single-shafe">
                        <img src="images/team/team-3.jpg" alt="">
                        <ul class="list-unstyled shafe-socil">
                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                        </ul>
                        <div class="shafe-dtls">
                            <h4 class="shafe-name">RANDY CRISHEN</h4>
                            <h5 class="shafe-pos">Senior Chief Supervisor</h5>
                        </div>
                    </div>
                    <div class="space-30"></div>
                </div>
            </div>
        </div>
    </section>
    <!--Shafes-Team / -->
    <!--Blog-Area-->
    <section class="relative" id="blog">
        <div class="space-100"></div>
        <div class="container">
            <div class="row text-center">
                <div class="col-xs-12">
                    <h2 class="page-title">Blog News</h2>
                </div>
            </div>
            <div class="space-40"></div>
            <div class="row text-white">
                <div class="col-xs-12">
                    <div class="blogs">
                        <div class="single-blog relative">
                            <div class="section-bg color">
                                <div class="section-bg" style="background-image: url(images/blog/blog-1.jpg);"></div>
                            </div>
                            <div class="post-date">September 25, 20017 <span class="category"><a href="#">Food</a></span></div>
                            <div class="space-10"></div>
                            <a href="#">
                                <h3>Chef Best Dishes</h3>
                            </a>
                            <div class="space-10"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a href="blog.html" class="readmore">Read More</a>
                        </div>
                        <div class="single-blog relative">
                            <div class="section-bg color">
                                <div class="section-bg" style="background-image: url(images/blog/blog-2.jpg)"></div>
                            </div>
                            <div class="post-date">September 25, 20017 <span class="category"><a href="#">Food</a></span></div>
                            <div class="space-10"></div>
                            <a href="#">
                                <h3>Chef Best Dishes</h3>
                            </a>
                            <div class="space-10"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                            <a href="blog.html" class="readmore">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-100"></div>
    </section>
    <!--Blog-Area / -->
    <!--Footer-Area-->
    <footer class="relative black-bg text-white">
        <div class="space-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="media">
                        <div class="media-left">
                            <div class="md-icon">
                                <i class="icofont icofont-restaurant-menu"></i>
                            </div>
                        </div>
                        <div class="media-right media-middle">
                            <h5 class="text-uppercase margin0">Opening Houres</h5>
                        </div>
                    </div>
                </div>
                <div class="space-30"></div>
                <div class="col-xs-12">
                    <div class="table-responsive open-hour-menu">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span>Monday</span>10:00 - 20:00</td>
                                    <td><span>Tuedays</span>10:00 - 20:00</td>
                                    <td><span>Wednesdays</span>10:00 - 20:00</td>
                                    <td><span>Thursdays</span>10:00 - 20:00</td>
                                    <td><span>Friday</span>10:00 - 20:00</td>
                                    <td><span>Saturdays</span>10:00 - 20:00</td>
                                    <td><span>Sunday</span>10:00 - 15:00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="space-20"></div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive address">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th><span>Address</span></th>
                                    <th><span>Phone</span></th>
                                    <th><span>E-Mail</span></th>
                                    <th><span>Social</span></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <td>
                                        <p><strong>WeHungry</strong> Restaurant
                                            <br> 22 ST Block, New York, NY 152640</p>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><a href="#">+ 1234-555-666</a></li>
                                            <li><a href="#">+ 1234-555-666</a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-unstyled">
                                            <li><a href="#">info@wehungry.com</a></li>
                                            <li><a href="#">info@wehungry.com</a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul class="list-inline list-unstyled footer-social">
                                            <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-social-linkedin"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-social-google-plus"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-social-google-buzz"></i></a></li>
                                            <li><a href="#"><i class="icofont icofont-social-feedburner"></i></a></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <p>© Copyright 2017 <a href="#">themeuk</a>, All Rights Reserved.
                                            <br> Crafted with passion and by Sajibdesigns</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </footer>
    <!--Footer-Area / -->
    <!--Vendor-JS-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!--Plugin-JS-->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/magnific-popup.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/rs-slider.js"></script>
    <script src="js/timepicker.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/datepair.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/jquery.lettering.js"></script>
    <script src="js/jquery.textillate.js"></script>
    <script src="js/plugins.js"></script>

    <!-- Themepunce-Scripts-File --->
    <script src="rs/js/themepunch.revolution.min.js"></script>
    <script src="rs/js/themepunch.plugins.min.js"></script>

    <!--Main-active-JS-->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from quomodosoft.com/html/wehungry/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Dec 2023 02:48:48 GMT -->
</html>