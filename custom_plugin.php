<?php
/**
* Plugin Name: Custom plugin
* Plugin URI: https://github.com/lucassdantas
* Description: test plugin
* Version: 0.1
* Author: Lucas Dantas 
* Author URI: linkedin.com/in/lucas-de-sousa-dantas/
**/
class Custom_plugin {

    public static function init() {
        add_filter( 'woocommerce_settings_tabs_array', __CLASS__ . '::add_settings_tab', 50 );
    }

    public static function add_settings_tab( $settings_tabs ) {
        $settings_tabs['settings_tab_demo'] = __( 'Settings Demo Tab', 'woocommerce-settings-tab-demo' );
        return $settings_tabs;
    }
}
Custom_plugin::init();