<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-58">
    <div class="main-header">
        <div class="container-fluid heder-bar">
            <div class="top-bar">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-12 col-lg-3  col-xl-4 list-social-left">
                        <ul class="list-social d-flex align-items-center">
                            <li>
                                <span>FOLLOW US:</span>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 col-md-12 col-lg-9 col-xl-8 list-social-right">
                        <ul class="list-social d-flex align-items-center justify-content-lg-end">
                            <li>
                                <a href="/"><i class="fa fa-phone"></i>156-677-124-442-2887</a>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-envelope"
                                        aria-hidden="true"></i>iwave@qodeinteractive.com</a>
                            </li>
                            <li>
                                <a href="/"><i class="fa fa-map-marker" aria-hidden="true"></i>184 Main Collins Street
                                    Victoria 8007</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-inner">
                <div class="wrapper-content-header d-flex justify-content-between align-items-center">
                    <div class="content-header-left d-flex align-items-center justify-content-between w-100 mr-5">
                        <div class="button-widger">
                            <a href="/" class="btn-hover-effect">Book Today</a>
                        </div>
                        <div class="menu-left">
                            <ul class="menu-nav">
                                <li class="active">
                                    <a href="/">home</a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Surfing Hom</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">pages</a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Our Crew</a></li>
                                            <li class="menu-item"><a href="/">Our Services</a></li>
                                            <li class="menu-item"><a href="/">Service List</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">events</a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-header-center text-center">
                        <a href="/" class="logo">
                            <img src="http://<?php echo $url_path ?>/images/wave-logo-standard-white.png" alt="logo"
                                class="img-fluid">
                        </a>
                    </div>
                    <div class="content-header-right  d-flex align-items-center justify-content-between w-100 ml-5">
                        <div class="menu-left">
                            <ul class="menu-nav">
                                <li>
                                    <a href="/">shop</a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">blog</a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="/">landing</a></li>
                            </ul>
                        </div>
                        <div class="header-action d-flex align-items-center">
                            <div class="header-search">
                                <a href="/"><i class="fa fa-search" aria-hidden="true"></i> <span>Search</span></a>
                            </div>
                            <div class="header-cart">
                                <a href="/"><i class="fa fa-shopping-cart"></i> <span>cart (0)</span></a>
                            </div>
                        </div>
                        <div class="menu--mobile">
                            <span class="icon-menu">
                                <svg class="menu-mobile" viewBox="0 0 20 16">
                                    <path d="M0 14h20v2H0v-2zM0 0h20v2H0V0zm0 7h20v2H0V7z" fill="currentColor"
                                        fill-rule="evenodd"></path>
                                </svg>
                            </span>
                        </div>
                        <div class="nav-menu-mobile">
                            <p class="title">Menu</p>
                            <ul class="menu-nav">
                                <li>
                                    <a href="/">home <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Surfing Hom</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">pages <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Our Crew</a></li>
                                            <li class="menu-item"><a href="/">Our Services</a></li>
                                            <li class="menu-item"><a href="/">Service List</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">events <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">shop <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="/">blog <i class="fa fa-angle-down"></i></a>
                                    <div class="dropdown--menu">
                                        <ul>
                                            <li class="menu-item"><a href="/">Event List</a></li>
                                            <li class="menu-item"><a href="/">Shop Home</a></li>
                                            <li class="menu-item"><a href="/">Yachting Home</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="/">landing</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="background-body">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="img-fluid" src="http://<?php echo $url_path ?>/images/h4-rev-img-3.jpg" alt="c">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="http://<?php echo $url_path ?>/images/h4-rev-img-1.jpg" alt="c">
                    </div>
                    <div class="carousel-item">
                        <img class="img-fluid" src="http://<?php echo $url_path ?>/images/h4-rev-img-3-1.jpg" alt="c">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="text-in-background">
                    <img src="http://<?php echo $url_path ?>/images/h4-rev-img-2.png" class="img-fluid" alt="c">
                    <h1>WELCOME ON BOARD</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqu minim veniam.
                    </p>
                    <div class="button-find">
                        <button type="submit" class="find-out-more btn">FIND OUT MORE</button>
                    </div>
                    
            </div>
        </div>
    </div>

</div>