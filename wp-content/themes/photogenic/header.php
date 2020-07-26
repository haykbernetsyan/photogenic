<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package photogenic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
 <div id="fh5co-hero-carousel" class="carousel slide header" data-ride="carousel">
        <nav class="navbar fixed-top navbar-expand-xl">
            <div class="container">
                <a class="navbar-brand mobile-logo" href="#"><img src="/wordpress/wp-content/uploads/2020/06/logo.png" alt="Vista Pro" /></a>
                <button class="navbar-toggler" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse">
                    <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span> </button>

                <div id="my-nav" class="collapse navbar-collapse">

                    <div>
                        <p class="text-left follow">Follow Us:</p>
                        <ul class="navbar-nav float-left social-links">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/fh5co"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://twitter.com/fh5co"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
                            </li>

                        </ul>
                    </div>

                    <ul class="navbar-nav mx-auto logo-desktop">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="/wordpress/wp-content/uploads/2020/06/logo.png" alt="Vista Pro" /></a>
                        </li>
                    </ul>

                    <ul class="navbar-nav float-right menu-links">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about-us">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#news">News</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="carousel-inner">
            <div class="carousel-item active">

                <img class="d-block w-100 home-bg" alt="home-bg" src="/wordpress/wp-content/uploads/2020/06/home-bg.png">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">Everyone is Photogenic</p>
                    <h5>Today’s SPECIAL MOMENTS.</h5>
                    <p>Creating a timeless look, coupled with a flawless moment</p>

                </div>


            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="/wordpress/wp-content/uploads/2020/06/home-bg.png">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">Everyone is Photogenic</p>
                    <h5>Today’s SPECIAL MOMENTS.</h5>
                    <p>Creating a timeless look, coupled with a flawless moment</p>

                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 home-bg" alt="home-bg" src="/wordpress/wp-content/uploads/2020/06/home-bg.png">

                <div class="carousel-caption d-md-block">
                    <p class="frst-hrd">Everyone is Photogenic</p>
                    <h5>Today’s SPECIAL MOMENTS.</h5>
                    <p>Creating a timeless look, coupled with a flawless moment</p>

                </div>
            </div>
            <div class="scroll-button">
                <p>Scroll down to see more...</p>
                <a href="#about-us" class="page-scroll">
                    <img src="/wordpress/wp-content/uploads/2020/06/arrows-down.png" alt="arrow down" />
                </a>

            </div>
        </div>
        <ul class="carousel-indicators">
            <li class="active" data-target="#fh5co-hero-carousel" data-slide-to="0" aria-current="location"></li>
            <li data-target="#fh5co-hero-carousel" data-slide-to="1"></li>
            <li data-target="#fh5co-hero-carousel" data-slide-to="2"></li>
        </ul>
    </div>