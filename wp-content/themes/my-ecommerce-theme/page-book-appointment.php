<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php get_header(); ?>
<br><br><br>

<div class="booking-form" style="margin-top: 100px; max-width: 800px; margin-left: auto; margin-right: auto; font-family: sans-serif;">
    
    <?php if ( isset($_GET['success']) && $_GET['success'] == 1 ) : ?>
        <div style="background:#e6fffa; padding:20px; border:1px solid green; margin-bottom: 30px;">
            <strong style="color:green;">Success! Your appointment has been recorded.</strong>
            
            <h3 style="margin-top: 20px;">Current Appointments in Database:</h3>
            <table style="width:100%; border-collapse: collapse; margin-top:10px;">
                <thead>
                    <tr style="background: #f2f2f2; text-align: left;">
                        <th style="padding: 10px; border: 1px solid #ccc;">Name</th>
                        <th style="padding: 10px; border: 1px solid #ccc;">Doctor</th>
                        <th style="padding: 10px; border: 1px solid #ccc;">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    global $wpdb;
                    $table_name = $wpdb->prefix . 'doctor_appointments';
                    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC LIMIT 5");
                    
                    if ($results) {
                        foreach ($results as $row) {
                            echo "<tr>";
                            echo "<td style='padding: 10px; border: 1px solid #ccc;'>" . esc_html($row->patient_name) . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ccc;'>" . esc_html($row->doctor_name) . "</td>";
                            echo "<td style='padding: 10px; border: 1px solid #ccc;'>" . esc_html($row->appointment_date) . "</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>

    <h2>Book an Appointment</h2>
    <form method="post" action="">
        <?php wp_nonce_field('frontend_book_appointment', 'frontend_book_nonce'); ?>

        <label>Full Name</label>
        <input type="text" name="patient_name" required style="width:100%; margin-bottom:10px; padding: 8px;">

        <label>Email Address</label>
        <input type="email" name="patient_email" required style="width:100%; margin-bottom:10px; padding: 8px;">

        <label>Phone Number</label>
        <input type="text" name="patient_phone" required style="width:100%; margin-bottom:10px; padding: 8px;">

        <label>Select Doctor</label>
        <select name="doctor_name" required style="width:100%; margin-bottom:10px; padding: 8px;">
            <option value="">Choose Doctor</option>
            <option value="Dr. Maryum Khalid">Dr. Maryum Khalid</option>
            <option value="Dr. Ahmed Ali">Dr. Ahmed Ali</option>
        </select>

        <label>Appointment Date</label>
        <input type="date" name="appointment_date" required style="width:100%; margin-bottom:10px; padding: 8px;">

        <label>Message (Optional)</label>
        <textarea name="message" rows="4" style="width:100%; margin-bottom:10px; padding: 8px;"></textarea>

        <button type="submit" name="submit_appointment" style="padding:10px 20px; background:#0073aa; color:white; border:none; cursor:pointer; width: 100%;">
            Book Appointment
        </button>
    </form>
</div>

<?php get_footer(); ?>
