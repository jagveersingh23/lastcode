<?php
$jsonData = file_get_contents('common/text.json');
$dataArray = json_decode($jsonData, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lastcode - Your seal of assurance</title>
    <!--favicon icon-->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!--bootstrap css-->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.min.css" />
    <!--icon css -->
    <link rel="stylesheet" href="fonts/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="fonts/themify-icons/themify-icons.css" />
    <!--style css-->
    <link rel="stylesheet" href="css/style.css" />
    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css" />
</head>

<body>
    <!-- Loading Start-->
    <div id="pq-loading">
        <div id="pq-loading-center">
            <img src="images/logos/logo-1.png" alt="loading" />
        </div>
    </div>
    <!--Loading End -->

    <!--Header Start-->
    <header id="pq-header" class="pq-header-default">
        <div class="pq-top-header">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-md-6 text-right">
                        <div class="pq-header-social text-right">
                            <ul>
                                <li>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-github"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fab fa-skype"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pq-header-contact">
                            <ul>
                                <li>
                                    <a href="tel:<?php echo $dataArray['mobile']; ?>"><i class="fas fa-phone-flip"></i><span><?php echo $dataArray['mobile']; ?></span></a>
                                </li>
                                <li>
                                    <a href="mailto:<?php echo $dataArray['email']; ?>"><i class="fas fa-envelope"></i><span><?php echo $dataArray['email']; ?></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pq-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="index.php">
                                <img
                                    class="img-fluid logo"
                                    src="images/logos/logo-1.png"
                                    alt="techtrix" />
                            </a>
                            <div
                                class="collapse navbar-collapse"
                                id="navbarSupportedContent">
                                <div id="pq-menu-contain" class="pq-menu-contain">
                                    <ul id="pq-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item manu-item-has-children">
                                            <a href="index.php">Home</a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Services</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="software-development.html">Software Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="web-development.html">Web Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="mobile-development.html">Mobile Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="app-development.html">App Development</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="qa-testing.html">QA Testing</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="product-design.html">Product Design</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Pages</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="about-us.html">About Us</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="services.html">Our Services</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="our-team.html">Our Team</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="leadership.html">leadership</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="pricing-plan.html">Pricing Plan</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="faq.html">Faq</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="404.html">404</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Portfolio</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Types</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="standard.html">Standard</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="masonry.html">Masonry</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="masonry-joined.html">Masonry Joined</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Columns</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="2-columns.html">2 columns</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-columns.html">3 columns</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="3-columns-wide.html">3 columns Wide</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="4-columns-wide.html">4 columns Wide</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="portfolio-single.html">Portfolio Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Blog</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                            <ul class="sub-menu">
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Grid Style</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="one-column-blog.html">One Column Blog</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="two-column-blog.html">Two Column Blog</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="three-column-blog.html">Three Column Blog</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item menu-item-has-children">
                                                    <a href="#">Blog Sidebar</a><i class="fa fa-chevron-down pq-submenu-icon"></i>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item">
                                                            <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                        </li>
                                                        <li class="menu-item">
                                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item">
                                                    <a
                                                        href="app-promotes-sales-profits-in-it-solutions.html">Blog Single</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item current-menu-item">
                                            <a href="contact.php">Contact Us</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="pq-menu-search-block">
                                <a href="javascript:void(0)" id="pq-seacrh-btn"><i class="fa fa-search"></i></a>
                                <div class="pq-search-form">
                                    <form
                                        role="search"
                                        method="get"
                                        class="search-form"
                                        action="main-home.html">
                                        <label>
                                            <span class="screen-reader-text">Search for:</span>
                                            <input
                                                type="search"
                                                class="search-field"
                                                placeholder="Search …"
                                                value=""
                                                name="s" />
                                        </label>
                                        <button type="submit" class="search-submit">
                                            <span class="screen-reader-text">Search</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <a href="contact.php" class="pq-button">
                                <div class="pq-button-block">
                                    <span class="pq-button-text">Free Quote</span>
                                </div>
                            </a>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarSupportedContent"
                                aria-expanded="false"
                                aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header End-->