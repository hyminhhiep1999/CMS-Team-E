<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-37">
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h3>COMMENTS</h3>
				</div>
				<div class="space"></div>
				<div class="row ">
					<div class="col-md-1">
							<img src="<?php bloginfo("template_directory"); ?>/images/37-1.png" alt="">
					</div>
					<div class="col-md-11">
						<h5>JOHN HOPKINS</h5>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco</span>
						<h6>REPLY</h6>
					</div>
				</div>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-2">
							<img src="<?php bloginfo("template_directory"); ?>/images/37-2.png" alt="">
					</div>
					<div class="col-md-10">
						<h5>JOHN HOPKINS</h5>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco</span>
						<h6>REPLY</h6>
					</div>
				</div>
				<div class="space"></div>
				<div class="row">
					<div class="col-md-1">
							<img src="<?php bloginfo("template_directory"); ?>/images/37-3.png" alt="">
					</div>
					<div class="col-md-11">
						<h5>JOHN HOPKINS</h5>
						<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitationullamco</span>
						<h6>REPLY</h6>
					</div>
				</div>
			</div>
			<div class="col-md-12">	
				<div class="img-rightWaveContact">
					<h3 class="superior">LEAVE A COMMENT</h3>
					<div class="form-filed2 form1">
						<input name="COMMENT" placeholder="Your Comment"
							class="input-field">
					</div>
					<div class="form-filed2 form1">
						<input name="EMAIL" placeholder="Your Email"
							class="input-field">
					</div>
					<div class="form-filed2 form2">
						<input name="NAME" placeholder="Your Name"
							class="input-field">
					</div>
					<div class="form-filed2 form3">
						<input name="website" placeholder="Your Website"
							class="input-field">
					</div>
					<p class="comment-form-cookies-consent">
						<input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes">
						<label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label>
					</p>
					<div class="qodef-contact-form-submit button-qodef1">
						<button
						type="submit"
						class="wpcf7-form-control wpcf7-submit qodef-btn qodef-btn-medium qodef-btn-solid qodef-btn-custom-hover-color qodef-btn-custom-hover-bg qodef-btn-custom-border-hover"
						>
						<span class="qodef-btn-text">Submit</span
						><span class="qodef-btn-wave-holder"></span>
						</button>
                	</div>
				</div>
			</div>
		</div>
		<div class="imgtop-waves">
            <img src="<?php bloginfo("template_directory"); ?>/images/4.png" alt="images">
        </div>
	</div>
</div>