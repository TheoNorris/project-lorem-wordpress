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

function mytheme_shortcode_form(){
    $attr = "form";

    return '<form class="contact-form">
    <input type="text" id="name" name="name" placeholder="Name"><br>
    <input type="text" id="phone-number" name="number" placeholder="Phone Number" required><br>
    <input type="text" id="email" name="email" placeholder="Email" required><br>
    <input type="text" id="interest" name="interest" placeholder="Interested In"><br>
    <textarea id="message" name="message" placeholder="Message" required></textarea>
    <button class="contact-button" type="submit">SEND EMAIL <img src="' . get_template_directory_uri() . '/assets/images/arrow-right.svg" alt="arrow-right" /></button>
</form>';

}

add_shortcode("form", "mytheme_shortcode_form");

?>