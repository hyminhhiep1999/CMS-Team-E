<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
    <div class="container">
        <div class="location">
            <div class="row">
                <div class="col-md-6 ">
                    <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-graphic.png" alt="c">
                    <div class="local local-1">
                        <div class="mykonos">
                            <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-no1.png" alt="c">
                            <p>MYKONOS</p>
                            <div class="mykons-before">
                            </div>
                        </div>
                        <div class="mykonos-2">
                            <div class="mykonos-3">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-picture-1.png"
                                    alt="c">
                            </div>
                            <div class="mykonos-4">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-line.png" alt="c">
                            </div>
                        </div>
                    </div>
                    <div class="local local-2">
                        <div class="paros">
                            <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-no2.png" alt="c">
                            <p>PAROS</p>
                            <div class="paros-before">
                            </div>
                        </div>
                        <div class="paros-2">
                            <div class="paros-3">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-picture-2.png"
                                    alt="c">
                            </div>
                            <div class="paros-4">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-line.png" alt="c">
                            </div>
                        </div>
                    </div>
                    <div class="local local-3">
                        <div class="ios">
                            <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-no3.png" alt="c">
                            <p> IOS </p>
                            <div class="ios-before">
                            </div>
                        </div>
                        <div class="ios-2">
                            <div class="ios-3">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-picture-3.png"
                                    alt="c">
                            </div>
                            <div class="ios-4">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-line.png" alt="c">
                            </div>
                        </div>
                    </div>
                    <div class="local local-4">
                        <div class="santorini">
                            <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-no4.png" alt="c">
                            <p> SANTORINI </p>
                            <div class="santorini-before">
                            </div>
                            
                        </div>
                        <div class="santorini-2">
                            <div class="santorini-3">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-picture-4.png"
                                    alt="c">
                            </div>
                            <div class="santorini-4">
                                <img src="<?php bloginfo("template_directory"); ?>/images/h1-map-rev-active-line.png" alt="c">
                            </div>
                        </div>



                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map-find">
                        <h1>GREAT LOCATIONS</h1>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Quos dolor molestiae nihil, consectetur omnis qui autem
                            voluptatum eius quis libero enim cupiditate.</p>
                        <h5>MYKONOS</h5><br/>
                        <h5>PAROS</h5><br/>
                        <h5>IOS</h5><br/>
                        <h5>SANTORINI</h5><br/>
                        <button type="submit" class="find-out-more btn">FIND OUT MORE</button>
                    </div>

                </div>
            </div>
        </div>

            <div class="row">
                <div class="col-md-5">
                <h2>CARDIFF BY THE SEA </h2>
                <p>Lorem ipsum dolor sit amet, con secte tur adip sicing elit, do eius mod tempor in cidi dunt ut la bore magna aliquat enim ad.</p>
                <img src="<?php bloginfo("template_directory"); ?>/images/h1-img-31.png" alt="c">
                </div>
                <div class="col-md-4">
                <img src="<?php bloginfo("template_directory"); ?>/images/p2-img-2.jpg" alt="c">
                </div>
                <div class="col-md-3">
                <img src="<?php bloginfo("template_directory"); ?>/images/p2-img-3.jpg" alt="c">
                </div>
            </div>

    </div>
</div>