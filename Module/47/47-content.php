<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-47">
    <div class="container">
        <div class="row-1">
            <div class="row">
                <div class="col-md-6">
                    <div class="video-surfing">
                        <img src="./images/47.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="surfer">
                        <h2>SURFERS PARADISE</h2>

                        <p>Lorem ipsum dolor sit amet, con secte tur adip si cin elit, do eius mod tempor in cidi
                            dut ut
                            la bore magna aliquat enim ad.</p>
                        <div class="qodef-contact-form">
                            <div class="qodef-contact-form-submit">
                                <a href="#" type="submit"
                                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                    <span class="qodef-btn-text">FIND OUT MORE</span><span
                                        class="qodef-btn-wave-holder"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-2">
            <div class="row">
                <div class="col-md-5">
                    <h1>TOP SURF LESSONS</h1>
                    <span>Lorem ipsum dolor sit amet, con secte tur adip si cin elit, do eius mod tempor in cidi dunt ut
                        la
                        bore
                        magna aliquat enim ad.</span>
                    <div class="image-md-5">
                        <img src="./images/47.3.png" alt="">
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="./images/47.1.jpg" alt="">
                </div>
                <div class="col-md-3">
                    <img src="./images/47.2.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>