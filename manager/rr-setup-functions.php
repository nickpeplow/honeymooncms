<?php
/**
 * Rank & Rent Setup Functions
 *
 * This file contains functions related to the initial setup and configuration
 * of the Rank & Rent plugin.
 *
 * @package RankAndRent
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Set the permalink structure to /%postname%/.
 */
function rr_set_permalink_structure() {
    global $wp_rewrite;
    $old_structure = get_option('permalink_structure');
    
    // Set the desired permalink structure
    $new_structure = '/%postname%';
    
    // Update the permalink structure
    update_option('permalink_structure', $new_structure);
    
    // Flush the rewrite rules
    $wp_rewrite->init();
    $wp_rewrite->flush_rules(true);
    
    // Get the updated structure to confirm the change
    $updated_structure = get_option('permalink_structure');
    
    return "Permalink structure changed from '$old_structure' to '$updated_structure'";
}

/**
 * Disable organizing uploads into year/month-based folders.
 */
function rr_disable_uploads_yearmonth_folders() {
    $old_value = get_option('uploads_use_yearmonth_folders');
    update_option('uploads_use_yearmonth_folders', 0);
    $new_value = get_option('uploads_use_yearmonth_folders');
    error_log("uploads_use_yearmonth_folders changed from '$old_value' to '$new_value'");
}

/**
 * Disable WordPress comments.
 */
function rr_disable_comments() {
    // Close comments on all post types
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }

    // Close comments on all existing posts
    global $wpdb;
    $wpdb->update($wpdb->posts, ['comment_status' => 'closed', 'ping_status' => 'closed'], ['post_status' => 'publish']);

    // Disable comment-related settings
    $old_status = get_option('default_comment_status');
    update_option('default_comment_status', 'closed');
    $new_status = get_option('default_comment_status');
    error_log("default_comment_status changed from '$old_status' to '$new_status'");

    $old_status = get_option('default_ping_status');
    update_option('default_ping_status', 'closed');
    $new_status = get_option('default_ping_status');
    error_log("default_ping_status changed from '$old_status' to '$new_status'");

    $old_value = get_option('comments_notify');
    update_option('comments_notify', 0);
    $new_value = get_option('comments_notify');
    error_log("comments_notify changed from '$old_value' to '$new_value'");

    $old_value = get_option('moderation_notify');
    update_option('moderation_notify', 0);
    $new_value = get_option('moderation_notify');
    error_log("moderation_notify changed from '$old_value' to '$new_value'");
}

/**
 * Delete the default "Hello World" post by slug and remove it from trash.
 */
function rr_delete_hello_world_post() {
    $hello_world_post = get_page_by_path('hello-world', OBJECT, 'post');
    if ($hello_world_post) {
        $result = wp_delete_post($hello_world_post->ID, true);
        if ($result) {
            return "Default 'Hello World' post deleted successfully and removed from trash.";
        } else {
            return "Failed to delete the default 'Hello World' post.";
        }
    } else {
        return "Default 'Hello World' post not found.";
    }
}

/**
 * Delete the default "Sample Page" by slug and remove it from trash.
 */
function rr_delete_sample_page() {
    $sample_page = get_page_by_path('sample-page', OBJECT, 'page');
    if ($sample_page) {
        $result = wp_delete_post($sample_page->ID, true);
        if ($result) {
            return "Default 'Sample Page' deleted successfully and removed from trash.";
        } else {
            return "Failed to delete the default 'Sample Page'.";
        }
    } else {
        return "Default 'Sample Page' not found.";
    }
}

/**
 * Perform initial setup tasks for the Rank & Rent plugin.
 */
function rr_perform_initial_setup() {
    $setup_results = [];
    $setup_results[] = "Starting setup for site ID: " . get_current_blog_id();

    $setup_results[] = rr_set_permalink_structure();
    
    rr_disable_uploads_yearmonth_folders();
    $setup_results[] = "Uploads year/month folders disabled.";
    
    rr_disable_comments();
    $setup_results[] = "Comments disabled.";
    
    $hello_world_result = rr_delete_hello_world_post();
    $setup_results[] = "Hello World post deletion attempt: " . $hello_world_result;

    $sample_page_result = rr_delete_sample_page();
    $setup_results[] = "Sample Page deletion attempt: " . $sample_page_result;

    // Additional setup tasks can be added here

    return implode("\n", $setup_results);
}

/**
 * AJAX handler for performing initial setup.
 */
function rr_ajax_perform_initial_setup() {
    // Ensure user has necessary permissions
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'rr_initial_setup_nonce')) {
        wp_die('Security check failed.');
    }

    $results = rr_perform_initial_setup();

    // Send a response
    echo "<strong>Site ID: " . get_current_blog_id() . "</strong><br>" . nl2br($results);
    wp_die();
}
