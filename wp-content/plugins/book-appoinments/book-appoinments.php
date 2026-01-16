<?php
/**
* Plugin Name: book-appoinments
* Description: A simple plugin to display custom text on your WordPress site.
* Version: 1.0.0
* Author: Hak sovanphanha
* License: ISO 9001 2008
*/

/*
Plugin Name: Doctor Book-Appointment
Description: Adds Doctor Book-Appointment menu to the WordPress skybar.
Version: 1.0
Author: Seth Raksa
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * =====================================
 * SKYBAR (ADMIN TOOLBAR) MENU
 * =====================================
 */

add_action( 'admin_bar_menu', 'doctor_book_appointment_toolbar', 100 );

function doctor_book_appointment_toolbar( $admin_bar ) {

    // Only for admins
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    // Main skybar menu
    $admin_bar->add_node( array(
        'id'    => 'doctor-book-appointment',
        'title' => 'Doctor Book-Appointment',
        'href'  => admin_url( 'admin.php?page=doctor-book-appointment' ),
    ) );

    // Submenu
    $admin_bar->add_node( array(
        'id'     => 'doctor-book-appointment-settings',
        'parent' => 'doctor-book-appointment',
        'title'  => 'Settings',
        'href'   => admin_url( 'admin.php?page=doctor-book-appointment-settings' ),
    ) );
}

/**
 * =====================================
 * ADMIN PAGES
 * =====================================
 */

add_action( 'admin_menu', 'doctor_book_appointment_admin_pages' );

function doctor_book_appointment_admin_pages() {

    add_menu_page(
        'Doctor Book-Appointment',
        'Doctor Book-Appointment',
        'manage_options',
        'doctor-book-appointment',
        'doctor_book_appointment_page',
        'dashicons-calendar-alt',
        20
    );

    // SUB MENU: Patient
    add_submenu_page(
        'doctor-book-appointment',
        'Patient',
        'Patient',
        'manage_options',
        'doctor-patient',
        'doctor_patient_page'
    );

    // SUB MENU: Doctor
    add_submenu_page(
        'doctor-book-appointment',
        'Doctor',
        'Doctor',
        'manage_options',
        'doctor-doctor',
        'doctor_doctor_page'
    );

    // SUB MENU: Admin
    add_submenu_page(
        'doctor-book-appointment',
        'Admin',
        'Admin',
        'manage_options',
        'doctor-admin',
        'doctor_admin_page'
    );
}

function doctor_book_appointment_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment</h1><p>Main dashboard page.</p></div>';
}

function doctor_book_appointment_settings_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment Settings</h1></div>';
}
/**
 * =====================================
 * PAGE CONTENT
 * =====================================
 */

function doctor_dashboard_page() {
    echo '<h1>Doctor Appointment Dashboard</h1>';
}

function doctor_patient_page() {
    echo '<h1>Patient Page</h1>';
    function doctor_patient_page() {
    ?>
    <div class="wrap">
        <h1>Patient Page</h1>

        <?php
        global $wpdb;

        // Handle form submission
        if (isset($_POST['submit_patient'])) {
            // Sanitize form inputs
            $name  = sanitize_text_field($_POST['patient_name']);
            $email = sanitize_email($_POST['patient_email']);
            $phone = sanitize_text_field($_POST['patient_phone']);

            // Insert into database (optional)
            $table_name = $wpdb->prefix . 'patients';
            $wpdb->insert(
                $table_name,
                [
                    'name'  => $name,
                    'email' => $email,
                    'phone' => $phone,
                ],
                ['%s','%s','%s']
            );

            // Success message
            echo '<div class="notice notice-success is-dismissible">';
            echo "<p>Patient <strong>{$name}</strong> has been saved! Email: {$email}, Phone: {$phone}</p>";
            echo '</div>';
        }
        ?>

        <!-- Form -->
        <form method="POST">
            <table class="form-table">
                <tr>
                    <th><label for="patient_name">Name</label></th>
                    <td><input type="text" name="patient_name" id="patient_name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="patient_email">Email</label></th>
                    <td><input type="email" name="patient_email" id="patient_email" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="patient_phone">Phone</label></th>
                    <td><input type="text" name="patient_phone" id="patient_phone" class="regular-text"></td>
                </tr>
            </table>

            <?php submit_button('Add Patient', 'primary', 'submit_patient'); ?>
        </form>
    </div>
    <?php
}

}

function doctor_doctor_page() {
    echo '<h1>Doctor Page</h1>';
}

function doctor_admin_page() {
    echo '<h1>Admin Page</h1>';
}

