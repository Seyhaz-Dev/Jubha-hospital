<?php
/*
Plugin Name: Doctor Book-Appointment
Description: Manage doctor appointments with admin forms and database storage.
Version: 1.8
Author: Seth Raksa
*/

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * 1. DATABASE SETUP
 * Runs when the plugin is activated.
 */
register_activation_hook( __FILE__, 'doctor_book_appointment_create_table' );
function doctor_book_appointment_create_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctor_appointments';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        patient_name varchar(255) NOT NULL,
        patient_email varchar(255) NOT NULL,
        patient_phone varchar(50) NOT NULL,
        doctor_name varchar(255) NOT NULL,
        appointment_date date NOT NULL,
        message text,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

/**
 * 2. FORM SUBMISSION HANDLER
 * Handles the frontend form submission and saves it to the database.
 */
add_action('init', 'handle_appointment_submission');
function handle_appointment_submission() {
    if (isset($_POST['submit_appointment']) && isset($_POST['frontend_book_nonce'])) {
        
        if (!wp_verify_nonce($_POST['frontend_book_nonce'], 'frontend_book_appointment')) {
            wp_die('Security check failed');
        }

        global $wpdb;
        $table_name = $wpdb->prefix . 'doctor_appointments';

        $data = array(
            'patient_name'     => sanitize_text_field($_POST['patient_name']),
            'patient_email'    => sanitize_email($_POST['patient_email']),
            'patient_phone'    => sanitize_text_field($_POST['patient_phone']),
            'doctor_name'      => sanitize_text_field($_POST['doctor_name']),
            'appointment_date' => sanitize_text_field($_POST['appointment_date']),
            'message'          => sanitize_textarea_field($_POST['message']),
        );

        $inserted = $wpdb->insert($table_name, $data);

        if ($inserted) {
            wp_redirect(add_query_arg('success', '1', home_url($_SERVER['REQUEST_URI'])));
            exit;
        }
    }
}

/**
 * 3. ADMIN MENU SETUP
 */
add_action( 'admin_menu', 'doctor_book_appointment_menu' );
function doctor_book_appointment_menu() {
    add_menu_page(
        'Doctor Appointments', 
        'Doctor Book-Appointment', 
        'manage_options', 
        'doctor-book-appointments-list', 
        'doctor_book_appointments_page', 
        'dashicons-calendar-alt', 
        20
    );
}

/**
 * 4. THE DATA VIEW (Admin Table)
 */
function doctor_book_appointments_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctor_appointments';
    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Patient Appointments</h1>
        <hr class="wp-header-end">

        <table class="wp-list-table widefat fixed striped" style="margin-top:20px;">
            <thead>
                <tr>
                    <th><strong>Name</strong></th>
                    <th><strong>Email</strong></th>
                    <th><strong>Phone</strong></th>
                    <th><strong>Doctor</strong></th>
                    <th><strong>Date</strong></th>
                    <th><strong>Message</strong></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results): ?>
                    <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?php echo esc_html($row->patient_name); ?></td>
                        <td><?php echo esc_html($row->patient_email); ?></td>
                        <td><?php echo esc_html($row->patient_phone); ?></td>
                        <td><?php echo esc_html($row->doctor_name); ?></td>
                        <td><?php echo esc_html($row->appointment_date); ?></td>
                        <td><?php echo nl2br(esc_html($row->message)); ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="6">No appointments found.</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}