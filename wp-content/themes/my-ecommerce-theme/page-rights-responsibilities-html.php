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
            <li><a href="/inpatient/">Rooms & Services</a></li>
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
            <h1>Patients & their Families have the Right to Health Care</h1>

            <p>
               <b>1</b> Obtaining appropriate, continuous, structured and specialized “evidence-based medicine” health service at every level of care, whether preventive or curative, and in a timely manner, in accordance with treatment eligibility policies and procedures and within the facility’s capacity and the laws regulating its operation. are requested to wait until you are invited to the triage room where your case will be evaluated.
                   <br> <b>2</b> After entering the triage room, the nurse will inform you of the priority of your case and how long you are expected to wait to see the Doctor.
                  <br> <b>3</b> If you feel your condition is worsening in the waiting room, please reach out to a nurse for necessary remedial action.
            </p>

            <p>
                  <br> <b>4</b> For your safety and the safety of others, no more than one attendant is allowed with each patient.
                    <br> <b>5</b> Mobile phones are not allowed in the department.
                   <br> <b>6</b> Taking pictures is not allowed in the department.
                    <br> <b>7</b>  Attendants are to strictly stay with the patient inside the room.
                     <br> <b>8</b>  Privacy of other patients is to be respected at all times.
            

        <div class="contint-image">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/famil.jpg" alt="Hospital Room">
        </div>
    </main>

</section>













<?php get_footer(); ?>