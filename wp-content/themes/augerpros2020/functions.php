<?php

function load_styles() {
	wp_enqueue_style('bootstrap_styles', get_template_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('animate_styles', get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('slick_styles', get_template_directory_uri() . '/css/slick.css');
	wp_enqueue_style('slick_theme_styles', get_template_directory_uri() . '/css/slick-theme.css');	
    wp_enqueue_style('wordpress_styles', get_template_directory_uri() . '/css/wordpress.css');
	wp_enqueue_style( 'custom-styles', get_template_directory_uri() . '/css/styles.css');
}
add_action('wp_enqueue_scripts', 'load_styles');


function load_scripts() {
	wp_enqueue_script('bootstrap_scripts', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'), '1.0', true);
	wp_enqueue_script('main_scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);
	wp_enqueue_script('slick_scripts', get_template_directory_uri() . '/js/slick/slick.min.js', array('jquery'), '1.0', true);
	wp_enqueue_script('custom_scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

// Thumbnails
add_theme_support( 'post-thumbnails' ); 
add_theme_support( 'title-tag' );
// navigation
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'augerpros' ),
) );

// Sidebars
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
    'name' => __( 'Sidebar Top', 'alliance' ),
    'id' => 'sidebar-top',
    'description' => __( 'The top sidebar widget', 'alliance' ),
    'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ));
    register_sidebar( array(
    'name' => __( 'Sidebar Middle', 'alliance' ),
    'id' => 'sidebar-middle',
    'description' => __( 'The middle sidebar widget', 'alliance' ),
    'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ));
    register_sidebar( array(
    'name' => __( 'Sidebar Bottom', 'alliance' ),
    'id' => 'sidebar-bottom',
    'description' => __( 'The bottom sidebar widget', 'alliance' ),
    'before_widget' => '<div class="sidebar-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>',
    ));
}

function theme_url_shortcode( $attrs = array (), $content = '' ) {
     
    $theme = ( is_child_theme() ? get_stylesheet_directory_uri() : get_template_directory_uri() );
 
    return $theme;
     
}
add_shortcode('theme', 'theme_url_shortcode' );

// make admin page search by title only
function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
 
    if ( empty( $search ) )
        return $search; // skip processing - no search term in query
 
    $q = $wp_query->query_vars;    
    $n = ! empty( $q['exact'] ) ? '' : '%';
 
    $search =
    $searchand = '';
 
    foreach ( (array) $q['search_terms'] as $term ) {
        $term = esc_sql( like_escape( $term ) );
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
 
    if ( ! empty( $search ) ) {
        $search = " AND ({$search}) ";
        if ( ! is_user_logged_in() )
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
 
    return $search;
}
add_filter( 'posts_search', '__search_by_title_only', 500, 2 );