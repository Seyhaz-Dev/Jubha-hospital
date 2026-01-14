<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
    
</head>

  

<body <?php body_class(); ?>>
   <?php get_header(); ?>
<div class="container">
  <!-- HERO -->
  <section class="hero">
    <div class="hero-text">
      <h1>
        EMPOWERING<br>
        PEOPLE TO<br>
        IMPROVE<br>
        <span>THEIR LIVES</span>
      </h1>
    </div>

    <div class="hero-image">
      <div class="swiper heroSwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ga.webp">
          </div>
          <div class="swiper-slide">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/sagaaaaaaa.jpg">
          </div>
          <div class="swiper-slide">
            <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ksk.jpg">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO -->
  <section class="info-section">
    <div class="emergency">
      <h3>Emergency Hotline</h3>
      <div class="hotline">+855 96 222 1351</div>
      <p>
        In case of a medical emergency, please contact us immediately
        through our Emergency Hotline.
      </p>
      <button><a href="">Contact Us</a></button>
    </div>

    <div class="appointment">
      <h3>Book Appointment</h3>
      <div class="qr-box">
        <div class="qr-item">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Android">
          <p>Android App</p>
        </div>
        <div class="qr-item">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=iOS">
          <p>iOS App</p>
        </div>
        <div class="qr-item">
          <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Manual">
          <p>User Manual</p>
        </div>
      </div>
      <button>Patient Referral</button>
    </div>
  </section>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

 

<section class="about-section">
    <div class="main-container">
        <div class="content-box">
            <span class="sub-title">ABOUT US</span>
            <h2>Seven decades of care and quality</h2>
            <p>
                Since our inception in 1949, we have a legacy of excellence. We are a family hospital fully dedicated to caring for the needs of patients, communities, and the Kingdom we serve to keep healthy. Almana believes in offering compassionate care, inspired by family values which...
            </p>
            <a href="#" class="read-more-btn">READ MORE &rarr;</a>
        </div>

        <div class="image-box">
            <div class="overlay-year">
                <span class="year-text">2026</span>
                <span class="sub-text">SERVING THE COMMUNITY SINCE</span>
            </div>
            <div class="play-button">
                <div class="play-icon"></div>
            </div>
        </div>
    </div>
</section>
<section class="stats-container">
    <div class="stats-wrapper">
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="icon"><i class="fa-solid fa-hospital"></i></div>
                <div>
                    <h2>6500</h2>
                    <p>QUALIFIED WORKFORCE</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fa-solid fa-user-doctor"></i></div>
                <div>
                    <h2>800</h2>
                    <p>SPECIALIZED DOCTORS</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fa-solid fa-house-medical-circle-check"></i></div>
                <div>
                    <h2>8</h2>
                    <p>MEDICAL FACILITIES</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="icon"><i class="fa-solid fa-bed-pulse"></i></div>
                <div>
                    <h2>1300</h2>
                    <p>TOTAL BEDS</p>
                </div>
            </div>
        </div>

        <div class="content-side">
            <span class="subtitle">STATISTICS</span>
            <h1>AGH At a Glance</h1>
            <h3>We provide specialized units in various medical specialties</h3>
            <p>
                A continuation of a series of successes in the Group, we provide specialized units in various medical specialties, where will meet the caregivers and the modern medical equipment to serve the community and people.
            </p>
            <a href="#" class="btn">OUR BRANCHES &rarr;</a>
        </div>

    </div>
</section>      
<section class="hospital-departments">
    
    <a href="#" class="dept-column" style="background-image: url('https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&q=80&w=800');">
        <div class="dept-content">
            <img src="https://cdn-icons-png.flaticon.com/512/3022/3022216.png" class="dept-icon" alt="icon">
            <h2>Endoscopy</h2>
            <p>Almana Hospital's Endoscopy Department</p>
            <div class="dept-arrow">→</div>
        </div>
    </a>

    <a href="#" class="dept-column" style="background-image: url('https://images.unsplash.com/photo-1516549655169-df83a0774514?auto=format&fit=crop&q=80&w=800');">
        <div class="dept-content">
            <img src="https://cdn-icons-png.flaticon.com/512/2864/2864350.png" class="dept-icon" alt="icon">
            <h2>Intensive Care Unit</h2>
            <p>Critical Care and Monitoring</p>
            <div class="dept-arrow">→</div>
        </div>
    </a>

    <a href="#" class="dept-column" style="background-image: url('https://images.unsplash.com/photo-1555252333-9f8e92e65df9?auto=format&fit=crop&q=80&w=800');">
        <div class="dept-content">
            <img src="https://cdn-icons-png.flaticon.com/512/822/822118.png" class="dept-icon" alt="icon">
            <h2>Nursery</h2>
            <p>Specialized Newborn Care</p>
            <div class="dept-arrow">→</div>
        </div>
    </a>

