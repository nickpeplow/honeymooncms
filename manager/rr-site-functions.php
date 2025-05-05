<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function rr_site_function() {
    // Multisite functionality here
}

// Add Rank & Rent settings page
function rr_add_settings_page() {
    add_menu_page(
        'Rank & Rent Settings',
        'Rank & Rent',
        'manage_options',
        'rank-and-rent-settings',
        'rr_render_settings_page',
        'dashicons-admin-generic',
        30
    );
}
add_action('admin_menu', 'rr_add_settings_page');

// Define settings fields
function rr_settings_fields() {
    $json_file = plugin_dir_path(__FILE__) . 'rr-site-fields.json';
    $fields_json = file_get_contents($json_file);
    return json_decode($fields_json, true);
}

// Render settings page
function rr_render_settings_page() {
    // Enqueue the shared admin script
    wp_enqueue_script('rr-admin-script', get_template_directory_uri() . '/manager/rr-admin.js', array('jquery'), '1.0', true);

    ?>
    <div class="wrap">
        <h1>Rank & Rent Settings</h1>
        <form method="post" action="options.php">
            <?php
            settings_fields('rank-and-rent-settings-group');
            do_settings_sections('rank-and-rent-settings-group');
            
            $fields = rr_settings_fields();
            foreach ($fields as $field_id => $field) {
                $value = get_option($field_id);
                ?>
                <div class="form-field">
                    <label for="<?php echo esc_attr($field_id); ?>"><?php echo esc_html($field['label']); ?> [<?php echo esc_html($field_id); ?>]</label>
                    <br>
                    <?php if ($field['type'] === 'textarea'): ?>
                        <textarea id="<?php echo esc_attr($field_id); ?>" name="<?php echo esc_attr($field_id); ?>" rows="4" cols="50"><?php echo esc_textarea($value); ?></textarea>
                    <?php else: ?>
                        <input type="<?php echo esc_attr($field['type']); ?>" id="<?php echo esc_attr($field_id); ?>" name="<?php echo esc_attr($field_id); ?>" value="<?php echo esc_attr($value); ?>" style="width: 100%; max-width: 400px;">
                    <?php endif; ?>
                </div>
                <?php
            }
            submit_button();
            ?>
        </form>
        <hr>
        <h2>Initial Setup</h2>
        <p>Click the button below to perform the initial setup tasks:</p>
        <button id="rr-perform-setup" class="button button-primary rr-perform-setup" data-action="rr_perform_initial_setup" data-nonce="<?php echo wp_create_nonce('rr_initial_setup_nonce'); ?>">Perform Initial Setup</button>
        <div class="rr-setup-message"></div>
    </div>
    <?php
}

// Register settings
function rr_register_settings() {
    $fields = rr_settings_fields();
    foreach ($fields as $field_id => $field) {
        register_setting('rank-and-rent-settings-group', $field_id);
    }
}
add_action('admin_init', 'rr_register_settings');

// Function to get setting value
function rr_get_setting($key) {
    return get_option($key, '');
}

// Add any other multisite-related functions here

// Update the AJAX handler to call a function from rr-setup-functions.php
add_action('wp_ajax_rr_perform_initial_setup', 'rr_ajax_perform_initial_setup');

// Register settings with REST API
function rr_register_settings_rest_api() {
    $fields = rr_settings_fields();
    foreach ($fields as $field_id => $field) {
        register_setting('rank-and-rent-settings-group', $field_id, array(
            'show_in_rest' => true,
            'type' => 'string', // Adjust this based on your field types
            'description' => $field['label'],
        ));
    }
}
add_action('rest_api_init', 'rr_register_settings_rest_api');
