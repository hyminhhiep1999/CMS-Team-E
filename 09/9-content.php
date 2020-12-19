<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-9"> 
    <div class="container">
        <div class="surfing-avili">
            <h1>
            SURFING FOR ALL ABILITIES
            </h1>
            <p class="gubergren">Ex gubergren consequat forensibus mea, primis tritani dissentiunt ad mea, per id habeo utamur erroribus.</p>
            <div class="inter-media">
                <div class="row">
                    <div class="col-md-6 col-xl-3">
                        <img src="http://<?php echo $url_path ?>/images/h1-img-33.png" alt="a">
                        <div class="text-new-supper">
                            <h4>NEW TO THE WATER?</h4>
                            <p>
                            Lorem ipsum dolor sit amet, con ctetur ad i
                            p isicing elit, sed do eiusmod tem por incidi sit.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <img src="http://<?php echo $url_path ?>/images/h1-img-34.png" alt="a">
                        <div class="text-new-supper">
                            <h4>NEW TO THE WATER?</h4>
                            <p>
                            Lorem ipsum dolor sit amet, con ctetur ad i
                            p isicing elit, sed do eiusmod tem por incidi sit.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <img src="http://<?php echo $url_path ?>/images/h1-img-35.png" alt="a">
                        <div class="text-new-supper">
                                <h4>NEW TO THE WATER?</h4>
                                <p>
                                Lorem ipsum dolor sit amet, con ctetur ad i
                                p isicing elit, sed do eiusmod tem por incidi sit.
                                </p>
                            </div>
                        </div>
                    <div class="col-md-6 col-xl-3">
                        <img src="http://<?php echo $url_path ?>/images/h1-img-36.png" alt="a">
                        <div class="text-new-supper">
                                <h4>NEW TO THE WATER?</h4>
                                <p>
                                Lorem ipsum dolor sit amet, con ctetur ad i
                                p isicing elit, sed do eiusmod tem por incidi sit.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
