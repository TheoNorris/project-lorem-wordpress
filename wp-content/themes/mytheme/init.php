<?php

require_once("settings.php");
require_once("shortcodes.php");

function my_theme_enqueue(){
    $theme_directory = get_template_directory_uri();
    wp_enqueue_style("mystyle", $theme_directory . "/style.css");
    wp_enqueue_script("app", $theme_directory . "/app.js");

    $data = array();
    $data["color"] = "aqua";
    $data["name"] = get_option("blogname");
    $data["option"] = get_option("myoption");
    wp_localize_script("app", "myvariables", $data);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue');


function my_theme_init(){
    $menus = array(
        'main_menu' => 'main_menu',
        'footermeny' => 'footermeny',
        'footer_socialmedia' => 'footersocialmedia'
    );

    register_nav_menus($menus);
}
add_action('after_setup_theme', 'my_theme_init');