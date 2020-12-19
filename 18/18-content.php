<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-18">
    <div class="row">
        <div class="col-md-3">
            <div class="sufring-content">
                <p>Jan 10,2020</p>
                <a href="">
                    <h4>SURFING VACATION</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="saling-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>SAILING JUNE TOUR</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.1.jpg" alt="">
            </div>
        </div>
        <!--  -->
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.2.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="sufringfor-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>SURFING FOR YOUNGEST</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.3.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="sufring-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>BEGINNER COURSES</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <!--  -->
        <div class="col-md-3">
            <div class="sufring-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>SURFING VACATION</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.4.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="saling-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>SAILING JUNE TOUR</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.5.jpg" alt="">
            </div>
        </div>
        <!--  -->
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.6.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="sufringfor-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>SURFING FOR YOUNGEST</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
        <div class="col-md-3">
            <div class="img-1">
                <img src="./images/18.7.jpg" alt="">
            </div>
        </div>
        <div class="col-md-3">
            <div class="sufring-content">
            <p>Jan 10,2020</p>
                <a href="">
                    <h4>BEGINNER COURSES</h4>
                </a>
                <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
            </div>
        </div>
</div>
        <div class="contact-content container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <div class="qodef-contact-form">
                <div class="qodef-contact-form-submit">
                    <a href="#" type="submit"
                        class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                        <span class="qodef-btn-text">CONTACT US</span><span class="qodef-btn-wave-holder"></span>
                    </a>
                </div>
            </div>
        </div>
    
</div>