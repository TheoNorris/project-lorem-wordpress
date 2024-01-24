<?php
function mytheme_shortcode_draw_box($attr){
    $attr = shortcode_atts(
        array(
            "color" => "green",
            "size" => 1,
        ), 
        $attr,
        "mytheme_box"
    );

    return '<div style="width:100px; height:100px; background:' . $attr["color"] . '"></div>';
}

add_shortcode("mytheme_box", "mytheme_shortcode_draw_box");
?>