<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-55">
   <div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="title">
					<h1>CHECK FORECAST</h1>
					<span>Lorem ipsum dolor sit amet, con se ctetur adipisici elit, do eius mod tempor.</span>
				</div>
				<div class="space">

				</div>
				<div class="row 2 text-1">	
					<div class="col-md-3">
						<div class="text-1">
							<h5>TODAY</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-2">
							<span>+15</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>Broken Clouds</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>MIAMI</span>
						</div>
					</div>						
				</div>
				<div class="row 2 text-1">	
					<div class="col-md-3">
						<div class="text-1">
							<h5>TOMORROW</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-2">
							<span>+22</span>
						
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span> Light Rain</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>MIAMI</span>
						</div>
					</div>						
				</div>
				<div class="row 2 text-1">	
					<div class="col-md-3">
						<div class="text-1">
							<h5>SATURDAY</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-2">
							<span>+17</span>
						
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>Scattered Clouds</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>MIAMI</span>
						</div>
					</div>						
				</div>
				<div class="row 2 text-1">	
					<div class="col-md-3">
						<div class="text-1">
							<h5>SUNDAY</h5>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-2">
							<span>+18</span>
							
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>Overcast Clouds</span>
						</div>
					</div>
					<div class="col-md-3">
						<div class="text-1">
							<span>MIAMI</span>
						</div>
					</div>						
				</div>
				<div class="space">

				</div>
				<div class="more">
					<a href="#">
						<ul>More on waveweather.com</ul>
					</a>
				</div>
			</div>
			
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="presstone">
							<h4>KARPATHOS</h4>
							<p>16.04.20 | Tuesday</p>
						</div>
						<div class="img-her">
							<img src="<?php bloginfo("template_directory"); ?>/images/55/55-1.jpg" alt="a">
						</div>	
					</div>
					<div class="col-md-6">
						<div class="world">
							<img src="<?php bloginfo("template_directory"); ?>/images/55/55-2.jpg" alt="">
						</div>
					</div>
				</div>
				<div class="space">

				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="world">
							<img src="<?php bloginfo("template_directory"); ?>/images/55/55-3.jpg" alt="">
						</div>
					</div>
					<div class="col-md-6">
						<div class="presstone">
							<h4>SKIATHOS</h4>
							<p>14.03.20 | Tuesday</p>
						</div>
						<div class="img-her">
							<img src="<?php bloginfo("template_directory"); ?>/images/55/55-4.jpg" alt="a">
						</div>	
					</div>
				</div>
			</div>
		</div>
   </div>
</div>