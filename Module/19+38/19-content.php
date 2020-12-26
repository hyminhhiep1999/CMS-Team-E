<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-19">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="col-content-left">
                    <div class="heading-img">
                        <img src="http://<?php echo $url_path ?>/images/event-featured-img-1.jpg" alt="event-featured">
                    </div>
                    <div class="content-surfing-vacation">
                        <a href="#"><span>Jan 10, 2020</span></a>
                        <h2>SURFING VACATION</h2>
                        <p>Lorem ipsum dolor sit amet, con sectetur adipisicing elit, sed do eiusmod tempor in ci didunt
                            ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud ex ercitation ul lamco laboris nisi ut aliquip ex co
                            mmodo consequat. Duis aute irure dolor in re prehen derit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Ex cepteur sint occaecat cupi da tat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum. Sedut perspi ciatis unde omnis iste
                            natus error sit vo lup tatem accu santium dolore mque lau dantium, totam rem aperiam, eaque
                            ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con
                            sequntur magni dolores.</p>
                        <div class="qick-live">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Black Beaach, San diego</span>
                        </div>
                        <div class="content-buynow">
                            <div class="row buynow">
                                <div class="col-lg-6 col-md-12 col-sm-6 col">
                                    <h4>Accommodation</h4>
                                    <img src="http://<?php echo $url_path ?>/images/event-img-1-2.jpg"
                                        alt="event-img-1-2">
                                    <span>*Visit Sand Villa Website</span>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-6 col">
                                    <h4>At a glance</h4>
                                    <p>Ornatus eleifend, assum quando tollit his id. Primis animal mel no. Eu simul el a
                                        boraret qui, est mocrti.</p>
                                    <div class="item-list">
                                        <ul>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <b>Tour Includes:</b>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <span class="tt-text">Camp, Board, Shoes</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <b>Daily Times:</b>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <span class="tt-text">Tours start 9am daily</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <b>Shedule:</b>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <span class="tt-text">4 hrs long tour</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <b>Prices:</b>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <span class="tt-text">Party of 1 - $250</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="btn-book-row">
                                        <a href="#">
                                            <span>Book now</span>
                                            <!-- <span class="btn-wave-holder"></span> -->
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="col-sidebar-right">
                    <div class="sidebar-img">
                        <img src="http://<?php echo $url_path?>/images/event-sidebar-img-1-300x212.jpg"
                            alt="event-sidebar">
                    </div>
                    <div class="about-ben-davidson-text">
                        <h4>ABOUT BEN DAVIDSON</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                            utlabore et dolore magna</p>
                    </div>
                    <div class="categories">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li class="cat-item"><a href="#">Canoenig</a></li>
                            <li class="cat-item"><a href="#">Paddling</a></li>
                            <li class="cat-item"><a href="#">Rental</a></li>
                            <li class="cat-item"><a href="#">Sailing</a></li>
                            <li class="cat-item"><a href="#">Scubadiving</a></li>
                            <li class="cat-item"><a href="#">Surfing</a></li>
                        </ul>
                    </div>
                    <div class="latest-posts">
                        <h4>Latest Posts</h4>
                        <ul>
                            <li>
                                <div class="inner-item">
                                    <div class="inner-img-banner">
                                        <a href=""><img
                                                src="http://<?php echo $url_path?>/images/blog-masonry-img-2-150x150.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="inner-banner-item">
                                        <div class="inner-content">
                                            <div class="post-info-data">
                                                <a href="#">Feb 4, 2020 </a>
                                            </div>
                                            <div class="post-info-caterogy">
                                                <a href="#">Paddling</a>
                                            </div>
                                        </div>
                                        <div class="inner-title">
                                            <a href="#">A History of the Ancient Hawaiian Sport </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-item">
                                    <div class="inner-img-banner">
                                        <a href=""><img
                                                src="http://<?php echo $url_path?>/images/blog-img-3-150x150.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="inner-banner-item">
                                        <div class="inner-content">
                                            <div class="post-info-data">
                                                <a href="#">Feb 4, 2020 </a>
                                            </div>
                                            <div class="post-info-caterogy">
                                                <a href="#">Paddling</a>
                                            </div>
                                        </div>
                                        <div class="inner-title">
                                            <a href="#">A History of the Ancient Hawaiian Sport </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-item">
                                    <div class="inner-img-banner">
                                        <a href=""><img
                                                src="http://<?php echo $url_path?>/images/blog-img-1-150x150.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="inner-banner-item">
                                        <div class="inner-content">
                                            <div class="post-info-data">
                                                <a href="#">Feb 4, 2020 </a>
                                            </div>
                                            <div class="post-info-caterogy">
                                                <a href="#">Paddling</a>
                                            </div>
                                        </div>
                                        <div class="inner-title">
                                            <a href="#">A History of the Ancient Hawaiian Sport </a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-item">
                                    <div class="inner-img-banner">
                                        <a href=""><img
                                                src="http://<?php echo $url_path?>/images/blog-img-1-150x150.jpg"
                                                alt=""></a>
                                    </div>
                                    <div class="inner-banner-item">
                                        <div class="inner-content">
                                            <div class="post-info-data">
                                                <a href="#">Feb 4, 2020 </a>
                                            </div>
                                            <div class="post-info-caterogy">
                                                <a href="#">Paddling</a>
                                            </div>
                                        </div>
                                        <div class="inner-title">
                                            <a href="#">A History of the Ancient Hawaiian Sport </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="banner-heineken-img">
                        <a href="#">
                            <img src="http://<?php echo $url_path?>/images/event-sidebar-banner-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="banner-skiathos-img">
                        <img src="http://<?php echo $url_path ?>/images/event-sidebar-banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>