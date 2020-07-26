<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package photogenic
 */

get_header();
?>

	   <div class="container-fluid fh5co-about-us" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">

                    <svg class="back-bg" viewBox="0 0 535 618">
                        <defs>
                            <linearGradient id="PSgrad_0" x1="0%" x2="100%" y1="0%" y2="0%">
                                <stop offset="0%" stop-color="rgb(88,192,255)" stop-opacity="1" />
                                <stop offset="100%" stop-color="rgb(18,112,228)" stop-opacity="1" />
                            </linearGradient>

                        </defs>
                        <path fill-rule="evenodd" fill="rgb(18, 112, 228)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                        <path fill="url(#PSgrad_0)"
                            d="M6.000,-0.000 L499.000,-0.000 C502.314,-0.000 505.000,2.686 505.000,6.000 L505.000,612.000 C505.000,615.314 502.314,618.000 499.000,618.000 L6.000,618.000 C2.686,618.000 -0.000,615.314 -0.000,612.000 L-0.000,6.000 C-0.000,2.686 2.686,-0.000 6.000,-0.000 Z" />
                    </svg>

                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <img src="/wordpress/wp-content/uploads/2020/06/slide.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="/wordpress/wp-content/uploads/2020/06/slide.png" alt="" class="img-fluid" />
                        </div>
                        <div>
                            <img src="/wordpress/wp-content/uploads/2020/06/slide.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about-us-content">
                        <h2>ABOUT US</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                            voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                            cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed
                            ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                            aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione
                            voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                            consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a href="#" class="read-more">Read More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fh5co-portfolio" id="portfolio">
        <div class="container">
            <h2>OUR PORTFOLIO</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad </p>
            <h3>FILTER BY:</h3>
            <div class="portfolio-tab portfolioFilter">
                <ul>
                    <li><a href="#" data-filter="*" class="active">ALL</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                    <li><a href="#" data-filter=".wedding">Weeding</a>
                    </li>
                    <li><a href="#" data-filter=".nature">Nature</a>
                    </li>
                    <li><a href="#" data-filter=".landscape">landscape</a>
                    </li>
                    <li><a href="#" data-filter=".green">Green</a>
                    </li>
                    <li><a href="#" data-filter=".building">Building</a>
                    </li>
                </ul>
            </div>

            <div class="row">

                <div class="portfolioContainer">

                    <div class="gallary building nature green">
                        <img src="/wordpress/wp-content/uploads/2020/06/img1.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>

                    </div>
                    <div class="gallary center-img wedding">
                        <img src="/wordpress/wp-content/uploads/2020/06/img2.png" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary building">

                        <img src="/wordpress/wp-content/uploads/2020/06/img4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary center-img landscape nature">
                        <img src="/wordpress/wp-content/uploads/2020/06/img3.png" class="half-height" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="gallary">
                        <img src="/wordpress/wp-content/uploads/2020/06/img5.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                    <div class="gallary center-img landscape">
                        <img src="/wordpress/wp-content/uploads/2020/06/img6.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>


                    <div class="gallary building nature">
                        <img src="/wordpress/wp-content/uploads/2020/06/img4.png" alt="">
                        <div class="card-img-overlay">
                            <div class="top-buttons clearfix">
                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/share.png"
                                            alt="share icon" /></span> <span class="txt">Share Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/heart.png"
                                            alt="share icon" /></span> <span class="txt">190+ Likes</span></a>
                            </div>

                            <div class="top-buttons bottom-buttons clearfix">
                                <a href="#"><span class="txt">Contact Now</span></a>

                                <a href="#"><span class="img-icon"><img src="/wordpress/wp-content/uploads/2020/06/eye.png" alt="share icon" /></span>
                                    <span class="txt">Full View</span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row portfolioFilter">
                <ul class="indicators">
                    <li><a href="#" data-filter=".landscape" class="active"></a>
                    </li>
                    <li><a href="#" data-filter=".green"></a>
                    </li>
                    <li><a href="#" data-filter=".building"></a>
                    </li>
                    <li><a href="#" data-filter=".wedding"></a>
                    </li>
                    <li><a href="#" data-filter=".nature"></a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="container-fluid fh5co-news" id="news">
        <div class="container">
            <h2>OUR NEWS</h2>
            <div class="row">
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/wordpress/wp-content/uploads/2020/06/news1.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/wordpress/wp-content/uploads/2020/06/news2.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="card text-center"> <img class="card-img-top" src="/wordpress/wp-content/uploads/2020/06/news3.png" alt="">
                            <div class="card-body text-left pr-0 pl-0">
                                <h5>How to take a Awosome photo Of
                                    Groups! </h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<?php
get_sidebar();
get_footer();
