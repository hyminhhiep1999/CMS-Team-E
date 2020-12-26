<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-44">
    <div class="content-cart">
        <div class="container">
            <h1>Cart</h1>
        </div>
    </div>
    <div class="products-cart container">
        <div class="cart-zero">
            <h3>Your cart is currently empty.</h3>
        </div>
        <div class="return-home">
            <div class="qodef-contact-form">
                <div class="qodef-contact-form-submit">
                    <a href="#"
                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                        <span class="qodef-btn-text">Return to shop</span><span class="qodef-btn-wave-holder"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>