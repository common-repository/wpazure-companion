<?php
/**
 * Plugin Name: Wpazure Companion
 * Description: Enhances Wpazure with extra Features and sections.
 * Version: 0.3
 * Author: wpazure
 * Author URI: https://wpazure.com
 * License: GPL-2.0+
 * WC requires at least: 3.3.0
 * WC tested up to: 5.8.1
 * Text Domain: wpazure-companion
 *
 */
 
define( 'WPAZURE_COMPANION_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'WPAZURE_COMPANION_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

if ( ! defined( 'WPAZURE_COMPANION_VERSION' ) ) {
	define( 'WPAZURE_COMPANION_VERSION', '0.3' );
}

function wpazure_companion_activate() {
	$theme = wp_get_theme();
	
	if ( 'Finaco' == $theme->name){
		
		// Requires Sections files
		
		require_once('inc/finaco/sections/slider-section.php');
		require_once('inc/finaco/sections/service-section.php');
		require_once('inc/finaco/sections/project-section.php');
		require_once('inc/finaco/sections/testimonial-section.php');
		require_once('inc/finaco/sections/woocommerce-section.php');
		require_once('inc/finaco/sections/cta-section.php');
		require_once('inc/finaco/sections/news-section.php');
		
		//Requires Features files
		require_once('inc/customizer/lib/class-alpha-color-control/class-alpha-color-control.php');
		
		require_once('inc/finaco/features/home-section-settings.php');
		
	$item_details_page = get_option('set_consultera_home'); 
    if(!$item_details_page){
		
		// Home 
		$post = array(
			  'comment_status' => 'closed',
			  'ping_status' =>  'closed' ,
			  'post_author' => 1,
			  'post_date' => date('Y-m-d H:i:s'),
			  'post_name' => 'Home',
			  'post_status' => 'publish' ,
			  'post_title' => 'Home',
			  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'template-homepage.php' );
			
			// Use a static front page
			$page = get_page_by_title('Home');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $page->ID );
		}
		
		
		// Blog page
		$post = array(
		  'comment_status' => 'closed',
		  'ping_status' =>  'closed' ,
		  'post_author' => 1,
		  'post_date' => date('Y-m-d H:i:s'),
		  'post_name' => 'Blog',
		  'post_status' => 'publish' ,
		  'post_title' => 'Blog',
		  'post_type' => 'page',
		);  
		//insert page and save the id
		$newvalue = wp_insert_post( $post, false );
		if ( $newvalue && ! is_wp_error( $newvalue ) ){
			update_post_meta( $newvalue, '_wp_page_template', 'page.php' );
			
			// Use a static front page
			$page = get_page_by_title('Blog');
			update_option( 'show_on_front', 'page' );
			update_option( 'page_for_posts', $page->ID );
			
		}
		update_option( 'set_consultera_home', 'Done' );
    }
	}
	
	
	
}
add_action( 'init', 'wpazure_companion_activate' );
 
