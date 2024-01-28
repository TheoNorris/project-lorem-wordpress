<?php

if(!is_admin()) {
    return;
}

//lägger till et menyalternativ "Butik" i dashboard udner settings
function mytheme_add_settings() {
    add_submenu_page(
        "options-general.php",
        "Contacts",
        "Contacts",
        "edit_pages",
        "contacts",
        "mytheme_add_settings_callback"
    );
}

function mytheme_add_settings_callback(){
    ?>

    <div class="wrap">
        <h2>Contact Settings</h2>
        <form action="options.php" method="post">
            <?php
            settings_fields('contacts');
            do_settings_sections('contacts');
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
        'address' => array(
            'label'       => 'Address',
            'option_type' => 'text',
        ),
        'postcode' => array(
            'label'       => 'Postcode',
            'option_type' => 'number',
        ),
        'city' => array(
            'label'       => 'City',
            'option_type' => 'text',
        ),
        'number' => array(
            'label'       => 'Phone Number',
            'option_type' => 'number',
        ),
        'email' => array(
            'label'       => 'Email',
            'option_type' => 'email',
        ),
        'facebook' => array(
            'label'       => 'Facebook Link',
            'option_type' => 'text',
        ),
        'twitter' => array(
            'label'       => 'Twitter Link',
            'option_type' => 'text',
        ),
        'linkedin' => array(
            'label'       => 'LinkedIn Link',
            'option_type' => 'text',
        ),
        'pinterest' => array(
            'label'       => 'Pinterest Link',
            'option_type' => 'text',
        ),

    );

    add_settings_section(
        'contacts_general',
        'General',
        'mytheme_add_settings_section_general',
        'contacts'
    );

    foreach ($settings_fields as $option_name => $field_args) {
        register_setting('contacts', $option_name);

        add_settings_field(
            $option_name,
            $field_args['label'],
            'mytheme_section_general_setting',
            'contacts',
            'contacts_general',
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
    echo"<p>General Settings for Contacts</p>";
}

//ritar ut inställningsfältet för store_message
function mytheme_section_general_setting($args){
    $option_name = $args["option_name"];
    $option_type = $args["option_type"];
    $option_value = get_option($args["option_name"]);
    echo '<input type="'. $option_type .'" id="' . $option_name . '" name="'. $option_name .'" value="' . $option_value . '" />';
}