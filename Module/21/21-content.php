<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-21">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
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