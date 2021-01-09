<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-24">
    <div class="product-list-right">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="categories">
                        <div class="serach-list">
                            <h4>SEARCH</h4>
                            <form action="search">
                                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="categories-type">
                        <h4>CATEGORIES</h4>
                        <ul class="product-catelary">
                            <li><a href="">Boards</a></li>
                            <li><a href="">Canoenig</a></li>
                            <li><a href="">Equipment</a></li>
                            <li><a href="">Paddling</a></li>
                            <li><a href="">Rental</a></li>
                            <li><a href="">Scubadiving</a></li>
                            <li><a href="">Surfing</a></li>
                        </ul>
                    </div>
                    <div class="relative-product">
                        <h4>RELATED PRODUCTS</h4>
                        <ul >
                                <li class="li-img">
                                    <div class="start-product">
                                        <img src="<?php bloginfo("template_directory"); ?>/images/24/shop-list-img-1.png"
                                            alt="product-imag-1" />
                                    </div>
                                </li>
                                <li >
                                    <div class="type-product-start">
                                                <span>Tunder board</span>
                                                <p class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </p>
                                        </div>
                                </li>
                        </ul>
                        <ul >
                                <li class="li-img">
                                    <div class="start-product">
                                        <img src="<?php bloginfo("template_directory"); ?>/images/24/shop-list-img-1.png"
                                            alt="product-imag-1" />
                                    </div>
                                </li>
                                <li >
                                    <div class="type-product-start">
                                                <span>Tunder board</span>
                                                <p class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </p>
                                        </div>
                                </li>
                        </ul>
                        <ul >
                                <li class="li-img">
                                    <div class="start-product">
                                        <img src="<?php bloginfo("template_directory"); ?>/images/24/shop-list-img-1.png"
                                            alt="product-imag-1" />
                                    </div>
                                </li>
                                <li >
                                    <div class="type-product-start">
                                                <span>Tunder board</span>
                                                <p class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </p>
                                        </div>
                                </li>
                        </ul>
                    

                    </div>
                    <div class="new">
                            <img src="<?php bloginfo("template_directory"); ?>/images/24/shop-sidebar-img-1.jpg"
                             alt="product-imag-1" class="fluid mb-5"/>
                    </div>
                    <div class="sliathos">
                        <img src="<?php bloginfo("template_directory"); ?>/images/24/event-sidebar-banner-2.jpg"
                                alt="product-imag-1" />
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>