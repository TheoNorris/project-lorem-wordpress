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
function mytheme_add_settings_init() {
    $settings_fields = array(
        'store_message' => array(
            'label'       => 'Store Message',
            'option_type' => 'text',
        ),
        'store_open' => array(
            'label'       => 'Store Open',
            'option_type' => 'time',
        ),
        'store_close' => array(
            'label'       => 'Store Close',
            'option_type' => 'time',
        ),
        'store_name' => array(
            'label'       => 'Store Name',
            'option_type' => 'text',
        ),
        'store_adress' => array(
            'label'       => 'Store Address',
            'option_type' => 'text',
        ),
        'store_postnumber' => array(
            'label'       => 'Store Postnumber',
            'option_type' => 'number',
        ),
        'store_city' => array(
            'label'       => 'Which City?',
            'option_type' => 'text',
        ),
    );

    add_settings_section(
        'butik_general',
        'General',
        'mytheme_add_settings_section_general',
        'butik'
    );

    foreach ($settings_fields as $option_name => $field_args) {
        register_setting('butik', $option_name);

        add_settings_field(
            $option_name,
            $field_args['label'],
            'mytheme_section_general_setting',
            'butik',
            'butik_general',
            array(
                "option_name" => $option_name,
                "option_type" => $field_args['option_type'],
            )
        );
    }
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