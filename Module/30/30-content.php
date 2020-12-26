<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-30">
    <div class="container-fluid">
        <h4>FULL WIDTH</h4>
    </div>
    <div class="row">
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.png" alt="">
                    <div class="add-to-card">
                        <a href="">SELECT OPTIONS</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">TUNDER SHORT BOARD</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Canoenig, Equipment</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.1.png" alt="">
                    <div class="add-to-card">
                        <a href="">SELECT OPTIONS</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">SCUBA DIVING WETSUIT</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Scubadiving</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.2.png" alt="">
                    <div class="add-to-card">
                        <a href="">SELECT OPTIONS</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">LIGHTWAVE BOARD</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Surfing</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.3.png" alt="">
                    <div class="add-to-card">
                        <a href="">SELECT OPTIONS</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">BOARD PADDLE PAIR</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Canoenig, Equipment</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.4.png" alt="">
                    <div class="add-to-card">
                        <a href="">SELECT OPTIONS</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">RIGID SURFBOARD FOAM</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Surfing</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.5.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">WOMAN’S WETSUIT PRO</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Scubadiving</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.6.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">KAYAK WITH PADDLES</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Canoenig, Paddling</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.7.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">SHORT MAN WETSUIT</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Rental, Scubadiving</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.8.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">KAYAK PADDLES LONG X</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Paddling, Rental</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.9.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">THUNDER BOARD</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Rental, Surfing</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.10.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">DIVING BAG</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Scubadiving</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.11.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">FLORAL SURFBOARD</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Rental, Surfing</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.12.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">FLORAL SURFBOARD</a>
            </div>
            <div class="text-product">
                <a href="#" class="">HYPERLITE VEST</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.13.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">LIGHT SURFBOARDT</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Equipment, Surfing</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
        <div class="col-xs-5ths">
            <div class="img-banner">
                <div class="product-item">
                    <img src="./images/30.14.png" alt="">
                    <div class="add-to-card">
                        <a href="">ADD TO CART</a>
                    </div>
                </div>
            </div>
            <div class="title-product">
                <a href="#" class="shop-list">MEDIUM WETSUIT</a>
            </div>
            <div class="text-product">
                <a href="#" class="">Rental, Scubadiving</a>
            </div>
            <span class="Boards">$130.000</span>
        </div>
    </div>
</div>