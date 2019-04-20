<?php 
	
function nature_script_enqueue() {
	wp_enqueue_style('fontawesomecss', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.6', 'all');
	wp_enqueue_style('customstyle', get_template_directory_uri().'/css/nature.css', array(), '1.0.0', 'all');

	wp_enqueue_script('headjs', get_template_directory_uri().'/js/head.min.js', array(), '1.0.0', true);
	wp_enqueue_script('jqueryjs', get_template_directory_uri().'/js/jquery-3.2.1.min.js', array(), '3.2.1', true);
	wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/js/bootstrap.min.js', array(), '3.3.7', true);
	wp_enqueue_script('customjs', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'nature_script_enqueue');


/*
=================================================
Activate menus
=================================================
*/
function nature_theme_setup(){
	add_theme_support('menus');

	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
}
add_action('init', 'nature_theme_setup');

/*
=================================================
Theme support function
=================================================
*/
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', array('search-form'));

/*
=================================================
Sidebar function
=================================================
*/

function nature_widget_setup(){
	register_sidebar(
		array(
			'name' => 'Sidebar',
			'id' => 'sidebar-1',
			'class' => 'custom',
			'description' => 'Blog Sidebar',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h4>'
			)
	);
}
add_action('init', 'nature_widget_setup');




add_action( 'after_setup_theme', 'my_custom_rss_render' );

/**
 * Custom RSS template callback.
 */
function my_custom_rss_render() {
    add_feed( 'marko', 'myRssFeed' ); 
}
function myRSSFeed() {
    get_template_part( 'rss-marko', 'marko' ); 	
}