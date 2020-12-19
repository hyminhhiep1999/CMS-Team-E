<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-35">
    <div class="container">
        <div class="masonry">
            <h2>MASONRY</h2>
        </div>
        <div class="row">
            <!-- 1 -->
            <div class="col-md-4">
                <div class="presstone">
                    <h4>ANNOUNCING O'NEILL’S WAVE OF THE YEAR</h4>
                    <p>BY ISABEL KARIKOV</p>
                </div>
                <div class="img-her">
                    <img src="./images/blog-masonry-img-3.jpg" alt="a">
                </div>
                <div class="daybirdth-holiday">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">VACATIONS ON A SAILING BOAT?</a></h4>
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
            <!-- 2 -->
            <div class="col-md-4">
                <div class="world">
                    <img src="./images/blog-masonry-img-1.jpg" alt="">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">WORLD CHAMP ROUNDTABLE</a></h4>
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
                    <h4>HOW TO SHAPE & CLEAN YOUR FIRST SURFBOARD</h4>
                </div>
            </div>
            <!-- 3 -->
            <div class="col-md-4">
                <div class="announcing">
                    <h4>JACK FREESTONE WINS RED WAVE ON BALI</h4>
                    <p>BY JOHN MENSON</p>
                </div>
                <div class="img-her">
                    <img src="./images/blog-masonry-img-2.jpg" alt="a">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">FIRST DAY OF SPRING 2020</a></h4>
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
            <!-- 4 -->  
            <div class="col-md-4">
               
                <div class="img-her">
                    <img src="./images/blog-masonry-img-4.jpg" alt="a">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">FIRST DAY OF SPRING 2020</a></h4>
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
            <!-- 5 -->
            <div class="col-md-4">
                <div class="world">
                    <img src="./images/blog-masonry-img-5.jpg" alt="">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">WORLD CHAMP ROUNDTABLE</a></h4>
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
            <!-- 6 -->
            <div class="col-md-4">
                <div class="announcing">
                    <h4>JACK FREESTONE WINS RED WAVE ON BALI</h4>
                    <p>BY JOHN MENSON</p>
                </div>
                <div class="img-her">
                    <img src="./images/blog-masonry-img-1-1.jpg" alt="a">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">FIRST DAY OF SPRING 2020</a></h4>
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
            <!-- 7 -->
            <div class="col-md-4">
                <div class="announcing">
                    <h4>JACK FREESTONE WINS RED WAVE ON BALI</h4>
                    <p>BY JOHN MENSON</p>
                </div>
            </div>
            <!-- 8 -->
            <div class="col-md-4">
                <div class="world">
                    <img src="./images/blog-masonry-img-7.jpg" alt="">
                </div>
                <div class="daybirdth-holidayy">
                    <div class="day-of-birdth">
                        <a href="">Feb 6, 2020 Paddling Board, Surf, Travel</a>
                    </div>
                    <h4><a href="">WORLD CHAMP ROUNDTABLE</a></h4>
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
            <!-- 9 -->
            <div class="col-md-4">
               
                <div class="presstonee">
                    <h4>HOW TO SHAPE & CLEAN YOUR FIRST SURFBOARD</h4>
                </div>
            </div>
            
        </div>
        <div class="loadmore">
            <button type="submit" class="find-out-more btn">LOAD MORE</button>
        </div>
    </div>
</div>