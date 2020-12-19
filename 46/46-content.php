<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-46">
    <div class="header-slider">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="http://<?php echo $url_path?>/images/h1-rev-background-img.jpg"
                        alt="h1-rev-background-img.jpg">
                </div>
                <div class="carousel-item">
                    <img src="http://<?php echo $url_path?>/images/h1-rev-background-img-2.jpg" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="http://<?php echo $url_path?>/images/h1-rev-background-img-3.jpg" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="logo-header">
            <img src="http://<?php echo $url_path?>/images/h1-rev-img-1.png" alt="">
        </div>
    </div>
    <div class="old-theml-row">
        <div class="row">
            <div class=" col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/h1-img-1.jpg" alt="">
                </div>
                <div class="des">
                    <h2>Private surf lessons</h2>
                    <span>15.50$</span> <br>
                    <p>X DAY (6HS)</p>
                </div>
                </a>
            </div>
            <div class=" col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/h1-img-2.jpg" alt="">
                </div>
                <div class="des">
                    <h2>Private surf lessons</h2>
                    <span>15.50$</span> <br>
                    <p>X DAY (6HS)</p>
                </div>
                </a>
            </div>
            <div class=" col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/h1-img-3.jpg" alt="">
                </div>
                <div class="des">
                    <h2>Private surf lessons</h2>
                    <span>15.50$</span> <br>
                    <p>X DAY (6HS)</p>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/h1-img-4.jpg" alt="">
                </div>
                <div class="des">
                    <h2>Private surf lessons</h2>
                    <span>15.50$</span> <br>
                    <p>X DAY (6HS)</p>
                </div>
                </a>
            </div>
        </div>
    </div>
</div>