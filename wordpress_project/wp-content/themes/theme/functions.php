<?php

function load_file()
{
  wp_register_style('bootsmin', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', 'all');
  wp_enqueue_style('bootsmin');

  wp_register_style('fontawesome-style', get_template_directory_uri() . '/font-awesome/fontawesome.min.css', 'all');
  wp_enqueue_style('fontawesome-style');

  wp_register_style('owl-carasoul-style', get_template_directory_uri() . '/lib/css/owl.carousel.min.css', 'all');
  wp_enqueue_style('owl-carasoul-style');

  wp_register_style('woocommerce-style', get_template_directory_uri() . '/style.css', 'all');
  wp_enqueue_style('woocommerce-style');

  wp_register_style('swiper-style', get_template_directory_uri() . '/lib/css/swiper.min.css', 'all');
  wp_enqueue_style('swiper-style');

  wp_register_style('stylemain-style', get_template_directory_uri() . '/css/woocomstyle/css/woocommerce.css', 'all');
  wp_enqueue_style('stylemain-style');

  wp_register_style('reset-style', get_template_directory_uri() . '/css/reset.css', 'all');
  wp_enqueue_style('reset-style');

  wp_register_script('jquery-style', get_template_directory_uri() . '/lib/js/jquery-3.1.1.min.js', 'all');
  wp_enqueue_script('jquery-style');

  wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/bootstrap/js/bootstrap.bundle.min.js', 'all');
  wp_enqueue_script('bootstrap-bundle');

  wp_register_script('owl-carasoul-js', get_template_directory_uri() . '/lib/js/owl.carousel.min.js', 'all');
  wp_enqueue_script('owl-carasoul-js');

  wp_register_script('swiper-js', get_template_directory_uri() . '/lib/js/swiper.min.js', 'all');
  wp_enqueue_script('swiper-js');

  wp_register_script('one-js', get_template_directory_uri() . '/js/1.js', 'all');
  wp_enqueue_script('one-js');

  wp_register_script('custom-js', get_template_directory_uri() . '/js/31.js', 'all');
  wp_enqueue_script('custom-js');

  wp_register_script('modal-video', get_template_directory_uri() . '/js/15.js', 'all');
  wp_enqueue_script('modal-video');

  wp_register_script('swiper-slider-test', get_template_directory_uri() . '/js/56.js', 'all');
  wp_enqueue_script('swiper-slider-test');

}
add_action('wp_enqueue_scripts', 'load_file');


// Add menus
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(
 array (
   'top-menu' => 'Top Menu',
 )
);

add_image_size('post_image', 1100, 750, false);

// add a wwidget
register_sidebar(
  array(
    'name' => 'Page Sidebar',
    'id' => 'page-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  )
);

register_sidebar(
  array(
    'name' => 'Blog Sidebar',
    'id' => 'blog-sidebar',
    'class' => '',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  )
);
