<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-33">
    <div class="container">
        
		<div class="row">
			<div class="col-lg-9">
            <div class="nosidebar">
        <h1>No Sidebar</h1>
        </div>
				<div class="swiper-container">
					<div class="swiper-wrapper">
					<div class="swiper-slide">
						<img src="./images/2.jpg" alt="Relax1">
					</div>
					<div class="swiper-slide">
						<img src="./images/1.jpg" alt="Relax2">
					</div>
					<div class="swiper-slide">
						<img src="./images/3.jpg" alt="Relax3">
					</div>
					<div class="swiper-slide">
						<img src="./images/4.jpg" alt="Relax4">
					</div>
					<div class="swiper-slide">
						<img src="./images/7.jpg" alt="Relax4">
					</div>
					</div>
					<!-- Add Arrows -->
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="surfing">
					<div class="span-surfing"><span>Feb 6, 2020</span>/<span>Surfing</span></div>
					<h1>HOLIDAYS ON A SAILING BOAT? SIMPLE!</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
						deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
						sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
						quae ab illo inventore veritatis et quasi architecto</p>
					<div class="end-component">
						<div href="#" class="icon"> <img src="./images/icon.png" alt="Icon"> READ MORE</div>
						<a href="#">SHARE:
							<i class="fa fa-facebook"></i>
							<i class="fa fa-twitter"></i>
							<i class="fa fa-instagram"></i>
							<i class="fa fa-pinterest"></i>
						</a>
					</div>
				</div>
				<div class="announcing">
					<h2>ANNOUNCING O'NEILL’S WAVE OF THE YEAR</h2>
					<h6>BY ISABEL KARIKOV</h6>
					<div class="qodef-post-mark">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
						x="0px" y="0px" viewBox="0 0 266.5 161" enable-background="new 0 0 266.5 161" xml:space="preserve">
							<path d="M30,157.5c-6.7,0-11-1.3-13-4c-9.3-11.3-14-20.3-14-27c0-12.7,12.7-33.7,38-63c35.3-40.7,58.3-61,69-61
							c2,0,3,1,3,3s-1.3,4.7-4,8c-10,14-16.7,24-20,30l-6,10c10-3.3,18-5,24-5c12,2,18,9.3,18,22c0,20-12,39.5-36,58.5
							S45.3,157.5,30,157.5z M165,157.5c-6.7,0-11-1.3-13-4c-9.3-11.3-14-20.3-14-27c0-12.7,12.7-33.7,38-63c35.3-40.7,58.3-61,69-61
							c2,0,3,1,3,3s-1.3,4.7-4,8c-10,14-16.7,24-20,30l-6,10c10-3.3,18-5,24-5c12,2,18,9.3,18,22c0,20-12,39.5-36,58.5
							C200,148,180.3,157.5,165,157.5z"></path>
						</svg>
					</div>
				</div>
				<div class="ourblog">
					<div class="thumbnail">
						<img class="img-responsive" src="images/5.jpg" alt="blog1-responsive">
					</div>
					<div class="surfing">
						<div class="span-surfing"><span>Feb 6, 2020</span>/<span>Surfing</span></div>
						<h1>SPRING GIVING SUN TO THE EAST COAST</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
							deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
							sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
							quae ab illo inventore veritatis et quasi architecto</p>
						<div class="end-component">
							<div href="#" class="icon"> <img src="./images/icon.png" alt="Icon"> READ MORE</div>
							<a href="#">SHARE:
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-instagram"></i>
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="ourblog video111">
					<iframe src="https://player.vimeo.com/video/254558067?dnt=1&amp;app_id=122963"
					 class="iframe-blog"></iframe>
					<div class="surfing">
						<div class="span-surfing"><span>Feb 6, 2020</span>/<span>Surfing</span></div>
						<h1>10 BEST SURFING CAMPSITES ON EAST</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
							exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
							irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
							pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
							deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
							sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
							quae ab illo inventore veritatis et quasi architecto</p>
						<div class="end-component">
							<div href="#" class="icon"> <img src="./images/icon.png" alt="Icon"> READ MORE</div>
							<a href="#">SHARE:
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-instagram"></i>
								<i class="fa fa-pinterest"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="announcing">
					<h2>JACK FREESTONE WINS RED WAVE ON BALI</h2>
					<h6>BY JOHN MENSON</h6>
					<div class="qodef-post-mark">
						<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
						x="0px" y="0px" viewBox="0 0 266.5 161" enable-background="new 0 0 266.5 161" xml:space="preserve">
							<path d="M30,157.5c-6.7,0-11-1.3-13-4c-9.3-11.3-14-20.3-14-27c0-12.7,12.7-33.7,38-63c35.3-40.7,58.3-61,69-61
							c2,0,3,1,3,3s-1.3,4.7-4,8c-10,14-16.7,24-20,30l-6,10c10-3.3,18-5,24-5c12,2,18,9.3,18,22c0,20-12,39.5-36,58.5
							S45.3,157.5,30,157.5z M165,157.5c-6.7,0-11-1.3-13-4c-9.3-11.3-14-20.3-14-27c0-12.7,12.7-33.7,38-63c35.3-40.7,58.3-61,69-61
							c2,0,3,1,3,3s-1.3,4.7-4,8c-10,14-16.7,24-20,30l-6,10c10-3.3,18-5,24-5c12,2,18,9.3,18,22c0,20-12,39.5-36,58.5
							C200,148,180.3,157.5,165,157.5z"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>