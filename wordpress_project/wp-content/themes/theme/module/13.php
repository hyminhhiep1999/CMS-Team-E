<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="banner-header">
        <div class="container">
            <h1>FIND ADVENTURE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt.</p>
        </div>
    </div>
    <div class="content">
        <div class="content-des">
            <h1>CHOOSE YOUR PASSION</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="list-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-1.jpg" alt="">
                                </div>
                                <div class="des-img">
                                    <h2>surfing</h2>
                                    <h4>surfing </h4>
                                    <div class="des-des">
                                        <h4>surfing </h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-4.jpg" alt="">
                                </div>
                                <div class="des-img des-img-one">
                                    <h2>canoeing</h2>
                                    <h4>learn new skills </h4>
                                    <div class="des-des">
                                        <h4>learn new skills </h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-2.jpg" alt="">
                                </div>
                                <div class="des-img des-img-one">
                                    <h2>rentals </h2>
                                    <h4>boats </h4>
                                    <div class="des-des">
                                        <h4>boats </h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-5-1.jpg" alt="">
                                </div>
                                <div class="des-img">
                                    <h2>camp</h2>
                                    <h4>perfect place </h4>
                                    <div class="des-des">
                                        <h4>perfect place</h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-3.jpg" alt="">
                                </div>
                                <div class="des-img des-img-two">
                                    <h2>diving </h2>
                                    <h4>scuba diving</h4>
                                    <div class="des-des">
                                        <h4>scuba diving</h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-6.jpg" alt="">
                                </div>
                                <div class="des-img des-img-three">
                                    <h2>paddle </h2>
                                    <h4>learn to paddle </h4>
                                    <div class="des-des">
                                        <h4>learn to paddle </h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-img">
                            <a href="">
                                <div class="banner-img">
                                    <img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-img-list-1.jpg" alt="">
                                </div>
                                <div class="des-img des-img-three">
                                    <h2>sailing</h2>
                                    <h4>sail away </h4>
                                    <div class="des-des">
                                        <h4>sail away </h4>
                                        <p>Enjoy the thrill and pleasure of surfing under different winds.</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-footer-des container">
            <div class="des-text">
                <p>A great surfing holiday is waiting for you here at Baleal Beach, Peniche, Portugal!</p>
            </div>
            <div class="list-icon">
                <ul>
                    <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href=""><i class="fab fa-pinterest-p"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="content-footer container">
            <ul>
                <li><a href=""><img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-clients-img-1-h.png" alt=""></a></li>
                <li><a href=""><img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-clients-img-2-h.png" alt=""></a></li>
                <li><a href=""><img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-clients-img-3-h.png" alt=""></a></li>
                <li><a href=""><img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-clients-img-4-h.png" alt=""></a></li>
                <li><a href=""><img scr="<?php bloginfo("template_directory"); ?>/images/13/h2-clients-img-5-h.png" alt=""></a></li>
            </ul>
        </div>
    </div>
</div>