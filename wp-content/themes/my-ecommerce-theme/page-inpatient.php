<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>
 <?php get_header(); ?>  
 

    <section class="page-benner">
    <div class="banner-overlay">
        <h1>In Patient </h1>
        <div class="breadcrumb">
        <span class="icon-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <i class="fa-regular fa-house"></i>
            </a>
        </span>
         <span>Patient Information / In Patient</span>
        </div>
    </div>
    </section>


<section class="in-patient">

   
    <aside class="sidebar">
        <h3 class="sidebar-title">IN PATIENT</h3>
        <ul class="menu">
            <li><a href="">Rooms & Services</a></li>
            <li><a href="emergency-room.html">Emergency Room Instructions</a></li>
            <li><a href="patients-rights.html">Patients & Families Right to Health Care</a></li>
            <li><a href="rights-responsibilities.html">Rights & Responsibilities</a></li>
            <li><a href="respect-care.html">Respect & Appreciation</a></li>
            <li><a href="privacy.html">Privacy & Confidentiality</a></li>
            <li><a href="safety.html">Protection & Safety</a></li>
        </ul>
    </aside>

    
    <main class="content">
        <div class="content-text">
            <h1>Rooms & Services</h1>

            <p>
                At Jubha Hospitals we are committed to provide quality care at the highest levels.
            </p>

            <p>
                To ensure optimal patient experience and a convenient atmosphere for swift recovery,
                all our rooms are equipped with the latest advanced medical equipment and well-trained
                medical staff along with the essential entertainment and comfort facilities needed by
                the patient.
            </p>

            <p>
                Other than the regular shared and private rooms, luxurious VIP suites are also available
                at AGH Khobar and AGH Jubail for the most premium healthcare experience.
            </p>
        </div>

        <div class="content-image">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/room.jpg" alt="Hospital Room">
        </div>
    </main>

</section>













<?php get_footer(); ?>