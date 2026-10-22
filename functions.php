<?php
function my_wp_nav_menu_args( $args = '' ) {
$args['container'] = false;
return $args;
}
function register_my_menus() {
  register_nav_menus(
    array(
      'main-menu' => __( 'Main Menu' ),
		'main-menu1' => __( 'Main Menu1' ),
      'mobile-menu' => __( 'Mobile Menu' ),
      'footer-menu-one' => __( 'Footer Menu One' ),
	  'footer-menu-two' => __( 'Footer Menu Two' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

function add_id_and_classes_to_page_menu( $ulclass ) {
  return preg_replace( '/<ul>/', '<ul class="main_menu">', $ulclass, 1 );
}
add_filter( 'wp_page_menu', 'add_id_and_classes_to_page_menu' );

function oldsCoolMettle_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('home-featured',600,400,array('center', 'center'));
    add_theme_support('automatic-feed-links');
    register_nav_menus( array(
        'primary' => __('Primary Menu', 'oldsCoolMettle')
    ));
    // $args = array (
    //     'default-image' => get_template_directory_uri().'/images/banner.webp',
    //     'default-text-color' => '000',
    //     'width' => 1920,
    //     'height' => 400,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // );
    // add_theme_support('custom-header', $args);
};
add_action('after_setup_theme', 'oldsCoolMettle_theme_setup');