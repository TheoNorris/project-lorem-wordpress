<html>
    <head>
        <title><?= get_option("blogname");?></title>
        <?php wp_head();?>
    </head>
    <body>
        <?php wp_body_open();?>
        
        <?php if(!empty(get_option('store_message') && !empty(get_option('store_open') && !empty(get_option('store_close'))))) : ?>
            <div class="site-message">
                <span><?= get_option('store_message'); ?> </span>
                <p>Våra öppetider <?= get_option('store_open') . " - " . get_option('store_close') ?></p>
            </div>
        <?php endif;?>

        <header>
            <div class="column-50">
                <a href="/"><img src="<?= get_template_directory_uri() . "/assets/images/grit_logo.jpg";?> "class="logo"></a>
            </div>
            <div class="column-50">
                <?php

                $menu_header = array(
                    'theme_location' => 'huvudmeny',
                    'menu_id' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
                wp_nav_menu($menu_header);
                ?>
            </div>
        </header>
