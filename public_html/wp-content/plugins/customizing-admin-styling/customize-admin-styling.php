<?php 
/*Plugin Name: styling and customizing admin area
Plugin URI: http://
Description: It customize and style admin area.
Version: 1.0
Author: Asif Javed 
Author URI: http://
License: GPLv2
*/
// let's start by enqueuing our styles correctly
class adminCustomization {

	function login_custom_admin_styles(){
		wp_register_style( 'login_custom_admin_stylesheet', plugins_url( '/css/login-style.css', __FILE__ ) );
		wp_enqueue_style( 'login_custom_admin_stylesheet' );
	}

	function custom_admin_styles(){
		wp_register_style( 'custom_admin_stylesheet', plugins_url( '/css/style.css', __FILE__ ) );
		wp_enqueue_style( 'custom_admin_stylesheet' );
	}

	//change the footer text
	function custom_admin_footer_text () {
	//echo '<img src="' . plugins_url( 'images/copyright.png' , __FILE__ ) . '">  <a href="/"></a>';
	}

}

$adminCust = new adminCustomization();
add_action( 'login_enqueue_scripts', array($adminCust, 'login_custom_admin_styles') );
add_action( 'admin_enqueue_scripts', array($adminCust,'custom_admin_styles' ) );
add_filter( 'admin_footer_text',  array($adminCust,'custom_admin_footer_text') );

