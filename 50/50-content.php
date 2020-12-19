<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-50">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="row">
                <div class="image1 height-small">
                    <img src="./images/1.jpg" alt="image1">
                </div>
                <div class="col-lg-6">
                    <div class="image img-mobile">
                        <img src="./images/5.jpg" alt="image1">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image img-mobile">
                        <img src="./images/6.jpg" alt="image1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="image img-mobile height-for-bn">
                <img src="./images/2.jpg" alt="image1">
            </div>
        </div>
        <div class="col-lg-3">
            <div class="image image-bot">
                <img src="./images/3.jpg" alt="image1">
            </div>
            <div class="image">
                <img src="./images/4.jpg" alt="image1">
            </div>
        </div>
    </div>
  </div>
</div>