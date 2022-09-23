<?php

/**
 * Plugin Name: Ghamar
 * Author: Natiq dev team
 * Description: Add custom classes to wordpress
 * Version: 0.0.1
 * Requires at least: 6.0
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

const STYLE_SOURCE = "./css/block.css";

function add_style()
{
    wp_enqueue_style('tttpStyle', STYLE_SOURCE);
}
add_action('wp_enqueue_scripts', 'add_style');