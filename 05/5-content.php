<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
    <div class="learn_with_us">
        <div class="container">
            <div class="title_with_us">
                <h1>LEARN WITH US</h1>
                <div class="title_learn_us">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                </div>
            </div>
            <div class="paddle">
                <div class="row">
                    <div class="col-md-4 grab-blow">
                        <div class="grab-paddle-left">
                            <div class="img-paddle-left">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-1.png" alt="" class="image">
                            </div>
                            <h4>GRAB YOUR BOARD TODAY</h4>
                            <div class="text-left1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>
                        <div class="grab-paddle-left">
                        <div class="img-paddle-left">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-2.png" alt="" class="image">
                            </div>
                            <h4>ON LAND INSTRUCTIONS</h4>
                            <div class="text-left1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>
                        <div class="grab-paddle-left">
                            <div class="img-paddle-left">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-3.png" alt="" class="image">
                            </div>
                            <h4>LET’S SURF TOGETHER</h4>
                            <div class="text-left1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="grab-paddle-center">
                        <img src="http://<?php echo $url_path ?>/images/h3-img-2.png" alt="" class="image">
                        <div class="background_index">
                        <img src="http://<?php echo $url_path ?>/images/h3-img-6.png" alt="" class="image">
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4 grab-blow">
                        <div class="grab-paddle-right">
                            <div class="img-paddle-right">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-4.png" alt="" class="image">
                            </div>
                            <h4>LET’S SURF TOGETHER</h4>
                            <div class="text-right1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>
                        <div class="grab-paddle-right">
                            <div class="img-paddle-right">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-5.png" alt="" class="image">
                            </div>
                            <h4>LET’S SURF TOGETHER</h4>
                            <div class="text-right1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>
                        <div class="grab-paddle-right">
                            <div class="img-paddle-right">
                                <img src="http://<?php echo $url_path ?>/images/h2-item-img-6.png" alt="" class="image">
                            </div>
                            <h4>LET’S SURF TOGETHER</h4>
                            <div class="text-right1">
                                <p>Remember to always keep the needs
                                    of your users in mind. Don’t create a mobile app simply as a
                                    vanity project for your brand.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    
</div>



</div>