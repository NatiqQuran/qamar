<?php

/**
 * Plugin Name: Qamar
 * Plugin URI: https://qamar.natiq.net
 * Author: Natiq dev team
 * Description: Add CSS custom classes to wordpress
 * Version: 1.0.4
 * Requires at least: 5.0
 * License: MIT License
 * License URI: https://spdx.org/licenses/MIT.html
 */
efine("Q_PLUGIN_SOURCE", plugin_dir_url(__FILE__));
define("Q_PLUGIN_DIR", plugin_dir_path(__FILE__));

function add_styles()
{
    $Q_STYLES = array("css/box.css", "css/style.css", "css/shadow.css", "css/font.css");

    foreach ($Q_STYLES as $style) {
        wp_enqueue_style(
            "Qamar_" . basename($style, ".css"), 
            Q_PLUGIN_SOURCE . $style, 
            array(), 
            filemtime(Q_PLUGIN_DIR . $style)
        );
    }
}
add_action('wp_enqueue_scripts', 'add_styles');

// add (Javascript Scripts)
function add_scripts()
{
    $Q_SCRIPTS = array("js/clipboard.js");

    foreach ($Q_SCRIPTS as $script) {
        wp_enqueue_script(
            "Qamar_" . basename($script, ".js"),
            Q_PLUGIN_SOURCE . $script,
            array(),
            filemtime(Q_PLUGIN_DIR . $script),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'add_scripts');