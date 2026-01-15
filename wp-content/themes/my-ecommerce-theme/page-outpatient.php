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
 

    <section class="page-bnner">
    <div class="banner-overlay">
        <h1>Outpatient </h1>
        <div class="breadcrumb">
        <span class="icon-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <i class="fa-regular fa-house"></i>
            </a>
        </span>
         <span>Patient Information
                / Outpatient </span>
        </div>
    </div>
    </section>


<section class="in-patient">

   
  

    
    <main class="content">
        <div class="content-text">
            <h1>Outpatient</h1>

            <p>
               Outpatient clinics open between the hours of 8:00 am to 10:00 pm At Jubha Hospitals we are committed to provide quality care at the highest levels.
            </p>

            <p>
                To ensure optimal patient experience and a convenient atmosphere for swift recovery,
                all our rooms are equipped with the latest advanced medical equipment and well-trained
                medical staff along with the essential entertainment and comfort facilities needed by
                the patient.
            </p>

          
        </div>

        <div class="content-image">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/lok.jpg" alt="Hospital Room">
        </div>
    </main>

</section>













<?php get_footer(); ?>