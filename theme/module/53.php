<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-53">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <h1>TESTIMONIALS</h1>
            </div>
            <div class="col-xl-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1>"My wife and I had the best experience last week surfing for the first time last week!"
                            </h1>
                            <p>San Diego, California Ben M</p>
                        </div>
                        <div class="carousel-item">
                            <h1>"My wife and I had the best experience last week surfing for the first time last week!"
                            </h1>
                            <p>San Diego, California Ben S</p>
                        </div>
                        <div class="carousel-item">
                            <h1>"My wife and I had the best experience last week surfing for the first time last week!"
                            </h1>
                            <p>San Diego, California Ben D</p>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>