<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('main');

}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


// Nav Menus
register_nav_menus( array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' ),
    'footer-menu-col2' => __( 'Footer Col2', 'theme' ),
    'footer-menu-col3' => __( 'Footer Col3', 'theme' ),
) );

if(!function_exists('test_menu')){
    function test_menu($menu){
        $menu = array(
          'menu'                 => '',
          'container_id'         => '',
          'container_aria_label' => '',
          'menu_class'           => 'navbar-nav',
          'menu_id'              => '',
          'echo'                 => true,
          'fallback_cb'          => 'wp_page_menu',
          'before'               => '',
          'after'                => '',
          'link_before'          => '',
          'link_after'           => '',
          'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'item_spacing'         => 'preserve',
          'depth'                => 0,
          'walker'               => '',
          'theme_location'       => $menu,
        );
        wp_nav_menu( $menu );
    }
  }

  if(!function_exists('test_menu2')){
    function test_menu2($menu){
        $menu = array(
          'menu'                 => '',
          'container_id'         => 'col-md-3',
          'container_aria_label' => '',
          'menu_class'           => 'footer-menu',
          'menu_id'              => '',
          'echo'                 => true,
          'fallback_cb'          => 'wp_page_menu',
          'before'               => '',
          'after'                => '',
          'link_before'          => '',
          'link_after'           => '',
          'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'item_spacing'         => 'preserve',
          'depth'                => 0,
          'walker'               => '',
          'theme_location'       => $menu,
        );
        wp_nav_menu( $menu );
    }
  }
// Theme Support
add_theme_support('menus');
add_theme_support( 'post-thumbnails' );

// Image Sizes
add_image_size('small', 600, 600, false);

// Add option page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

	
add_theme_support( 'post-thumbnails' );