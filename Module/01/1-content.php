<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <header class="type-1 header-wave">         
        <div class="navbar-custom d-flex align-items-center">
            <h1 class="logo mr-auto"><img src="./images/logo.png" alt="Logo"></h1>
            <h1 class="logo2 mr-auto"><img src="./images/logo2.png" alt="Logo"></h1>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="drop-down active">
                        <a href="#"> <img src="./images/icon.png" alt="Icon"> Home</a>
                        <ul class="ul-icon">
                            <li><a href="#">Surfing Home</a></li>
                            <li class="active"><a href="#">Shop Home</a></li>
                            <li><a href="#">Yatching Home</a></li>
                            <li><a href="#">Caneoing Home</a></li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">Pages</a>
                        <ul>
                        
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Crew</a></li>
                            <li class="drop-down">
                                <a href="#">Our Service</a>
                                <ul>
                                    <li><a href="#">Service List</a></li>
                                    <li><a href="#">Service Single</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Location</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">404 Error Page</a></li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">Events</a>
                        <ul>
                            <li><a href="#">Event List</a></li>
                            <li><a href="#">Event Single</a></li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">Shop</a>
                        <ul>
                            <li><a href="#">Product List</a></li>
                            <li><a href="#">Product Single</a></li>
                            <li class="drop-down">
                                <a href="#">Shop Pages</a>
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Cart</a></li>
                                    <li><a href="#">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="drop-down">
                                <a href="#">Shop Layouts</a>
                                <ul>
                                    <li><a href="#">3 Columns</a></li>
                                    <li><a href="#">4 Columns</a></li>
                                    <li><a href="#">Full Width</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">Blog</a>
                        <ul>
                            <li><a href="#">Right Sidebar</a></li>
                            <li><a href="#">Left Sidebar</a></li>
                            <li><a href="#">No Sidebar</a></li>
                            <li><a href="#">Mansory</a></li>
                            <li class="drop-down">
                            <a href="#">Single Types</a>
                            <ul>
                                <li><a href="#">Standart Post</a></li>
                                <li><a href="#">No Sidebar Post</a></li>
                                <li><a href="#">Gallery Post</a></li>
                                <li><a href="#">Quote Post</a></li>
                                <li><a href="#">Link Post</a></li>
                                <li><a href="#">Audio Post</a></li>
                                <li><a href="#">Video Post</a></li>
                            </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#contact">Landing</a></li>
                </ul>
            </nav>
            <div class="nav-items">
                <a class="qodef-side-menu-button-opener qodef-side-menu-button-opener-svg-path" href="#" id="opennav">
                <span class="qodef-side-menu-icon">
                <svg class="qodef-side-area-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -1.6 25 16.5" enable-background="new 0 -1.6 25 16.5" width="25" height="30" xml:space="preserve">
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,2.8
                    c0,0,2.4-2.4,9.2,0.2c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,6.9
                    c0,0,2.4-2.4,9.2,0.2c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,11c0,0,2.4-2.4,9.2,0.2
                    c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                </svg> </span>
                </a>
            </div>
            <div class="close-side"></div>
            <div id="mySidenav" class="sidenav">
                <div class="bg-sidenav">
                    <div class="nav-heading">
                        <img src="./images/logo2.png" alt="side-nav">
                        <a class="closebtn" href="#">
                            <svg
                                class="qodef-close-svg-icon"
                                width="17"
                                height="15"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 16.9 15"
                                enable-background="new 0 0 16.9 15"
                                xml:space="preserve"
                            >
                                <line
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-miterlimit="10"
                                x1="2"
                                y1="1"
                                x2="15"
                                y2="14"
                                ></line>
                                <line
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-miterlimit="10"
                                x1="2"
                                y1="14"
                                x2="15"
                                y2="1"
                                ></line>
                            </svg>
                        </a>
                    </div>
                    <div class="contact-side">
                        <div class="contact-padding">
                            <h3 class="contact-title">TELL ME MORE</h3>
                            <p class="contact-color">Make a splash with WaveRide, designed for everyone passionate about all things surfing.</p>
                            <p class="contact-color"><i class="fa fa-phone"></i> 156-677-124-442-2887</p>
                            <p class="contact-color"><i class="fa fa-location-arrow"></i> wave@qodeinteractive.com</p>
                            <p class="contact-color"><i class="fa fa-map-marker"></i> 184 Main Collins Street Victoria 8007</p>            
                        </div>
                        <div class="svg-contact">
                            <svg version="1.1" x="0px" y="0px" 
                            viewBox="0 0 413.5 223"
                            xml:space="preserve">
                            <path d="M0,104v119h413.9V68.5c0,0-34.9,48-200.4-14C161.8,35.1,53.5,24.5,0,104z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
        </div>     
        </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-8 section-slider">
                            <div class="hero-items owl-carousel">
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-wave">
                                                <img src="./images/wave2.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <h1>Short Board</h1>
                                            <p>Hybird Build</p>
                                            <a href="#" class="primary-btn">$150</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-wave">
                                                <img src="./images/wave1.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <h1>Dawex Board</h1>
                                            <p>Hybird2 Build</p>
                                            <a href="#" class="primary-btn">$170</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="img-wave">
                                                <img src="./images/wave3.png" alt="Wave1">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <h1>Wavy Board</h1>
                                            <p>Hybird3 Build</p>
                                            <a href="#" class="primary-btn">$270</a>
                                            <h5 class="surf">Surf conditions</h5>
                                            <div class="descrition-slider surf1">Knee height</div>
                                            <div class="descrition-slider surf1">Stomach height</div>
                                            <h5 class="surr">Experience</h5>
                                            <div class="descrition-slider surr1">Beginner</div>
                                            <div class="descrition-slider surr1">Expert Level</div>
                                            <div class="descrition-slider surr1">Standart</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="img-banner1">
                    <img src="./images/banner.png" alt="banner1">
                </div>
                <div class="img-banner2">
                    <img src="./images/mod.png" alt="mod">
                </div>
                <div class="btn-header">
                    <div><button class="button-header1"><span><i class="fa fa-circle-o"></i></span>RELATED</button></div>
                    <div><button class="button-header2"><span><i class="fa fa-shopping-cart"></i></span>BUY NOW</button></div>
                </div>
</header>
