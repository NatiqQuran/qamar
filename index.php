<?php

/**
 * Plugin Name: Qamar
 * Plugin URI: https://qamar.natiq.net
 * Author: Natiq dev team
 * Description: Add CSS custom classes to wordpress
 * Version: 1.0.1
 * Requires at least: 6.0
 * License: MIT License
 * License URI: https://spdx.org/licenses/MIT.html
 */
define("Q_PLUGIN_SOURCE", plugin_dir_url(__FILE__));

function add_styles()
{
    $Q_STYLES = array("css/box.css", "css/style.css", "css/shadow.css", "css/darkmode.css", "css/font.css");

    foreach ($Q_STYLES as $style) {
        wp_enqueue_style("Qamar_" . $style, Q_PLUGIN_SOURCE . $style);
    }
}
add_action('wp_enqueue_scripts', 'add_styles');

// add (Javascript Scripts)
function add_scripts()
{
    $Q_SCRIPTS = array("js/clipboard.js");

    foreach ($Q_SCRIPTS as $script) {
        wp_enqueue_script(
            "Qamar_" . $script,
            Q_PLUGIN_SOURCE . $script,
            array(),
            '1.0.0', 
            array('strategy'  => 'defer')
        );
    }
}
add_action('wp_enqueue_scripts', 'add_scripts');
