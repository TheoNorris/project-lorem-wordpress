<?php

if(!is_admin()) {
    return;
}

//lägger till et menyalternativ "Butik" i dashboard udner settings
function mytheme_add_settings() {
    add_submenu_page(
        "options-general.php",
        "Butik",
        "Butik",
        "edit_pages",
        "butik",
        "mytheme_add_settings_callback"
    );
}

function mytheme_add_settings_callback(){
    ?>

    <div class="wrap">
        <h2>Butikinställningar</h2>
        <form action="options.php" method="post">
            <?php
            settings_fields('butik');
            do_settings_sections('butik');
            submit_button();
            ?>
        </form>
    </div>

    <?php
}

add_action('admin_menu', 'mytheme_add_settings');

//registrerar inställningar tillgängliga på sidan "Butik"
function mytheme_add_settings_init(){
    add_settings_section(
        'butik_general',
        'General',
        'mytheme_add_settings_section_general',
        'butik'
    );

    //register store message
    register_setting(
        'butik',
        'store_message'
    );

    add_settings_field(
        'store_message',
        'Store Message',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_message",
            "option_type" => "text"
        )
    );

    //registrera öppettider
    //registrera när det öppnar
    register_setting(
        'butik',
        'store_open'
    );

    add_settings_field(
        'store_open',
        'Store Open',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_open",
            "option_type" => "time"
        )
    );

    //registrera när det stänger
    register_setting(
        'butik',
        'store_close'
    );
    add_settings_field(
        'store_close',
        'Store Close',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_close",
            "option_type" => "time"
        )
    );


    //registrera företagsnamn
    register_setting(
        'butik',
        'store_name'
    );
    add_settings_field(
        'store_name',
        'Store name',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_name",
            "option_type" => "text"
        )
    );

    //registrera företagsadress
    register_setting(
        'butik',
        'store_adress'
    );
    add_settings_field(
        'store_adress',
        'Store adress',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_adress",
            "option_type" => "text"
        )
    );


    //registrera företags postnummer
    register_setting(
        'butik',
        'store_postnumber'
    );
    add_settings_field(
        'store_postnumber',
        'Store postnumber',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_postnumber",
            "option_type" => "text"
        )
    );

    //registrera företags stad
    register_setting(
        'butik',
        'store_city'
    );
    add_settings_field(
        'store_city',
        'Which city?',
        'mytheme_section_general_setting',
        'butik',
        'butik_general',
        array(
            "option_name" => "store_city",
            "option_type" => "text"
        )
    );
}

add_action('admin_init', 'mytheme_add_settings_init');


//ritar ut inställningar på sidan "Butik"
function mytheme_add_settings_section_general(){
    echo"<p>Generella inställningar för butiken</p>";
}

//ritar ut inställningsfältet för store_message
function mytheme_section_general_setting($args){
    $option_name = $args["option_name"];
    $option_type = $args["option_type"];
    $option_value = get_option($args["option_name"]);
    echo '<input type="'. $option_type .'" id="' . $option_name . '" name="'. $option_name .'" value="' . $option_value . '" />';
}