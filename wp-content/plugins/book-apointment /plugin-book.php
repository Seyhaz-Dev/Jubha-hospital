<?php
/*
Plugin Name: Doctor Book-Appointment
Description: Manage doctor appointments with admin forms and database storage.
Version: 1.1
Author: Seth Raksa
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * =====================================
 * ACTIVATION: CREATE DATABASE TABLE
 * =====================================
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
        doctor_name varchar(255) NOT NULL,
        appointment_date date NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

/**
 * =====================================
 * ADMIN TOOLBAR (SKYBAR) MENU
 * =====================================
 */
add_action( 'admin_bar_menu', 'doctor_book_appointment_toolbar', 100 );

function doctor_book_appointment_toolbar( $admin_bar ) {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $admin_bar->add_node( array(
        'id'    => 'doctor-book-appointment',
        'title' => 'Doctor Book-Appointment',
        'href'  => admin_url( 'admin.php?page=doctor-book-appointment' ),
    ) );

    $admin_bar->add_node( array(
        'id'     => 'doctor-book-appointment-settings',
        'parent' => 'doctor-book-appointment',
        'title'  => 'Settings',
        'href'   => admin_url( 'admin.php?page=doctor-book-appointment-settings' ),
    ) );
}

/**
 * =====================================
 * ADMIN MENUS AND PAGES
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

    add_submenu_page(
        'doctor-book-appointment',
        'Settings',
        'Settings',
        'manage_options',
        'doctor-book-appointment-settings',
        'doctor_book_appointment_settings_page'
    );

    add_submenu_page(
        'doctor-book-appointment',          
        'Patient Appointments',               
        'Patient Appointments',             
        'manage_options',                    
        'doctor-book-appointments-list',     
        'doctor_book_appointments_page'      
    );

    add_submenu_page(
        'doctor-book-appointment',    
        'Manage Doctors',            
        'Manage Doctors',           
        'manage_options',             
        'doctor-book-manage-doctors', 
        'doctor_manage_doctors_page'  
    );
}

/**
 * =====================================
 * ADMIN PAGES
 * =====================================
 */

function doctor_book_appointment_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment Dashboard</h1><p>Welcome to the Doctor Book-Appointment plugin!</p></div>';
}

function doctor_book_appointment_settings_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment Settings</h1><p>Settings page (not implemented).</p></div>';
}

function doctor_manage_doctors_page() {
    echo '<div class="wrap"><h1>Manage Doctors</h1><p>Doctor management page (not implemented).</p></div>';
}

/**
 * =====================================
 * PATIENT APPOINTMENTS PAGE
 * =====================================
 */
function doctor_book_appointments_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'doctor_appointments';
    ?>
    <div class="wrap">
        <h1>Patient Appointments</h1>
        <p>Use the form below to add a new patient appointment.</p>

        <?php
        // Handle form submission
        if ( isset($_POST['submit_appointment']) ) {

            // Sanitize input
            $patient_name  = sanitize_text_field( $_POST['patient_name'] );
            $patient_email = sanitize_email( $_POST['patient_email'] );
            $doctor_name   = sanitize_text_field( $_POST['doctor_name'] );
            $appointment_date = sanitize_text_field( $_POST['appointment_date'] );

            // Insert into database
            $wpdb->insert(
                $table_name,
                array(
                    'patient_name' => $patient_name,
                    'patient_email' => $patient_email,
                    'doctor_name' => $doctor_name,
                    'appointment_date' => $appointment_date,
                ),
                array('%s','%s','%s','%s')
            );

            echo '<div class="notice notice-success is-dismissible">';
            echo '<p>Appointment added for <strong>' . esc_html($patient_name) . '</strong> with <strong>' . esc_html($doctor_name) . '</strong> on <strong>' . esc_html($appointment_date) . '</strong>.</p>';
            echo '</div>';
        }
        ?>

        <!-- Form -->
        <form method="post">
            <table class="form-table">
                <tr>
                    <th><label for="patient_name">Patient Name</label></th>
                    <td><input type="text" name="patient_name" id="patient_name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="patient_email">Patient Email</label></th>
                    <td><input type="email" name="patient_email" id="patient_email" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="doctor_name">Doctor Name</label></th>
                    <td><input type="text" name="doctor_name" id="doctor_name" class="regular-text" required></td>
                </tr>
                <tr>
                    <th><label for="appointment_date">Appointment Date</label></th>
                    <td><input type="date" name="appointment_date" id="appointment_date" class="regular-text" required></td>
                </tr>
            </table>
            <?php submit_button('Add Appointment', 'primary', 'submit_appointment'); ?>
        </form>

        <h2>Existing Appointments</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient Name</th>
                    <th>Email</th>
                    <th>Doctor Name</th>
                    <th>Appointment Date</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $appointments = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY appointment_date DESC" );
            if ( $appointments ) {
                foreach ( $appointments as $a ) {
                    echo '<tr>';
                    echo '<td>' . esc_html($a->id) . '</td>';
                    echo '<td>' . esc_html($a->patient_name) . '</td>';
                    echo '<td>' . esc_html($a->patient_email) . '</td>';
                    echo '<td>' . esc_html($a->doctor_name) . '</td>';
                    echo '<td>' . esc_html($a->appointment_date) . '</td>';
                    echo '<td>' . esc_html($a->created_at) . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="6">No appointments found.</td></tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
}
