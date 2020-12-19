<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-36">
    <div class="container">
		<div class="row">
			<div class="col-lg-9">
            <div class="blog">
		<h1>Blog</h1>
        </div>
		<div class="surfing">
			<img src="./images/3.jpg" alt="c">
					<div class="span-surfing"><span>Feb 5, 2020</span>/<span>Surfing</span></div>
					<h1>WORLD CHAMP ROUNDTABLE ON SAND</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
						deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
						sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
						quae ab illo inventore veritatis et quasi architecto</p>
						<div class="row">
							<div class="col-lg-4">
								<img src="./images/blog-inner-img-1.jpg" alt="c">
							</div>
							<div class="col-lg-4">
								<img src="./images/blog-inner-img-2-1.jpg" alt="">
							</div>
							<div class="col-lg-4">
								<img src="./images/blog-inner-img-3.jpg"alt="">
							</div>
							<div class="col-lg-8">
								<img src="./images/blog-inner-img-4.jpg"alt="">
							</div>
							<div class="col-lg-4">
								<img src="./images/blog-inner-img-5-3.jpg" alt="">
							</div>

						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
						incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
						exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
						irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
						deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error
						sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa 
						quae ab illo inventore veritatis et quasi architecto</p>
					<div class="end-component">
						<div class="tag">
							
							<a href="https://waveride.qodeinteractive.com/tag/board/" rel="fa">Board</a>
							,
							<a href="https://waveride.qodeinteractive.com/tag/surf/" rel="fa">Surf</a>
							,
							<a href="https://waveride.qodeinteractive.com/tag/travel/" rel="fa">Travel</a>
						</div>
						<a href="#">SHARE:
							<i class="fa fa-facebook"></i>
							<i class="fa fa-twitter"></i>
							<i class="fa fa-instagram"></i>
							<i class="fa fa-pinterest"></i>
						</a>
					</div>
					<div class="conten2">
						<div class="row">
						<div class="col-md-3 ">
							<img src="http://<?php echo $url_path?>/images/blog-user-img-1.png" alt="c">
						</div>
						<div class="col-md-9 ">
							<h5>MIKE FREEMAN</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sed interdum augue morbi pharetra justo vel ante accumsan consectetur.</p>
							<a href="#">
							<i class="fa fa-facebook"></i>
							<i class="fa fa-twitter"></i>
							<i class="fa fa-instagram"></i>
							<i class="fa fa-pinterest"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="chuyentrang">
			

		</div>
	</div>
</div>