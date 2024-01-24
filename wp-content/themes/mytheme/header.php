<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=get_option('blogname');?></title>

    <?php wp_head();?>
</head>
<body>
    
    <?php wp_body_open(); ?>
    <header>
        <div class="nav-container">
        <div class="column">
            <a href="/">
            
            <img class="logo" src="<?=get_template_directory_uri() . '/assets/images/loremlogo.svg';?>" alt="logo">
            </a>
        </div>
        <div class="column">
        </div>
        <div class="column">
            <?php 
            $menu = array(
                'theme_location' => 'main_menu',
                'menu_id' => 'primary-menu',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            
            wp_nav_menu($menu); ?>
           
        </div>
        </div>
    </header>
