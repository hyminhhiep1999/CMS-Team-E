<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-60">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2>WAVE SAILING TRIPS</h2>
                <p>Lorem ipsum dolor sit amet, con secte tur adip sicing elit, do eius mod tempor in cidi dunt ut la
                    bore
                    magna aliquat enim ad.</p>
                <img src="./images/47.3.png" alt="">
            </div>
            <div class="col-md-4">
                    <img src="./images/60.jpg" alt="">
            </div>
            <div class="col-md-3">
                    <img src="./images/60.1.jpg" alt="">
            </div>
        </div>
    <div class="banner-img">
        <img src="./images/60.4.1.png" alt="">
        <img src="./images/60.3.1.png" alt="">
        <img src="./images/60.5.1.png" alt="">
        <img src="./images/60.6.1.png" alt="">
        <img src="./images/60.7.1.png" alt="">
    </div>
    </div>
</div>