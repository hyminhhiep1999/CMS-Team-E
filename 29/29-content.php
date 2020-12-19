<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-29">
    <div class="header-banner-img">
        <div class="container">
            <h1>4 COLUMNS</h1>
        </div>
    </div>
    <div class="content ">
        <div class="container">
            <div class="content-item">
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3 ">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-1-img-2-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">Select options</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-product">
                                <p>New</p>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">TUNDER SHORT BOARD</a></h4>
                            </div>
                            <div class="des">
                                <p>Canoenig, Equipment</p>
                            </div>
                            <div class="price">
                                <span>$130.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-2-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">SCUBA DIVING WETSUIT</a></h4>
                            </div>
                            <div class="des">
                                <p>Equipment, Scubadiving</p>
                            </div>
                            <div class="price">
                                <span>$160.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-5-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-product">
                                <p>Sale</p>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">LIGHTWAVE BOARD</a></h4>
                            </div>
                            <div class="des">
                                <p>Canoenig, Equipment</p>
                            </div>
                            <div class="price">
                                <span>$130.00</span>
                                <span class="price-fill">$180.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-6-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">BOARD PADDLE PAIR</a></h4>
                            </div>
                            <div class="des">
                                <p>Canoenig, Equipment</p>
                            </div>
                            <div class="price">
                                <span>$130.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-7-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#" 
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">read more</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="sale-product sale-product-fill">
                                <p>Sola</p>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">RIGID SURFBOARD FOAM</a></h4>
                            </div>
                            <div class="des">
                                <p>Equipment, Surfing</p>
                            </div>
                            <div class="price">
                                <span>$160.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-8-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">WOMAN’S WETSUIT PRO</a></h4>
                            </div>
                            <div class="des">
                                <p>Equipment, Scubadiving</p>
                            </div>
                            <div class="price">
                                <span>$110.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-9-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">KAYAK WITH PADDLES</a></h4>
                            </div>
                            <div class="des">
                                <p>Canoenig, Paddling</p>
                            </div>
                            <div class="price">
                                <span>$130.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-10-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">SHORT MAN WETSUIT</a></h4>
                            </div>
                            <div class="des">
                                <p>Rental, Scubadiving</p>
                            </div>
                            <div class="price">
                                <span>$160.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-11-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">KAYAK PADDLES LONG X</a></h4>
                            </div>
                            <div class="des">
                                <p>Paddling, Rental</p>
                            </div>
                            <div class="price">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-12-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">THUNDER BOARD</a></h4>
                            </div>
                            <div class="des">
                                <p>Rental, Surfing</p>
                            </div>
                            <div class="price">
                                <span>$100.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-13-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#" 
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">DIVING BAG</a></h4>
                            </div>
                            <div class="des">
                                <p>Equipment, Scubadiving</p>
                            </div>
                            <div class="price">
                                <span>$80.00</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="product-img">
                            <a href="">
                                <img src="http://<?php echo $url_path?>/images/product-14-img-1-600x731.png" alt="">
                            </a>
                            <div class="qodef-contact-form">
                                <div class="qodef-contact-form-submit">
                                    <a href="#"     
                                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                                        <span class="qodef-btn-text">add to cart</span><span
                                            class="qodef-btn-wave-holder"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-des">
                            <div class="title">
                                <h4><a href="">FLORAL SURFBOARD</a></h4>
                            </div>
                            <div class="des">
                                <p>Rental, Surfing</p>
                            </div>
                            <div class="price">
                                <span>$150.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>