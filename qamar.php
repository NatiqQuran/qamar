<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Name: Qamar
 * Plugin URI: https://qamar.natiq.net
 * Author: Natiq dev team
 * Description: Add CSS custom classes to wordpress
 * Version: 1.0.6
 * Requires at least: 5.0
 * License: MIT
 * License URI: https://spdx.org/licenses/MIT.html
 */

define("QAMAR_PLUGIN_SOURCE", plugin_dir_url(__FILE__));
define("QAMAR_PLUGIN_DIR", plugin_dir_path(__FILE__));

function qamar_add_styles()
{
    $QAMAR_STYLES = array("css/style.css", "css/shadow.css", "css/font.css");

    foreach ($QAMAR_STYLES as $style) {
        wp_enqueue_style(
            "Qamar_" . basename($style, ".css"), 
            QAMAR_PLUGIN_SOURCE . $style, 
            array(), 
            filemtime(QAMAR_PLUGIN_DIR . $style)
        );
    }
}
add_action('wp_enqueue_scripts', 'qamar_add_styles');

// add (Javascript)
function qamar_add_scripts()
{
    $QAMAR_SCRIPTS = array("js/qamar-clipboard.js");

    foreach ($QAMAR_SCRIPTS as $script) {
        wp_enqueue_script(
            "Qamar_" . basename($script, ".js"),
            QAMAR_PLUGIN_SOURCE . $script,
            array(),
            filemtime(QAMAR_PLUGIN_DIR . $script),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'qamar_add_scripts');