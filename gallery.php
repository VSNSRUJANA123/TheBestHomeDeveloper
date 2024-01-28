<!DOCTYPE html>
<html>


<meta charset="utf-8">
<title>Gallery</title>
<!-- Stylesheets -->
<link href="./assets/css/bootstrap.css" rel="stylesheet">
<link href="./assets/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="./assets/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
    @media only screen and (max-width: 700px) {

        .c1 {
            display: none !important;
        }

        .pull-right {
            display: flex !important;
            text-align: center !important;
            padding: 0 !important;
            margin-bottom: 0 !important;
            justify-content: space-between;

        }
    }

    @media only screen and (max-width: 480px) {

        .info-box {
            display: none !important;
        }
    }
</style>
</head>

<body>
    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header">

            <!--Header-Upper-->
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">

                        <div class="pull-left logo-outer">
                            <div class="logo"><a href="https://besthomedevelopers.com/"><img src="./assets/images/logo2.png" alt="" title="Homestate" width="100px" height="100px"></a></div>
                        </div>

                        <div class="pull-right upper-right clearfix">

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-technology-2"></span></div>
                                <ul>
                                    <li><strong>9095991999</strong></li>
                                    <li><a href="#">9344663114</a></li>
                                    <li><a href="https://besthomedevelopers.com/" style="font-size:12px;">besthomedevelopers.com</a></li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box">
                                <div class="icon-box"><span class="flaticon-location-2"></span></div>
                                <ul>
                                    <li><strong>Coimbatore</strong></li>
                                    <li>2D, karuvallur main road, Kovilpalayam Coimbatore-641107</li>
                                </ul>
                            </div>

                            <!--Info Box-->
                            <div class="upper-column info-box c1">
                                <div class="social-links-one">
                                    <a href="#"><span class="fa fa-facebook-f"></span></a>
                                    <a href="#"><span class="fa fa-twitter"></span></a>
                                    <a href="#"><span class="fa fa-google-plus"></span></a>
                                    <a href="#"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!--Header-Lower-->
            <div class="header-lower">
                <!--Background Layer-->
                <div class="bg-layer"></div>


                <div class="auto-container">
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="home.php">Home</a>
                                    </li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="project.php">On Going Projects</a></li>
                                    <li class="current dropdown"><a href="#">Gallery</a>
                                    </li>
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <div class="btn-outer"><a href="#" class="theme-btn visit-btn">Schedule Visit</a></div>

                    </div>
                </div>
            </div>


            <!--Sticky Header-->
            <div class="sticky-header">
                <div class="auto-container clearfix">
                    <!--Logo-->
                    <div class="logo pull-left">
                        <a href="#" class="img-responsive"><img src="assets/images/logo2.png" alt="" title="Homestate" width="50px" height="50px"></a>
                    </div>

                    <!--Right Col-->
                    <div class="right-col pull-right">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="dropdown"><a href="home.php">Home</a>
                                    </li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="project.php">Take Tour</a></li>
                                    <li class="current dropdown"><a href="gallery.php">Gallery</a>
                                    </li>
                                    </li>
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                    </div>

                </div>
            </div>
            <!--End Bounce In Header-->

        </header>
        <!--End Main Header -->


        <!--Page Title-->
        <section class="page-title" style="background-image:url(./assets/images/GBanner1.jpeg);">
            <div class="auto-container">
                <div class="sec-title">
                    <h1>Gallery</h1>
                </div>
            </div>
        </section>

        <!--Breadcrumb-->
        <div class="breadcrumb-outer">
            <div class="auto-container">
                <div class="bread-crumb text-center"><a href="home.php">Home</a> / <a href="#" class="current">Gallery</a></div>
            </div>
        </div>


        <!--Gallery Section-->
        <section class="gallery-section">
            <div class="auto-container">

                <!--Sortable Masonry-->
                <div class="sortable-masonry mixed-gallery-section">

                    <!--Filter-->
                    <div class="filters text-center">
                        <ul class="filter-tabs filter-btns clearfix">
                            <li class="active filter" data-role="button" data-filter=".all">All</li>
                            <li class="filter" data-role="button" data-filter=".bedrooms">Bedrooms</li>
                            <li class="filter" data-role="button" data-filter=".bathrooms">Bathrooms</li>
                            <li class="filter" data-role="button" data-filter=".kitchen">Kitchen</li>
                            <li class="filter" data-role="button" data-filter=".garage">Garage</li>
                            <li class="filter" data-role="button" data-filter=".basement">Basement</li>
                        </ul>
                    </div>


                    <div class="items-container clearfix">

                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item small-block all garage basement">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/1.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/1.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item small-block all bedrooms bathrooms kitchen garage basement">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/2.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/2.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item small-block all kitchen garage basement">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/3.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/3.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item small-block all bedrooms bathrooms kitchen">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/4.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/4.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item small-block all bathrooms kitchen garage">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/5.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/5.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Default Portfolio Item-->
                        <div class="default-portfolio-item masonry-item big-block all bedrooms bathrooms basement">
                            <div class="inner-box">
                                <figure class="image-box"><img src="./assets/images/gallery/6.jpg" alt=""></figure>
                                <!--Overlay Box-->
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <h3><a href="#">BEDROOM</a></h3>
                                            <a href="./assets/images/gallery/6.jpg" class="lightbox-image image-link" title="Image Caption Here"><span class="icon flaticon-cross"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!--End Sortable Masonry-->

            </div>

        </section>



        <!--Call To Action-->
        <section class="call-to-action">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-md-9 col-sm-12 col-xs-12">
                        <h2>Subcribe for Newsletter</h2>
                        There are many variations of passages of Lorem Ipsum available but the majority have
                    </div>
                    <!--Column-->
                    <div class="column col-md-3 col-sm-12 col-xs-12">
                        <div class="text-right padd-top-20">
                            <a href="#" class="theme-btn btn-style-two">Subscribe Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--Main Footer-->
        <footer class="main-footer" style="background-image:url(./assets/images/background/footer-bg.jpg);">

            <!--Footer Upper-->
            <div class="footer-upper">
                <div class="auto-container">
                    <div class="row clearfix">

                        <!--Two 4th column-->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                    <div class="footer-widget about-widget">
                                        <div class="logo"><a href="https://besthomedevelopers.com/" style="position: relative;
    text-align: -webkit-center;"><img src="assets/images/logo1.jpg" class="img-responsive" alt="" width="100px" height="100px" style="margin-top:-13px;"></a></div>
                                        <div class="text">
                                            <p>BEST HOME DEVELOPERS is a Promoter, Construction and Infrastructure development company based in Coimbatore.</p>
                                        </div>

                                        <div class="social-links clearfix">
                                            <a href="#" class="facebook img-circle"><span class="fa fa-facebook-f"></span></a>
                                            <a href="#" class="twitter img-circle"><span class="fa fa-twitter"></span></a>
                                            <a href="#" class="google-plus img-circle"><span class="fa fa-google-plus"></span></a>
                                            <a href="#" class="linkedin img-circle"><span class="fa fa-pinterest-p"></span></a>
                                            <a href="#" class="linkedin img-circle"><span class="fa fa-instagram"></span></a>
                                        </div>

                                    </div>
                                </div>
                                <!--Footer Column-->
                                <div class="col-lg-6 col-sm-6 col-xs-12 column">
                                    <div class="footer-widget tweets-widget">
                                        <h2>Latest Tweets</h2>
                                        <div class="tweet">
                                            <div class="icon"><span class="fa fa-twitter"></span></div>
                                            <div class="content"><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                            <div class="time">July 2, 2016</div>
                                        </div>

                                        <div class="tweet">
                                            <div class="icon"><span class="fa fa-twitter"></span></div>
                                            <div class="content"><a href="#">If you need a crown or lorem an implant you will pay it gap it</a></div>
                                            <div class="time">July 1, 2016</div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--Two 4th column End-->

                        <!--Two 4th column-->
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">

                                <!--Footer Column-->
                                <div class="col-lg-5 col-sm-6 col-xs-12 column">
                                    <h2>Quick Links</h2>
                                    <div class="footer-widget links-widget">
                                        <ul>
                                            <li><a href="#">Service</a></li>
                                            <li><a href="#">FAQ</a></li>
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">Privacy policy</a></li>
                                            <li><a href="#">Support</a></li>
                                            <li><a href="#">Contact Us</a></li>
                                        </ul>

                                    </div>
                                </div>

                                <!--Footer Column-->
                                <div class="col-lg-7 col-sm-6 col-xs-12 column">
                                    <div class="footer-widget news-widget">
                                        <h2>Latest News</h2>

                                        <!--News Post-->
                                        <div class="news-post">
                                            <div class="news-content">
                                                <figure class="image-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""></figure>
                                                <h4><a href="#">Quality House</a></h4>
                                                <div class="text"><a href="#">Get Best Home in Cheap..</a></div>
                                            </div>
                                            <div class="time">June 2, 2016</div>
                                        </div>

                                        <!--News Post-->
                                        <div class="news-post">
                                            <div class="news-content">
                                                <figure class="image-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""></figure>
                                                <h4><a href="#">Quality House</a></h4>
                                                <div class="text"><a href="#">Get Best Home in Cheap..</a></div>
                                            </div>
                                            <div class="time">June 2, 2016</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Two 4th column End-->

                    </div>

                </div>
            </div>

            <!--Footer Bottom-->
            <div class="footer-bottom">
                <div class="auto-container clearfix">
                    <!--Copyright-->
                    <div class="copyright text-center">Theme Created By <a href="https://ambionsoftwares.com/"> &copy;Ambion Softwares</a> with love</div>
                </div>
            </div>

        </footer>


    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon flaticon-building"></span></div>


    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.fancybox.pack.js"></script>
    <script src="./assets/js/isotope.js"></script>
    <script src="./assets/js/owl.js"></script>
    <script src="./assets/js/wow.js"></script>
    <script src="./assets/js/script.js"></script>
</body>


</html>