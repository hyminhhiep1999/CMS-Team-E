<?php
get_header();
?>

<div class="type-31">
<div class="container">  

    <div class="surfing">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<div class="span-surfing"><span>Feb 6, 2020</span>/<span>Surfing</span></div>
						<h1>
                        	<?php the_title()?>
                        </h1>
						<?php if(has_post_thumbnail()) : ?>
						<div class="ourblog">
							<div class="thumbnail">
								<img class="img-responsive" src="<?php the_post_thumbnail_url('post_image'); ?>" alt="blog1-responsive">
							</div>
                        </div>
                   
                       
                        <?php endif; ?>
                        <?php the_content(); ?>
				
						<div class="end-component">
							<div href="#" class="icon"> <img src="<?php bloginfo("template_directory"); ?>/images/icon.png" alt="Icon"> READ MORE</div>
							<a href="#">SHARE:
								<i class="fa fa-facebook"></i>
								<i class="fa fa-twitter"></i>
								<i class="fa fa-instagram"></i>
								<i class="fa fa-pinterest"></i>
							</a>
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
                    <?php endwhile; else: endif;?>
				</div>

    <?php/* get_sidebar();*/ ?>
</div>

</div>

<?php
get_template_part('module/56');
get_template_part('module/37');

?>

<?php
get_footer();
?>