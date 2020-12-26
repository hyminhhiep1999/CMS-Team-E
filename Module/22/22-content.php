<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-22">   
    <div class="close-side-nav"></div>
        <div id="newID" class="sidenavs">
            <div class="nav-heading">
                <div class="flex-header">
                    <div class="logo-svg-holder">
                        <svg x="0px" y="0px" viewBox="0 0 87 87" style="fill: #ee2852; height: 40px;">
                            <path d="M55.4,81.5c6.1-11.1,5.2-16.1-4.3-24.3c6.1-3.5,9.5-8.5,9.1-15.7c-0.5-8.2-7.7-14.7-16.3-14.6
                                c-8.5,0.1-15.6,6.7-15.9,15c-0.3,8.5,5.9,15.8,14.3,16.6c1.4,0.1,2.8,0.2,4.2,0.5c5.9,1.2,10.2,6.7,9.8,12.6
                                c-0.4,6.4-5.5,11.4-11.8,11.7C24.9,84.2,5.9,68.5,3.2,49.3C-0.1,26.9,14.4,6.8,36.4,2.8c22.3-4,43.4,10,48.1,32
                                c4.3,20-8.6,41.2-28.4,46.7C55.9,81.5,55.6,81.5,55.4,81.5z"></path>
                        </svg>
                    </div>
                    <div class="qode-text">
                        Qode Interactive
                    </div>
                </div>
                <div class="related">
                    RELATED THEMES
                </div>
                <div class="banner-popup">
                    <img src="./images/1.jpg" alt="Popup1">
                    <div class="title-pp">
                        <b>Hatha</b>
                    </div>
                    <div class="theme-purchase">
                        <div class="type">
                        SPORT & FITNESS
                        </div>
                        <div class="price">
                        $75
                        </div>
                    </div>
                </div>
                <div class="banner-popup">
                    <img src="./images/2.jpg" alt="Popup1">
                    <div class="title-pp">
                        <b>Top Soccer</b>
                    </div>
                    <div class="theme-purchase">
                        <div class="type">
                        SPORT & FITNESS
                        </div>
                        <div class="price">
                        $102
                        </div>
                    </div>
                </div>
                <div class="banner-popup">
                    <img src="./images/3.png" alt="Popup1">
                    <div class="title-pp">
                        <b>GrandPix</b>
                    </div>
                    <div class="theme-purchase">
                        <div class="type">
                        SPORT & FITNESS
                        </div>
                        <div class="price">
                        $721
                        </div>
                    </div>
                </div>
                <div class="banner-popup">
                    <img src="./images/4.jpg" alt="Popup1">
                    <div class="title-pp">
                        <b>Powerlift</b>
                    </div>
                    <div class="theme-purchase">
                        <div class="type">
                        SPORT & FITNESS
                        </div>
                        <div class="price">
                        $750
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-all">
            <div class="btnClose">
                <button><i class="fa fa-long-arrow-right"></i></button>
            </div>
            <div class="btnCart">
                <button><i class="fa fa-shopping-cart"></i></button>
            </div>  
        </div>   
    <div class="btn-header">
        <div><button class="button-header1" id="openTheme"><span><i class="fa fa-circle-o"></i></span>RELATED</button></div>
        <div><button class="button-header2"><span><i class="fa fa-shopping-cart"></i></span>BUY NOW</button></div>
    </div>
</div>