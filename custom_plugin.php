<?php
/**
* Plugin Name: Custom plugin
* Plugin URI: https://github.com/lucassdantas
* Description: test plugin
* Version: 0.1
* Author: Lucas Dantas 
* Author URI: linkedin.com/in/lucas-de-sousa-dantas/
**/
function cp_custom_plugin(){
    require_once './src/main';
}
add_action('init', 'cp_custom_plugin');