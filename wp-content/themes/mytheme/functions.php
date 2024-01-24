<?php

if(!defined('ABSPATH')){
    exit;
}


require_once(get_template_directory() . "/init.php");



function current_year_shortcode() {
    return date('Y');
}
add_shortcode('year', 'current_year_shortcode');



