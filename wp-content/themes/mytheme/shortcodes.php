<?php

function mytheme_shortcode_sample_project(){
    $attr = "sampleproject";

    return '<div class="sampleproject-div">
    <div class="opacity-div"></div>
    <div class="content-container">
    <h1>Sample 
    Project</h1>
    <a href="#">
    <p>VIEW MORE <img src="' . get_template_directory_uri() . '/assets/images/arrow-right.svg" alt="arrow-right" /></p>
    </a>
    </div>
    </div>';

}

add_shortcode("sampleproject", "mytheme_shortcode_sample_project");

?>