</section>  
<section class="news-section">
    <div class="main1">
        <span class="subtitle">MEDIA UPDATE</span>
        <h2 class="title">Latest Happenings</h2>

        <div class="news-grid">

            <!-- Card 1 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ta.png" alt="">
                    <span class="date">26 SEP, 2023</span>
                </div>
                <div class="news-content">
                    <span class="category">SPECIALIZED CARE</span>
                    <h3>Home Healthcare Service</h3>
                    <a href="#" class="read-more">READ MORE →</a>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="news-card dark">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1584036561566-baf8f5f1b144" alt="">
                </div>
                <div class="news-content">
                    <span class="category">MEDICAL ENCYCLOPEDIA</span>
                    <h3>Signs of a Weak Immune System: How Your Body Sends Distress...</h3>
                    <a href="#" class="read-more">READ MORE →</a>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="news-card">
                <div class="news-image">
                    <img src="https://images.unsplash.com/photo-1603398938378-e54eab446dde" alt="">
                </div>
                <div class="news-content">
                    <span class="category">MEDICAL ENCYCLOPEDIA</span>
                    <h3>Leukemia Symptoms, Causes and Treatment</h3>
                    <a href="#" class="read-more">READ MORE →</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="branches">
  <div class="header">
    <span class="subtitle">BRANCHES</span>
    <h2>Hospital Locations</h2>
  </div>

  <div class="cards">
    <div class="card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/imgg.png" alt="AMC Rakkah" />
      <div class="overlay">
        <h3>AMC Rakkah</h3>
        <div class="actions">
          <span><i class="fa-solid fa-location-arrow"></i> Location Map</span>
          <span><i class="fa-solid fa-clock"></i> Timings</span>
        </div>
      </div>
    </div>

    <div class="card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/sa.jpeg" alt="AGH Khobar" />
      <div class="overlay">
        <h3>AGH Khobar</h3>
      </div>
    </div>

    <div class="card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/saa.jpg" alt="AGH Dammam" />
      <div class="overlay">
        <h3>AGH Dammam</h3>
      </div>
    </div>
  </div>
</section>



<section class="articles-section">
  <h2 class="articles-title">NEWS & ARTICLES</h2>

  <p class="articles-desc">
    with all the latest developments related to medical activities and its updates,
    social events and community participation, and all interactive activities aimed
    at our beloved visitors, so that our hospital would be constantly in contact
    with all of its followers, to provide the hospital's latest news and events.
  </p>

  <div class="articles-grid">
    <!-- Card 1 -->
    <article class="article-card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/jubha.jpg" alt="IMC Partnership" />
      <h3>
        International Medical Center Signs Medical Partnership with Alahli Saudi Football Club
      </h3>
      <span class="article-date">12 Feb 2025</span>
      <a href="#" class="article-read-more">Read More</a>
    </article>

    <!-- Card 2 -->
    <article class="article-card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/im.jpg" alt="IMC Academy" />
      <h3>
        International Medical Center Academy Launches Dr. Walid Ahmad Fitaihi Chair for
        Wellness Research and a Series of Initiatives to Support Scientific Research
      </h3>
      <span class="article-date">11 Feb 2025</span>
      <a href="#" class="article-read-more">Read More</a>
    </article>

    <!-- Card 3 -->
    <article class="article-card">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/okkkkkkk.jpg" alt="IMC Hospital Treatment" />
      <h3>
        Jubha Hospital Performs First Atrial Fibrillation Treatment Using Pulsed Field Ablation Technology
      </h3>
      <span class="article-date">29 Jan 2025</span>
      <a href="#" class="article-read-more">Read More</a>
    </article>
  </div>
</section>
<section class="awards-section">
  <h2 class="awards-title">Awards & Accreditations</h2>

  <div class="awards-carousel">
    <span class="arrow left">&#10094;</span>

    <div class="certificates">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/k.jpeg" alt="Certificate">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kaaaa.webp" alt="Certificate">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kaaaaaaaaa.jpg" class="active" alt="Certificate">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/re.jpeg" alt="Certificate">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/h.jpg" alt="Certificate">
    </div>

    <span class="arrow right">&#10095;</span>
  </div>
</section>

<!-- Footer Info Section -->
<section class="footer-info">
  <!-- Newsletter -->
  <div class="footer-block">
    <h3>Subscribe today to our<br>newsletter</h3>
    <input type="email" placeholder="Enter email:" class="newsletter-input">
    <button class="newsletter-btn">Subscribe</button>
  </div>

 <div class="footer-block">
  <h3>Follow Us</h3>
  <p>Stay updated with our social channels.</p>
  <div class="social-icons">
    <a href="#" aria-label="Facebook" class="fab fa-facebook-f"></a>
    <a href="#" aria-label="Twitter" class="fab fa-twitter"></a>
    <a href="#" aria-label="Instagram" class="fab fa-instagram"></a>
    <a href="#" aria-label="LinkedIn" class="fab fa-linkedin-in"></a>
    <a href="#" aria-label="YouTube" class="fab fa-youtube"></a>
  </div>
</div>


  <!-- App Download -->
  <div class="footer-block">
    <h3>Download My Jubha-hospital App Today</h3>
    <div class="store-buttons">
      <img src="appstore.png" alt="App Store">
      <img src="googleplay.png" alt="Google Play">
    </div>
  </div>
</section>
</div>
 <script>
    new Swiper(".heroSwiper", {
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      effect: "fade",
      speed: 1200,
    });
  </script>

<script>
  const certificates = document.querySelectorAll('.certificates img');
  const prevBtn = document.querySelector('.arrow.left');
  const nextBtn = document.querySelector('.arrow.right');

  let currentIndex = 2;

  function updateCarousel() {
    certificates.forEach((img, index) => {
      img.classList.toggle('active', index === currentIndex);
    });
  }

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % certificates.length;
    updateCarousel();
  });

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + certificates.length) % certificates.length;
    updateCarousel();
  });
</script>




</body>
</html>

<?php get_footer(); ?>
