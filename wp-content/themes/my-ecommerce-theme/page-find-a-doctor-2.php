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
            <h1>Find a Doctor </h1>
            <div class="breadcrumb">
            <span class="icon-1">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <i class="fa-regular fa-house"></i>
                </a>
            </span>
            <span>find
                    / doctor</span>
            </div>
        </div>
</section>


 
 <div class="doctor-container">
    <p><strong>At Almana Hospital's,</strong></p>

    <p>
      We've proudly served our patients for over 75 years. As a leader in Saudi Arabia's healthcare landscape,
      we're dedicated to providing exceptional care to our patients.
    </p>

    <p>
      <strong>Find Your Doctor</strong><br />
      Explore our extensive network of over 900 doctors and find the one who best suits your needs.
      Search by location or specialty.
    </p>

    <div class="search-bar">
      <input type="text" placeholder="Type the doctor's name" />
      <select>
        <option>Select Location</option>
        <option>Dammam</option>
        <option>Khobar</option>
        <option>Riyadh</option>
      </select>
      <select>
        <option>Select Specialization</option>
        <option>Cardiology</option>
        <option>Dermatology</option>
        <option>Pediatrics</option>
      </select>
      <button>SEARCH</button>
    </div>

    <div class="alphabet-filter">
      <span class="all">FIND ALL</span>
      <span>A</span><span>B</span><span>C</span><span>D</span><span>E</span>
      <span>F</span><span>G</span><span>H</span><span>I</span><span>J</span>
      <span>K</span><span>L</span><span>M</span><span>N</span><span>O</span>
      <span>P</span><span>Q</span><span>R</span><span>S</span><span>T</span>
      <span>U</span><span>V</span><span>W</span><span>X</span><span>Y</span><span>Z</span>
    </div>
  </div>
<section class="doctor-section">
  <div class="doctor-grid">

  <div class="doctor-card"
  data-name="Dentist Rihab Mubarak Ahmed"
  data-specialty="Dentist"
  data-location="AMC Rakkah"
  data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp"
  data-profile="<?php echo site_url('/doctor/rihab-mubarak-ahmed'); ?>">

      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
     <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
     <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
        <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>


   

  </div>
  
</section>
<section class="doctor-section">
  <div class="doctor-grid">

    <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
     <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
     <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
        <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>


   

  </div>
  
</section>
<section class="doctor-section">
  <div class="doctor-grid">

    <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
     <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
     <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
        <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>


   

  </div>
  
</section>
<section class="doctor-section">
  <div class="doctor-grid">

    <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
     <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
     <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/kii.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>
        <div class="doctor-card"
      data-name="Dentist Rihab Mubarak Ahmed"
      data-specialty="Dentist"
      data-location="AMC Rakkah"
      data-img="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg">
      
      <div class="doctor-img">
        <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/doctor.jpg" alt="Doctor">
      </div>
      <h3>Dentist Rihab Mubarak Ahmed</h3>
      <p class="spec">Dentist</p>
      <p class="location"><i class="fas fa-map-marker-alt"></i> AMC Rakkah</p>

    </div>


   

  </div>
  
</section>



<!-- MODAL -->
<div class="doctor-modal" id="doctorModal">
  <div class="modal-content">

    <span class="close">&times;</span>

        <div class="modal-left">
    <img id="modalImg"
        src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp"
        alt="Doctor">
    </div>


    <div class="modal-right">
      <h2 id="modalName"></h2>

      <p class="label">Speciality Area</p>
      <p id="modalSpecialty"></p>

      <p class="label">Location</p>
      <p id="modalLocation"></p>

      <div class="modal-actions">
        <button class="book-btn"><i class="fa-regular fa-calendar-days"></i> BOOK AN APPOINTMENT</button>
        <a href="/viwespf-2/" class="profile-link">VIEW PROFILE →</a>
      </div>
    </div>

  </div>
</div>


<div class="pagination">
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">7</a>
  <a href="#">8</a>
  <a href="#">9</a>
  <a href="#">10</a>
  <a href="#" class="next">NEXT &gt;&gt;</a>
</div>


<script>
  const modal = document.getElementById("doctorModal");
  const modalImg = document.getElementById("modalImg");
  const modalName = document.getElementById("modalName");
  const modalSpecialty = document.getElementById("modalSpecialty");
  const modalLocation = document.getElementById("modalLocation");
  const closeBtn = document.querySelector(".close");

  document.querySelectorAll(".doctor-card").forEach(card => {
    card.addEventListener("click", () => {
      modalImg.src = card.dataset.img;
      modalName.textContent = card.dataset.name;
      modalSpecialty.textContent = card.dataset.specialty;
      modalLocation.textContent = card.dataset.location;

      modal.style.display = "flex";
    });
  });

  closeBtn.onclick = () => modal.style.display = "none";
  modal.onclick = e => {
    if (e.target === modal) modal.style.display = "none";
  };
</script>







<br><br><br><br><br><br><br>








<?php get_footer(); ?>