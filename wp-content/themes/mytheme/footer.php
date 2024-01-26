<footer>
    <div class="footer-left">
        <a href="/"><img src="<?= get_template_directory_uri() . "/assets/images/loremlogo.svg"; ?> " class="logo"></a>
    </div>

    <div class="footer-center">
        <?php

        $menu_footer = array(
            'theme_location' => 'footermeny',
            'menu_id' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'menu'
        );
        wp_nav_menu($menu_footer);
        ?>

        <?php if (!empty(get_option('store_name')) && !empty(get_option('store_adress')) && !empty(get_option('store_postnumber')) && !empty(get_option('store_city'))) : ?>
            <div class="company-details">
                <span><?= get_option('store_name'); ?> ligger på <?= get_option('store_adress') . " " . get_option('store_postnumber') . ", " . get_option('store_city'); ?></span>
            </div>
        <?php endif; ?>

    </div>

    <div class="footer-right">
        <p>Följ oss på sociala medier</p>
        <?php
        $menu_footer = array(
            'theme_location' => 'footer_socialmedia',
            'menu_id' => 'footer_socialmedia',
            'container' => 'nav',
            'container_class' => 'menu_social'
        );
        wp_nav_menu($menu_footer);
        ?>
    </div>
    <div class="copyright">© Copyright <?= get_bloginfo('name') . " " .  do_shortcode('[year]'); ?></div>

</footer>

</body>

</html>