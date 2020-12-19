<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-43">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-col">
                <div class="banner-img">
                <img src="http://<?php echo $url_path ?>/images/lan-rev-4-img-1.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-6">
                <h2>Booking and More</h2>
                <h6>WaveRide is packed with every single element and feature your new website can need.</h6>
                <p>Your visitors can make bookings in a straightforward and intuitive way - Booked Appointment Booking plugin comes as a bundle with the theme. You can also feature Tripadvisor ratings & a whole lot more.</p>
            </div>
            <div class="tripadvisor">
                <div class="my-div">
                    <span>7</span>
                </div>
                <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-4.png" alt="">
                <p>tripadvisor</p>
            </div>
        </div>
        <div class="rs-loop-wrap">
            <p>Tons of useful</p> 
            <p>options & features.</p>
        </div>
    </div>
    <div class="banner-wave">
        <img src="http://<?php echo $url_path ?>/images/lan-rev-img-2.png" alt="lan-rev-img-2.png">
        <h2>Ride the Perfect Wave</h2>
        <div class="qodef-contact-form">
            <div class="qodef-contact-form-submit">
                <a href="#"
                    class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover">
                    <span class="qodef-btn-text">Get waveride</span><span class="qodef-btn-wave-holder"></span>
                </a>
            </div>
        </div>
    </div>
</div>