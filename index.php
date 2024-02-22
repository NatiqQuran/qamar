<?php

/**
 * Plugin Name: Qamar
 * Plugin URI: https://qamar.natiq.net
 * Author: Natiq dev team
 * Description: Add CSS custom classes to wordpress
 * Version: 1.0.0
 * Requires at least: 6.0
 * License: MIT License
 * License URI: https://spdx.org/licenses/MIT.html
 */

define("GH_PLUGIN_SOURCE", plugin_dir_url( __FILE__ ));

function add_styles()
{
    $GH_STYLES = array("css/box.css", "css/style.css", "css/shadow.css", "css/darkmode.css", "css/font.css");
    
    foreach ($GH_STYLES as $style) {
        wp_enqueue_style("Qamar_" . $style, GH_PLUGIN_SOURCE . $style);
    }
}
add_action('wp_enqueue_scripts', 'add_styles');
