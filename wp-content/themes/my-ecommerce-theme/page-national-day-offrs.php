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
 

    <section class="page-banner">
    <div class="banner-overlay">
        <h1>National Day Offers</h1>
        <div class="breadcrumb">
        <span class="icon-1">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <i class="fa-regular fa-house"></i>
            </a>
        </span>
         <span>National Day Offers</span>
        </div>
    </div>
    </section>


<!-- CONTENT SECTION -->
<section class="offers-section">
  <div class="offers-container">

    <!-- LEFT CONTENT -->
    <div class="offers-text">
      <h2>National Day Offers</h2>
    </div>

    <!-- RIGHT IMAGE -->
    <div class="offers-image">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/day.webp" alt="Saudi National Day">
    </div>

  </div>
</section>










<?php get_footer(); ?>