<?php get_header(); ?>
<br>
<br>


<section class="doctor-profile">

  <div class="profile-hero">
    <h1>Consultant Maryum Khalid</h1>
    <p>Gastroenterology, Internal Medicine</p>
  </div>

  <div class="profile-container">

    <div class="profile-image">
      <img src="http://jubha-hospital.test/wp-content/uploads/2026/01/ha.webp" alt="doctor">
    </div>

    <div class="profile-details">
      <h2>Speciality Area</h2>
      <p>Gastroenterology, Internal Medicine</p>

      <h2>Locations</h2>
      <p>AMC Rakkah, AGH Khobar</p>

      <h2>Qualifications</h2>
      <ul>
        <li>2020 – MRCP (UK), Royal College of Physicians, Edinburgh</li>
        <li>2016 – FCPS Gastroenterology, Pakistan</li>
        <li>2007 – MBBS, University of Health Sciences</li>
      </ul>

      <a href="#" class="book-btn">
        <i class="fa-regular fa-calendar-days"></i> BOOK AN APPOINTMENT
      </a>
    </div>

  </div>

</section>


<section class="qualification-section">
  <h2 class="section-title">QUALIFICATION / CERTIFICATION</h2>

  <div class="content-block">
    <h3>Qualifications:</h3>
    <ul>
      <li>2020 Membership of Royal College of Physicians, Royal College of Physicians of Edinburgh.</li>
      <li>2016 FCPS Gastroenterology, College of Physicians and Surgeons of Pakistan.</li>
      <li>2007 Bachelor of Medicine & Bachelor of Surgery, University of Health and Sciences, Pakistan.</li>
    </ul>
  </div>

  <div class="content-block">
    <h3>Working Experience:</h3>
    <ul>
      <li>2016 till now – Almana General Hospital, Khobar</li>
    </ul>
  </div>

  <div class="content-block">
    <h3>Special Skills & Procedures:</h3>
    <ul>
      <li>Diagnose and treat GI disorders including GERD, dyspepsia, Crohn’s disease, ulcerative colitis, irritable bowel syndrome, and other digestive diseases.</li>
      <li>Provide advice and support on diet and nutrition changes and refer patients to relevant dietitians as required.</li>
      <li>Perform investigative and therapeutic endoscopic procedures such as upper endoscopy, sigmoidoscopy, colonoscopy, ERCP, endoscopic ultrasound, esophageal pH monitoring, motility studies, capsule endoscopy, stricture dilatation, and stent placement.</li>
      <li>Diagnose and treat liver and biliary diseases including hepatitis, liver cirrhosis, fatty liver, biliary obstruction, and primary sclerosing cholangitis.</li>
      <li>Provide medical care for chronic diseases such as diabetes, hypertension, and hyperlipidemia.</li>
    </ul>
  </div>

  <a href="/find-a-doctor-2/" class="back-link">← BACK TO ALL DOCTORS</a>
</section>

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

<?php get_footer(); ?>
