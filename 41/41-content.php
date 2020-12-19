<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-41">
    <div class="content">
        <div class="rs-loop">
            <p>awesome event</p> 
            <p>timetables.</p>
        </div>
        <div class="row">
        <div class="col-xl-6">
                <h2>Event Timetable</h2>
                <h6>Feature your events, classes & more in a practical, beautifully styled calendar layout.</h6>
                <p>Fully compatible with the Timetable Responsive Schedule plugin, which provides your visitors with a neat event overview & lets them book appointments.</p>
            </div>
            <div class="single">
                <div class="my-div">
                    <span>1</span>
                </div>
                <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-5.png" alt="">
                <p>Event List</p>
            </div>
            <div class="col-xl-6 col-col">
            <div class="list">
            <p>Event Single</p>
                        <div class="my-div">
                            <span>2</span>
                        </div>
                        <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-5.png" alt="">                       
                </div>
                <div class="banner-img1">
                    <img src="http://<?php echo $url_path ?>/images/lan-rev-1-img-1.jpg" alt="">
                </div>            
            </div>
          
        </div>
      
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-col">
            <div class="list">
            <p>Service List</p>
                        <div class="my-div">
                            <span>3</span>
                        </div>
                        <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-4.png" alt="">                       
                </div>
                <div class="banner-img">
                    <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-1.jpg" alt="">
                </div>            
            </div>
            <div class="col-xl-6">
                <h2>Display Services</h2>
                <h6>WaveRide is packed with every single element and feature your new website can need.</h6>
                <p>Your visitors can make bookings in a straightforward and intuitive way - Booked Appointment Booking plugin comes as a bundle with the theme. You can also feature Tripadvisor ratings & a whole lot more.</p>
            </div>
            <div class="single">
                <div class="my-div">
                    <span>4</span>
                </div>
                <img src="http://<?php echo $url_path ?>/images/lan-rev-2-img-5.png" alt="">
                <p>Service single</p>
            </div>
        </div>
        <div class="rs-loop-wrap">
            <p>Perfect for all</p> 
            <p>your services!.</p>
        </div>
    </div>
</div>