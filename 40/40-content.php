<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-40">
    <div class="wave-top">
        <div class="img-top-wave">
            <img src="./images/lan-rev-img-2-1.jpg" alt="a">
        </div>
        <div class="img-logo">
            <img src="./images/preloader.png" alt="a">
        </div>
        <div class="img-lie-svg">
            <img src="./images/lan-rev-top-wave.png" alt="a">
        </div>
        <div class="btn-purchase">
            <button type="submit" class="add_to_cart btn">Purchase</button>
        </div>
    </div>
    <div class="text-ride">
        <div class="container">
            <div class="text-smoothest">
                <h1>The Smoothest Ride </h1>
                <p>You get a fine selection of beautiful summer-inspired layouts which you can customize with ease.</p>
            </div>
            <div class="wave-theme">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="theme-shop">
                            <div class="surfing-Home">
                                <img src="./images/lan-home-img-1.jpg" alt="">
                            </div>
                            <div class="number-text-shf">
                                <h3>Surfing Home</h3>
                                <img src="./images/lan-rev-1-img-3.png" alt="a">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12  col-md-6">
                        <div class="shop-Home">
                            <div class="surfing-Home-short">
                                <img src="./images/lan-home-img-2.jpg" alt="">
                            </div>
                            <div class="number-text-shh">
                                <h3>Surfing Home</h3>
                                <img src="./images/lan-rev-2-img-6.png" alt="a">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <div class="wave-theme-shop">
                            <div class="board-home">
                                <img src="./images/lan-home-img-3.jpg" alt="">
                            </div>
                            <div class="number-text-shfa">
                                <h3>Surfing Home</h3>
                                <img src="./images/lan-rev-3-img-3.png" alt="a">
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12  col-md-6">
                        <div class="canoeing-passion-home">
                            <div class="surfing-Home-shor">
                                <img src="./images/lan-home-img-4.jpg" alt="">
                            </div>
                            <div class="number-text-h">
                                <h3>Surfing Home</h3>
                                <img src="./images/lan-rev-4-img-3.png" alt="a">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>