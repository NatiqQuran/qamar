<?php

/**
 * Plugin Name: Ghamar
 * Author: Natiq dev team
 * Description: Add CSS custom classes to wordpress
 * Version: 0.0.2
 * Requires at least: 6.0
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

define("GH_PLUGIN_SOURCE", plugin_dir_url( __FILE__ ));

function add_styles()
{
    $GH_STYLES = array("css/style.css", "css/shadow.css", "css/darkmode.css");
    
    foreach ($GH_STYLES as $style) {
        wp_enqueue_style("ghamar_" . $style, GH_PLUGIN_SOURCE . $style);
    }
}
add_action('wp_enqueue_scripts', 'add_styles');
