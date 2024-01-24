<?php 
function mytheme_hook_action_callback() {
    echo "Nu körs min action-hook";
}
add_action("mytheme_page_content_loaded", "mytheme_hook_action_callback");
?>
<?php get_header(); ?>

<!-- CONTENT -->
<main class="content">
    <?= the_content(); ?>
    <?php 
        do_action("mytheme_page_content_loaded");
    ?>
</main>


<?php get_footer() ?>
