<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-65">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="presstone">
                    <h4>JACK FREESTONE WINS RED WAVE ON BALI</h4>
                    <p>BY JOHN MENSON</p>
                </div>
                <div class="img-her">
                    <img src="./images/blog-masonry-img-3.jpg" alt="a">
                </div>
                <div class="daybirdth-holiday">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Rental</a>
                    </div>
                    <h4><a href="">HOLIDAYS ON A SAILING BOAT?</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                    <div class="btnreadmore">
                        <div class="iconfonttawesome">
                            <i class="fab fa-pinterest-p"></i>
                        </div>
                        <div class="readmorepod">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="world">
                    <img src="./images/blog-masonry-img-1.jpg" alt="">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Rental</a>
                    </div>
                    <h4><a href="">HOLIDAYS ON A SAILING BOAT?</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                    <div class="btnreadmore">
                        <div class="iconfonttawesome">
                            <i class="fab fa-pinterest-p"></i>
                        </div>
                        <div class="readmorepod">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="presstonee">
                    <h4>HOW TO SHAPE YOUR FIRST SURFBOARD</h4>
                </div>

            </div>
            <div class="col-md-4">
                <div class="announcing">
                    <h4>ANNOUNCING O'NEILL’S WAVE OF THE YEAR</h4>
                    <p>BY ISABEL KARIKOV</p>
                </div>
                <div class="img-her">
                    <img src="./images/blog-masonry-img-2.jpg" alt="a">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Rental</a>
                    </div>
                    <h4><a href="">SPRING BREAKS & EASTERN SUN</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor </p>
                    <div class="btnreadmore">
                        <div class="iconfonttawesome">
                            <i class="fab fa-pinterest-p"></i>
                        </div>
                        <div class="readmorepod">
                            <a href="">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>