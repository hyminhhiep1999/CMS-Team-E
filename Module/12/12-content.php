<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-12">
    <div class="container">
        <div class="awesome-content">
            <h1>AWESOME TEAM</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, do eius mod tempor incididunt ut.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="container-images">
                <div class="img-banner">
                    <img src="./images/12.jpg" alt="hinh12">
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
                    <img src="./images/12.1.jpg" alt="hinh12.1">
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
                    <img src="./images/12.2.jpg" alt="hinh12.2">
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
                    <img src="./images/12.3.jpg" alt="hinh12.3">
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
    <div class="row">
        <div class="col-md-6 col-xl-3">
            <div class="container-images">
                <div class="img-banner">
                    <img src="./images/12.4.jpg" alt="hinh12.4">
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
                    <img src="./images/12.5.jpg" alt="hinh12.5">
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
                    <img src="./images/12.6.jpg" alt="hinh12.6">
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
                    <img src="./images/12.7.jpg" alt="hinh12.7">
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
    <div class="contact-content container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <div class="qodef-contact-form">
            <div class="qodef-contact-form-submit">
                <a href="#" type="submit"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                    <span class="qodef-btn-text">CONTACT US</span><span class="qodef-btn-wave-holder"></span>
                </a>
            </div>
        </div>
    </div>
</div>