<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-23">
<div class="related_product">
    <div class="container">
    <h2>SHOP</h2>
        <div class="row">

                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/1.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/2.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/3.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>   
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/4.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/5.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>  
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/6.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>          
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/7.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>       
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/8.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>       
                <div class="col-xs-12 col-sm-3 col-md-4">
                    <div class="trans_product">
                        <div class="pro">
                            <img src="http://<?php echo $url_path ?>/images/9.png" alt="" class="image">
                            <div class="add-to-cart">
                                <div class="text">ADD TO CART</div>
                            </div>
                        </div>
                        <div class="infor">
                            <h4 class="name-title-product">
                                <a href="">Woman’s Wetsuit Pro</a>
                            </h4>
                            <div class="category_product"><a href="">Equipment,Scubadiving</a></div>
                            <span class="price_product"><a href="">$100.00</a></span>
                        </div>
                    </div>
                </div>    
    </div>
    <nav class="page-tong">
                    <ul class="page-don">
                        <li>
                            <span aria-current = "page" class="page-don current">1</span>
                        </li>
                        <li>
                            <a class="page-don" href="http://localhost/CMS-NHOME/23/23.php">2</a>
                        </li>
                        <li>
                            <a class="page-don" href="http://localhost/CMS-NHOME/23/23.php">3</a>
                        </li>
                        <li>
                            <a class="next" href="">→</a>
                        </li>
                    </ul>
                </nav>   
</div>


</div>