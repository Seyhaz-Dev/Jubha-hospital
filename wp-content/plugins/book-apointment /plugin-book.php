<?php
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

    add_submenu_page(
        'doctor-book-appointment',
        'Settings',
        'Settings',
        'manage_options',
        'doctor-book-appointment-settings',
        'doctor_book_appointment_settings_page'
    );
}

function doctor_book_appointment_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment</h1><p>Main dashboard page.</p></div>';
}

function doctor_book_appointment_settings_page() {
    echo '<div class="wrap"><h1>Doctor Book-Appointment Settings</h1></div>';
}
