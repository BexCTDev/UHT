<?php
/* 
 * Unlimited Home Theatre functions.
 * 
 * @package UnlimitedHomeTheate
 * Support : Bex Consutlting Technologies
 * Website : www.bexct.com
 * 
 */

// Queue parent style followed by child/customized style

function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen';

	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), true);
	//wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.css',false,'3.3.7','all');

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
 * A simple function to control the number of Twenty Seventeen Theme Front Page Sections
 * Source: wpcolt.com
 */
function wpc_custom_front_sections( $num_sections )
	{
		return 5; //Change this number to change the number of the sections.
	}
add_filter( 'twentyseventeen_front_page_sections', 'wpc_custom_front_sections' );

//function register_my_menu() {
//  register_nav_menu('top-menu',__( 'Top Menu' ));
//}
//add_action( 'init', 'register_my_menu' );


?>