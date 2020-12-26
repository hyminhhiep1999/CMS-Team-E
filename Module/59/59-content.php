<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-59">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <h1>OVER TEN YEARS IN THE GAME</h1>
                <p>Voluptatem accusantium doloremque laudant sinium, totam rem aperia.</p>
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco ad dolor
                    et.</span>
                <div class="qodef-contact-form">
                    <div class="qodef-contact-form-submit">
                        <a href="#"
                            class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                            <span class="qodef-btn-text">Find out more</span><span class="qodef-btn-wave-holder"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-md-6">
                        <img src="http://<?php echo $url_path?>/images/h4-img-1.jpg" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="http://<?php echo $url_path?>/images/h4-img-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-img-type-53">
        <span><i class="fas fa-play"></i></span>
    </div>
</div>