<?php
/*
Plugin Name: Doctor Book-Appointment
Description: Adds Doctor Book-Appointment menu to the WordPress sidebar.
Version: 1.0
Author: Seth Raksa
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function daa_create_tables() {
    global $wpdb;
    require_once ABSPATH . 'wp-admin/includes/upgrade.php';

    $charset_collate = $wpdb->get_charset_collate();

    $doctors_table = $wpdb->prefix . 'daa_doctors';
    $patients_table = $wpdb->prefix . 'daa_patients';
    $appointments_table = $wpdb->prefix . 'daa_appointments';

    $sql_doctors = "CREATE TABLE $doctors_table (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        specialty VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    $sql_patients = "CREATE TABLE $patients_table (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        phone VARCHAR(50),
        PRIMARY KEY (id)
    ) $charset_collate;";

    $sql_appointments = "CREATE TABLE $appointments_table (
        id INT NOT NULL AUTO_INCREMENT,
        doctor_id INT NOT NULL,
        patient_id INT NOT NULL,
        appointment_date DATETIME NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    dbDelta($sql_doctors);
    dbDelta($sql_patients);
    dbDelta($sql_appointments);
}

register_activation_hook(__FILE__, 'daa_create_tables');
