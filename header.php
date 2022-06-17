<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Atoum - Digitaliser votre service</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />

    <link rel="stylesheet" href="assets/css/vendor/icofont.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/aos.css" />
    <link rel="stylesheet" href="assets/css/plugins/selectric.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->

    <!--  Minified  css  -->

    <!--  # vendor min css,plugins min css,style min css -->

    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
<link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
<link rel="stylesheet" href="assets/css/plugins/aos.css" />
<link rel="stylesheet" href="assets/css/plugins/selectric.css" />
<link rel="stylesheet" href="assets/css/style.min.css" /> -->

</head>


<body>
    <!-- Modal -->
    <div class="modal offcanvas-modal fade" id="offcanvas-modal">
        <div class="modal-dialog offcanvas-dialog">
            <div class="modal-content">
                <div class="modal-header offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- offcanvas-form-wrap start -->
                <div class="offcanvas-form-wrap">
                    <form action="#" class="offcanvas-form position-relative">
                        <input class="form-control" type="text" placeholder="Enter your search key ... " />
                        <button class="btn btn-warning">Aller à</button>
                    </form>
                </div>
                <!-- offcanvas-form-wrap end -->
                <!-- offcanvas-menu start -->
                <nav id="offcanvas-menu" class="offcanvas-menu">
                    <ul>
                        <li>
                            <a href="index.html">Acceuil</a>
                            <!-- add your sub menu here -->
                        </li>
                        <li>
                            <a href="service-details.html">Services</a>
                        </li>
                        <li>
                            <a href="case-details.html">Etude de cas</a>
                        </li>
                            <!--                         <li>
                            <a href="case-details.html">Blog</a>
                        </li> -->
                         
                     
                        <li>
                            <a href="contact-us.html">Contact</a>
                        </li>
                    </ul>

                    <div class="offcanvas-social">
                        <ul>
                            <li>
                                <a href="#"><i class="icofont-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-skype"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icofont-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- offcanvas-menu end -->

                <p class="text-gradient mt-3">Passez au digital plus efficacement</p>
            </div>
        </div>
    </div>

    <header class="header">
        <div class="header-top bg-primary">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col col-lg-4 d-none d-lg-block">
                        <ul class="header-social-links d-flex flex-wrap align-items-center">
                            <li class="social-link-item"><a href="#" class="social-link"><i class="icofont-facebook"></i></a></li>
                            <li class="social-link-item"><a href="#" class="social-link"><i class="icofont-twitter"></i></a></li>
                            <li class="social-link-item"><a href="#" class="social-link"><i class="icofont-skype"></i></a></li>
                            <li class="social-link-item"><a href="#" class="social-link"><i class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-none d-md-block">
                        <p class="d-flex flex-wrap align-items-center text-gradient"><span class="hr-border d-none d-xl-block"></span>Nous participons à votre transformation digital</p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <ul class="select-box d-flex flex-wrap align-items-center justify-content-center justify-content-md-end">
                            <li class="select-item"><a href="tel:0123456789">Cell: 0123456789</a></li>
                            <li class="select-item">
                                <select class="form-select w-auto">
                                    <option selected>English</option>
                                    <option value="1">Français</option>
                                    <option value="2">English</option>
                                    <option value="3">Français</option>
                                </select>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div id="active-sticky" class="header-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <a href="index.html" class="brand-logo">
                            <img src="assets/images/logo/logo.png" alt="brand logo" />
                        </a>
                    </div>
                    <div class="col-auto">
                        <a class="btn btn-warning btn-hover-warning d-none d-sm-inline-block d-lg-none" href="blog-details.html">Audit de site web <i class="icofont-arrow-right"></i>
                        </a>

                        <button type="button" class="btn btn-warning offcanvas-toggler" data-bs-toggle="modal" data-bs-target="#offcanvas-modal">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                        <nav class="d-none d-lg-block">
                            <ul class="main-menu text-end">
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="index.html">Acceuil</a>
                                </li>
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="service-details.html">Nos services</a>
                                </li>
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="case-details.html">
                                        Cas d'étude
                                    </a>
                                </li>

                                <!-- 
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-menu-link" href="blog-details.html">blog details</a>
                                        </li>
                                        <li>
                                            <a class="sub-menu-link" href="blog-grid-3-column.html">blog grid 3 column</a>
                                        </li>
                                        <li>
                                            <a class="sub-menu-link" href="blog-left-sidebar.html">blog left sidebar</a>
                                        </li>
                                        <li>
                                            <a class="sub-menu-link" href="blog-right-sidebar.html">blog right sidebar</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!-- 
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a class="sub-menu-link" href="about-us.html">about us</a>
                                        </li>
                                        <li><a class="sub-menu-link" href="faq.html">faq</a></li>
                                        <li>
                                            <a class="sub-menu-link" href="404.html">404 not found!</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="main-menu-item">
                                    <a class="main-menu-link" href="contact-us.html">Contact</a>
                                </li>
                                <li class="main-menu-item">
                                    <a class="btn btn-warning btn-hover-warning btn-lg" href="#">Audit de site web<i class="icofont-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </header>

    