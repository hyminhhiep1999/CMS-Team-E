<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="container">
        <div class="nav-items">
            <a class="qodef-side-menu-button-opener qodef-side-menu-button-opener-svg-path" href="#" id="opennav">
                <span class="qodef-side-menu-icon">
                <svg class="qodef-side-area-svg-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -1.6 25 16.5" enable-background="new 0 -1.6 25 16.5" width="25" height="30" xml:space="preserve">
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,2.8
                    c0,0,2.4-2.4,9.2,0.2c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,6.9
                    c0,0,2.4-2.4,9.2,0.2c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                <path fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4.4,11c0,0,2.4-2.4,9.2,0.2
                    c5.6,2.1,8.2-0.6,8.2-0.6"></path>
                </svg> </span>
            </a>
        </div>
        <div class="close-side"></div>
        <div id="mySidenav" class="sidenav">
            <div class="bg-sidenav">
                <div class="nav-heading">
                    <img src="./images/logo2.png" alt="side-nav">
                    <a class="closebtn" href="#">
                            <svg
                                class="qodef-close-svg-icon"
                                width="17"
                                height="15"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                x="0px"
                                y="0px"
                                viewBox="0 0 16.9 15"
                                enable-background="new 0 0 16.9 15"
                                xml:space="preserve"
                            >
                                <line
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-miterlimit="10"
                                x1="2"
                                y1="1"
                                x2="15"
                                y2="14"
                                ></line>
                                <line
                                fill="none"
                                stroke="#000000"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-miterlimit="10"
                                x1="2"
                                y1="14"
                                x2="15"
                                y2="1"
                                ></line>
                            </svg>
                        </a>
                </div>
                <div class="contact-side">
                    <div class="contact-padding">
                        <h3 class="contact-title">TELL ME MORE</h3>
                        <p class="contact-color">Make a splash with WaveRide, designed for everyone passionate about all things surfing.</p>
                        <p class="contact-color"><i class="fa fa-phone"></i> 156-677-124-442-2887</p>
                        <p class="contact-color"><i class="fa fa-location-arrow"></i> wave@qodeinteractive.com</p>
                        <p class="contact-color"><i class="fa fa-map-marker"></i> 184 Main Collins Street Victoria 8007</p>            
                    </div>
                    <div class="svg-contact">
                        <svg version="1.1" x="0px" y="0px" 
                        viewBox="0 0 413.5 223"
                        xml:space="preserve">
                        <path d="M0,104v119h413.9V68.5c0,0-34.9,48-200.4-14C161.8,35.1,53.5,24.5,0,104z"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>              
    </div>
</div>