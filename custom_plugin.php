<?php
/**
* Plugin Name: custom plugin
* Plugin URI: https://github.com/lucassdantas
* Description: test plugin
* Version: 0.1
* Author: Lucas Dantas 
* Author URI: linkedin.com/in/lucas-de-sousa-dantas/
**/

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

add_filter( 'woocommerce_get_sections_products', 'wcslider_add_section' );
function wcslider_add_section( $sections ) {
	
	$sections['wcslider'] = __( 'WC Slider', 'text-domain' );
	return $sections;
	
}