<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <header class="type-11 header-wave">         
                    <div class="wrapper">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h1>Testimonials </h1>
                        </div>
                        <div class="col-md-6 section-slider">
                            <div class="hero-items owl-carousel">
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>"My wife and I had the best experience last week surfing for the first time last week!"</p>
                                           <span>San Diego, California Ben M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>"My wife and I had the best experience last week surfing for the first time last week!"</p>
                                           <span>San Diego, California Ben M</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-hero-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p>"My wife and I had the best experience last week surfing for the first time last week!"</p>
                                           <span>San Diego, California Ben M</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <div class="container-images">
                            <div class="img-banner">
                                <img src="<?php bloginfo("template_directory"); ?>/images/11/12.jpg" alt="hinh12">
                            </div>
                            <div class="out-found">
                                <div class="out-found-pid">
                                    <span>our found</span>
                                </div>
                                <div class="des-found">
                                    <h4>Sam LiLet</h4>
                                    <span>out found</span>
                                    <div class="list-item">
                                        <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-twitter-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-instagram-square"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="container-images">
                            <div class="img-banner">
                                <img src="<?php bloginfo("template_directory"); ?>/images/11/12.1.jpg" alt="hinh12.1">
                            </div>
                            <div class="out-found">
                                <div class="out-found-pid">
                                    <span>our found</span>
                                </div>
                                <div class="des-found">
                                    <h4>Sam LiLet</h4>
                                    <span>out found</span>
                                    <div class="list-item">
                                        <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-twitter-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-instagram-square"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="container-images">
                            <div class="img-banner">
                                <img src="<?php bloginfo("template_directory"); ?>/images/11/12.2.jpg" alt="hinh12.2">
                            </div>
                            <div class="out-found">
                                <div class="out-found-pid">
                                    <span>our found</span>
                                </div>
                                <div class="des-found">
                                    <h4>Sam LiLet</h4>
                                    <span>out found</span>
                                    <div class="list-item">
                                        <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-twitter-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-instagram-square"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="container-images">
                            <div class="img-banner">
                                <img src="<?php bloginfo("template_directory"); ?>/images/11/12.3.jpg" alt="hinh12.3">
                            </div>
                            <div class="out-found">
                                <div class="out-found-pid">
                                    <span>our found</span>
                                </div>
                                <div class="des-found">
                                    <h4>Sam LiLet</h4>
                                    <span>out found</span>
                                    <div class="list-item">
                                        <span><a href=""><i class="fab fa-facebook-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-twitter-square"></i></a></span>
                                        <span><a href=""><i class="fab fa-instagram-square"></i></a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row rowContact">
                    <div class="col-md-4 col-sm-12">
                        <div class="qodef-contact-form-submit button-qodef2">
                            <img src="http://<?php echo $url_path ?>/images/11/61-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <form>
                            <div class="form-filed">
                                <p class="input-text">
                                    <span>Wave championship has a 5 star Tripadvisor traveller rating and is also <br> rated #1 for Speciality lodging in Baleal Beach, Peniche Portugal.</span>
                                </p>
                            </div>
                        </form>
                    </div>  
                </div>
             
</header>
