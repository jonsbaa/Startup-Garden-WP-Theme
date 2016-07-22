<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ), true );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

function customScripts() {
	if ( is_page( 'about' ) ) {
		wp_register_script( 'galleria', get_template_directory_uri() . '/galleria/galleria-1.4.2.js', array( 'jquery' ));
		wp_register_script( 'flickr', get_template_directory_uri() . '/galleria/plugins/flickr/galleria.flickr.min.js', array( 'jquery' ));
		wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ));
		wp_register_script( 'scrollspy', get_template_directory_uri() . '/js/scrollspy.js', array( 'jquery' ));
		wp_register_script( 'scrolling', get_template_directory_uri() . '/js/scrolling.js', array( 'jquery' ));
		wp_register_script( 'buttons', get_template_directory_uri() . '/js/buttons.js', array( 'jquery' ));
		wp_enqueue_script( 'galleria' );
		wp_enqueue_script( 'flickr' );
		wp_enqueue_script( 'custom' );
		wp_enqueue_script( 'scrollspy' );
		wp_enqueue_script( 'scrolling' );
		wp_enqueue_script( 'buttons' );
	}
	wp_register_script( 'parallax', get_template_directory_uri() . '/js/parallax.js', array( 'jquery' ));
	wp_enqueue_script( 'parallax' );
}
add_action ( 'wp_enqueue_scripts', 'customScripts' );

function custom_theme_setup() {
	add_theme_support( 'post-thumbnails' );
}
add_action ( 'after_setup_theme', 'custom_theme_setup' );

function wp_list_child_pages() {
	global $post;
	$childpages = wp_list_pages('sort_column=post_date&sort_order=desc&title_li=&child_of=' . $post->ID . '&echo=0');
	if ( $childpages ) {
		$string = '<ul class="childpagelist">' . $childpages . '</ul>';
	}
	return $string;
}
add_shortcode('wp_childpages', 'wp_list_child_pages');
add_action ( 'wp_enqueue_scripts', 'wp_list_child_pages' );
?>