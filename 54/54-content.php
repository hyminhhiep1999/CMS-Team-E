<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-54">
    <div class="container">
        <div class="text-coaching">
            <h1>YOUR SURF COACHING</h1>
            <p>
                Ex gubergren consequat forensibus mea, primis tritani dissentiunt ad mea, per id habeo utamur erroribus.
            </p>
        </div>
        <div class="movement">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <img src="./images/h1-img-process-1.png" alt="v">
                    <h4>
                    MOVEMENT
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    <div class="number-on-picter">
                        <p>
                            1.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 ">
                    <img src="./images/h1-img-process-2-100x100.png" alt="v">
                    <h4>
                    TECHNIQUE
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    <div class="number-on-picter">
                        <p>
                            2.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 ">
                    <img src="./images/h1-img-process-3-100x100.png" alt="v">
                    <h4>
                    PRACTICE
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    <div class="number-on-picter">
                        <p>
                            3.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3">
                    <img src="./images/h1-img-process-4.png" alt="v">
                    <h4>
                    HAVING A BLAST
                    </h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
                    <div class="number-on-picter">
                        <p>
                            4.
                        </p>
                       
                    </div>
                </div>

            </div>
        </div>
    </div>
   
</div>