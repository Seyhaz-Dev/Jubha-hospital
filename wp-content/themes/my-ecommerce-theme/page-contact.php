<?php get_header(); ?>
<div class="container">
    <div class="img">
        <img src="<?= get_template_directory_uri(); ?>/img/contact-3.jpg" alt="">
    </div>
</div>
<h1>We are accepting new patients,
        and would love to see how we can help.</h1>
<div class="container-contact-form">
    <div class="contact-form1">
        <h1>Have Questions For Us?</h1> 
        <p>Let us know in the space below</p>
    </div>
    <div class="form">
        <label for="">Name</label>
        <input type="text">
         <label for="">Email</label>
        <input type="email">
        <label for="">Phone</label>
        <input type="text">
        <label for="">Message</label>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <h1><a href="">Send Massage</a></h1>
    </div>
</div>
<div class="number-phone">Number Phone: 0974838677</div>
<div class="icon">
    <a href=""><i class="fa-brands fa-facebook"></i></a>
     <a href=""><i class="fa-brands fa-telegram"></i></a>
      <a href=""><i class="fa-brands fa-google"></i></a>
       <a href=""><i class="fa-brands fa-instagram"></i></a>
</div>


<?php get_footer(); ?>