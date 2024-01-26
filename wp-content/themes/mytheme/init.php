<?php

require_once("settings.php");
require_once("shortcodes.php");

function my_theme_enqueue() {
    $theme_directory = get_template_directory_uri();
    wp_enqueue_style("mystyle", $theme_directory . "/style.css");
    wp_enqueue_script("app", $theme_directory . "/app.js");
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue');
