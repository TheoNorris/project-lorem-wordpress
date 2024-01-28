<footer>
    <div class="footer-container-holder">
    <div class="footer-container-1">
        <a href="/"><img src="<?= get_template_directory_uri() . "/assets/images/logo-white.png"; ?> " class="logo"></a>
    </div>

    <div class="footer-container-2">
        <h5>Information</h5>
        <?php
        $menu_footer = array(
            'theme_location' => 'information_menu',
            'menu_id' => 'information-menu',
            'container' => 'nav',
            'menu_class' => 'footer-menu'
        );
        wp_nav_menu($menu_footer);
        ?>
    </div> 

    <div class="footer-container-3">
        <h5>Contacts</h5>
        <?php if (!empty(get_option('address')) && !empty(get_option('postcode')) && !empty(get_option('number')) && !empty(get_option('email'))) : ?>
            <nav id="contacts-menu">
                <ul class="footer-menu">
                <div>
                <img class="address-image" src="<?= get_template_directory_uri() ?>/assets/images/address.svg" alt="address" /><li class="address-class"> <?= get_option('address') . '<br>' . get_option('city') . ' ' . get_option('postcode'); ?></li>
                </div>
                <div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/number.svg" alt="number" />
                <li><?= get_option('number'); ?></li>
                </div>
                <div>
                <img src="<?= get_template_directory_uri() ?>/assets/images/email.svg" alt="email" />
                <li> <?= get_option('email'); ?></li>
                </div>
                </ul>
            </nav>
        <?php endif; ?>

    </div>

    <div class="footer-container-4">
        <h5>Social Media</h5>
        <div>
            <ul class="footer-menu">
                <li><a target="_blank" href="<?= get_option('facebook'); ?>"><img src="<?= get_template_directory_uri() . "/assets/images/facebook.svg"; ?> " alt="Facebook"></a> </li>
                <li><a target="_blank" href="<?= get_option('twitter'); ?>"><img src="<?= get_template_directory_uri() . "/assets/images/twitter.svg"; ?> "  alt="Twitter"></a> </li>
                <li><a target="_blank" href="<?= get_option('linkedin'); ?>"><img src="<?= get_template_directory_uri() . "/assets/images/linkedin.svg"; ?> "  alt="LinkedIn"></a> </li>
                <li><a target="_blank" href="<?= get_option('pinterest'); ?>"><img src="<?= get_template_directory_uri() . "/assets/images/pinterest.svg"; ?> "  alt="Pinterest"></a> </li>
            </ul>
    </div>
    </div>
    </div>
    <div class="copyright"><p>© <?= do_shortcode('[year]'); ?> All Rights Reserved</p></div>

</footer>

</body>

</html>