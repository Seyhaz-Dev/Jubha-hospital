<?php get_header(); ?>

<!-- ===== HERO VIDEO SECTION ===== -->
<div class="about-hero">
    <h1 class="about-hero-title">About Us</h1>
    <video class="about-hero-video" loop autoplay muted>
        <source src="<?= get_template_directory_uri(); ?>/v.mp4" type="video/mp4">
    </video>
</div>

<!-- ===== VISION & MISSION ===== -->
<section class="about-vision">
    <div class="vision-grid">

        <div class="vision-box">
            <h2 class="vision-title">Vision In The Future</h2>
            <p class="vision-text">
                “To be a patient-first healthcare institution committed to delivering safe,
                high-quality, and compassionate medical care, supported by innovation,
                ethical practice, and continuous improvement to meet the evolving
                health needs of our community.”
            </p>
        </div>

        <div class="mission-box">
            <h2 class="mission-title">Hospital Mission Statement</h2>
            <p class="mission-text">
                “Our mission is to provide comprehensive, safe, and high-quality healthcare
                services that are patient-centered and guided by compassion, professionalism,
                and ethical practice. We are committed to delivering accessible and affordable
                medical care through skilled healthcare professionals, modern medical
                technology, and evidence-based clinical practices.”
            </p>
        </div>

    </div>
</section>

<!-- ===== VALUES ===== -->
<section class="core-values">
    <h2 class="section-heading">Our Values</h2>

    <div class="values-grid">

        <div class="value-card">
            <img src="<?= get_template_directory_uri(); ?>/img/person.png" alt="">
            <h3>Integrity</h3>
            <p>We act with honesty, transparency, and strong ethical principles.</p>
        </div>

        <div class="value-card">
            <img src="<?= get_template_directory_uri(); ?>/img/trusted.png" alt="">
            <h3>Value of Trust</h3>
            <p>We build trust through reliability and consistent quality.</p>
        </div>

        <div class="value-card">
            <img src="<?= get_template_directory_uri(); ?>/img/solidarity.png" alt="">
            <h3>Care & Collaboration</h3>
            <p>We provide compassionate care and work together.</p>
        </div>

        <div class="value-card">
            <img src="<?= get_template_directory_uri(); ?>/img/honesty.png" alt="">
            <h3>Respect</h3>
            <p>We honor dignity, diversity, and fairness.</p>
        </div>


    </div>
</section>

<!-- ===== CEO MESSAGE ===== -->
<section class="ceo-section">
    <h2 class="section-heading">CEO Message</h2>

    <div class="ceo-grid">

        <div class="ceo-text">
            <h3>Message from the CEO</h3>
            <p>
                I would like to express my sincere appreciation to each and every one of you
                for your dedication, professionalism, and compassion. Our hospital stands
                as a place of healing and hope because of your commitment to patient care.
            </p>
        </div>

        <div class="ceo-image">
            <img src="<?= get_template_directory_uri(); ?>/img/seyha1.jpg" alt="CEO">
        </div>

    </div>

    <div class="ceo-extended-text">
        <p>
            It is both an honor and a privilege to serve as the Chief Executive Officer of this hospital.
            Every day, I witness the extraordinary commitment and teamwork that define our organization.
        </p>
    </div>
</section>

<!-- ===== OVERVIEW ===== -->
<section class="hospital-overview">
    <h2 class="section-heading">Overview</h2>

    <div class="overview-grid">

        <div class="overview-text">
            <h3>Hospital Overview</h3>
            <p>
                Jubha Hospital is a trusted healthcare institution committed to delivering
                high-quality, patient-centered medical services to the community.
            </p>
        </div>

        <div class="overview-media">
            <video loop autoplay muted>
                <source src="<?= get_template_directory_uri(); ?>/img/video.mp4" type="video/mp4">
            </video>
        </div>

    </div>
</section>

<?php get_footer(); ?>
