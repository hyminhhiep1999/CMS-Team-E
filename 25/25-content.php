<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-25">
<div class="product-summary">
  <div class="top-title">
    <div class="container">
    <h1>SHOP</h1>
    </div>
  </div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-lg-6">
            <div class="product-gallery d-flex">
              <div class="product-gallery-thumbnail">
                <ul class="list-items" data-url="http://<?php echo $url_path ?>">
                  <li class="items" data-image="">
                    <img src="http://<?php echo $url_path ?>./images/pr-gallery-1.jpg" alt="item-pr-1" class="img-fluid"/>
                  </li>
                  <li class="items" data-image="">
                    <img src="http://<?php echo $url_path ?>" alt="item-pr-2" class="img-fluid"/>
                  </li>
                  <li class="items" data-image="">
                    <img src="http://<?php echo $url_path ?>" alt="item-pr-2" class="img-fluid"/>
                  </li>
                  <li class="items" data-image="">
                   <img src="http://<?php echo $url_path ?>" alt="item-pr-3" class="img-fluid"/>
                  </li>
                </ul>
              </div>
              <div class="product-gallery-wrapper">
                <div class="product-image">
                <img src="http://<?php echo $url_path ?>" alt="product-imag-1" class="img-fluid image-full"/>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-lg-6">
            <div class="product-detail pl-3">
              <h1 class="product-title">TUNDER SHORT BOARD</h1>
              <p class="product-rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
              </p>
              <p class="product-price">$130.00</p>
              <p class="product-description-short">Causae iudicat vitu perata mea ei, cum posse im pedit molestie ne, 
                atqui viris simi lique ei vel. Per te illud an imal, vix ea sint con sul a pella tur iris itegre.</p>
              <div class="product-vartiant mb-3">
                <span>COLORS: </span> 
                <div class="ml-4 d-inline-block">
                  <div class="color-picker is-active" data-value="blue">
                    <span></span>
                  </div>
                  <div class="color-picker" data-value="green">
                    <span></span>
                  </div>
                  <div class="color-picker" data-value="orange">
                    <span></span>
                  </div>
                </div>
                <div class="seclect-color"></div>
              </div>
              <div class="product-action d-flex align-items-center">
                <div class="quantity-buttons">
                  <span class="quantity-minus dripicons-down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                  <input type="number" name="name" Value="1" min="1" />
                  <span class="quantity-plus dripicons-up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>
                </div>
                <button type="submit" class="add_to_cart btn">Add to cart</button>
              </div>
              <div class="product-vendor mt-5">
                <span><strong>SKU: </strong>001</span>
                <span><strong>CATEGORIES: </strong><a href="/">Equipment</a>,<a href="/">Canoenig</a></span>
                <span><strong>TAGS: </strong><a href="/">board</a>,<a href="/">surf</a>,<a href="/">suriging</a></span>
                <span class="product-follow-us"><strong>FOLLOW US: </strong><a href="/">board</a>,<a href="/">surf</a>,<a href="/">suriging</a></span>
              </div>
            </div>
          </div>
        </div>
        <div class="product-tab mt-5 pt-5">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Additional information </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Reviews (1)</a>
            </li>
          </ul>
          <div class="tab-content mt-4" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>Lorem ipsum dolor sit amet, vix vero ferri causae te, ad eam congue quodsi re prehen dunt. 
              Populo nemore viderer sed ad, duo homero libris signi fer umque ex. Et mel meis nostrum, 
              te appa reat tacimates tractatos eos. Mel ex scripta re pudi andae, et dicat simul nec, mazim voluptua fabellas cu sit. 
              Ex omnesque fabellas pri. Ad iudico voluptaria mel. Illud facilis sit ei, ius senserit im per diet no, ea sit facer decore volu ptatibus. Quas graecis nec ea. Id al bucius elaboraret vim, et vis labore in corrupte ad agam ridens.</p>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              <p>
                <span><strong>WEIGHT</strong> 5kg</span>
                <span><strong>DIMENSIONS</strong> 150 × 50 × 150 cm</span>
                <span><strong>COLORS</strong>  Blue, Green, Orange</span>
              </p>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <p>Lorem ipsum dolor sit amet, vix vero ferri causae te, ad eam congue quodsi re prehen dunt. 
              Populo nemore viderer sed ad, duo homero libris signi fer umque ex. Et mel meis nostrum, 
              te appa reat tacimates tractatos eos. Mel ex scripta re pudi andae, et dicat simul nec, mazim voluptua fabellas cu sit. Ex omnesque fabellas pri. Ad iudico voluptaria mel.
               Illud facilis sit ei, ius senserit im per diet no, ea sit facer decore volu ptatibus. Quas graecis nec ea. Id al bucius elaboraret vim, et vis labore in corrupte ad agam ridens.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
</div>