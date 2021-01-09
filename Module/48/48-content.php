<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-48">
    <div class="old-theml-row">
        <div class="row">
            <div class=" col-xl-3 col-md-6">
                <div class="sufring-content">
                    <p>Jan 10,2020</p>
                    <a href="">
                        <h4>SURFING VACATION</h4>
                    </a>
                    <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                    <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
                </div>
            </div>
            <div class=" col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/18.jpg" alt="">
                </div>
                
                </a>
            </div>
            <div class=" col-xl-3 col-md-6">
                <div class="saling-content">
                    <p>Jan 10,2020</p>
                    <a href="">
                        <h4>SAILING JUNE TOUR</h4>
                    </a>
                    <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                    <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/18.1.jpg" alt="">
                </div>
                
                </a>
            </div>
        </div>
    </div>
    <div class="old-theml-row">
        <div class="row">
        <div class=" col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/18.2.jpg" alt="">
                </div>
                </a>
            </div>
            <div class=" col-xl-3 col-md-6">
                <div class="sufringfor-content">
                    <p>Jan 10,2020</p>
                    <a href="">
                        <h4>SURFING FOR YOUNGEST</h4>
                    </a>
                    <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                    <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <a href="">
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/18.3.jpg" alt="">
                </div>
               
                </a>
            </div>
            <div class=" col-xl-3 col-md-6">
                <div class="sufring-content">
                    <p>Jan 10,2020</p>
                    <a href="">
                        <h4>SURFING VACATION</h4>
                    </a>
                    <span>Lorem ip sum dolor sit amet, vidit de li catae ut mei justo quando de core</span><br>
                    <span<i class="fas fa-map-marker-alt"></i>MIAMI BEACH, FLORIDA</span>
                </div>
            </div>
          
        </div>
    </div>
</div>