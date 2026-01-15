<?php get_header(); ?>

<!-- ===== HERO IMAGE SECTION ===== -->
<section class="contact-hero-section">
    <img src="<?= get_template_directory_uri(); ?>/img/contact-3.jpg" alt="Contact Us" class="contact-hero-image">
</section>

<!-- ===== PAGE MAIN TITLE ===== -->
<h1 class="contact-page-title">
    We are accepting new patients, and would love to see how we can help.
</h1>

<!-- ===== CONTACT FORM & INFO SECTION ===== -->
<section class="contact-page-section">

    <!-- INFO BOX -->
    <div class="contact-info-box">
        <h2 class="contact-info-title">Have Questions For Us?</h2>
        <p class="contact-info-text">Let us know in the space below</p>
    </div>

    <!-- FORM BOX -->
    <div class="contact-form-box">
        <form class="contact-form">
            <label for="contact-name" class="contact-label">Name</label>
            <input type="text" id="contact-name" name="contact-name" class="contact-input" placeholder="Your Name">

            <label for="contact-email" class="contact-label">Email</label>
            <input type="email" id="contact-email" name="contact-email" class="contact-input" placeholder="Your Email">

            <label for="contact-phone" class="contact-label">Phone</label>
            <input type="text" id="contact-phone" name="contact-phone" class="contact-input" placeholder="Your Phone">

            <label for="contact-message" class="contact-label">Message</label>
            <textarea id="contact-message" name="contact-message" class="contact-textarea" placeholder="Your Message" required></textarea>

            <button type="submit" class="contact-submit-button">Send Message</button>
        </form>
    </div>

</section>

<!-- ===== CONTACT DETAILS & SOCIAL ICONS ===== -->
<section class="contact-details-section">
    <p class="contact-phone-number">Phone: 0974838677</p>
    <div class="contact-social-icons">
        <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
        <a href="#" class="social-link"><i class="fa-brands fa-telegram"></i></a>
        <a href="#" class="social-link"><i class="fa-brands fa-google"></i></a>
        <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
    </div>
</section>

<!-- ===== MAP LOCATION BOX ===== -->
<section class="contact-map-section">
    <h2 class="contact-map-title">Our Location</h2>
    <p class="contact-map-text">Visit us at our hospital. We are located at the heart of the city, easily accessible for all patients.</p>
    <div class="contact-map-wrapper">
        <!-- Replace the src with your Google Maps embed link -->
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.0000000000005!2d105.00000000000001!3d10.0000000000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTAwIMKwNTAnMDAuMCJOIDExNcKwNTAnMDAuMCJX!5e0!3m2!1sen!2skh!4v1610000000000" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            class="contact-map-iframe"></iframe>
    </div>
</section>

<?php get_footer(); ?>
