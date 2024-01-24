<?php
    /* Template name: My template */
?>

<?php 
    function mytheme_color_change($color){
        if($color == "red"){
            return "blue";
        }else{
            return $color;
        }
    }

    add_filter('mytheme_color_filter', 'mytheme_color_change')
?>

<?php get_header(); ?>

<!-- CONTENT -->
<main class="content">
    <?php
        $color = "red";
        $result = apply_filters("mytheme_color_filter", $color);
    ?>
    <div style="width:100px; height:100px; background:<?=$result?>;"></div>
</main>
<?php get_footer() ?>