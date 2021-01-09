<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-8">
<div class="main-header">
        <div class="container-fluid">
          
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
                            <img src="./images/8-2.png"
                                alt="logo" class="img-fluid">
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

    </div>
    <div class="background-image">
        <img src="http://<?php echo $url_path ?>/images/p1-img-1.jpg" alt="Snow" style="width:100%;">
        <div class="top-left">
            <h1> UNLEASH SURFERS</h1>
        </div>
        <div class="butom-left">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</p>
        </div>
    </div>
</div>