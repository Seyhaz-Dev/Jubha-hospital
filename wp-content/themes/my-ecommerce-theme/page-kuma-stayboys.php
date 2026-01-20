<?php get_header(); ?>
    <div class="amc-hazsa">
        <div class="hazsa">
            <img src="<?= get_template_directory_uri(); ?>/img/in.avif" alt="">
        </div>
    </div>
    <h3>Amc-Hazsa</h3>
    <div class="auto-wrapper">
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/inside1.webp" alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/inside3.jpg" alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/inside2.jpg" alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/-1x-1.webp" alt="">
        </div>
    </div>
</div>
<h3>Overview</h3>
<div class="over">
    <p>The hospital is a comprehensive healthcare institution committed to providing high-quality, safe, and compassionate medical care to individuals and families within the community. It serves as a center for prevention, diagnosis, treatment, and rehabilitation, ensuring that patients receive continuous and coordinated care throughout their healthcare journey. The hospital operates with a strong focus on patient dignity, safety, and ethical medical practice. <br><br>


Equipped with modern medical technology and well-maintained facilities, the hospital offers a wide range of inpatient and outpatient services. These include emergency care, surgical services, maternal and child health, diagnostic imaging, laboratory services, pharmacy support, and specialized medical departments. Advanced equipment and evidence-based practices are used to support accurate diagnosis and effective treatment. <br><br>

The hospital is staffed by a multidisciplinary team of qualified physicians, nurses, allied health professionals, and support staff who work collaboratively to deliver patient-centered care. Continuous education and professional development ensure that staff remain up to date with current medical standards and innovations. Emphasis is placed on teamwork, communication, and compassionate service. <br><br>

In addition to clinical services, the hospital is committed to community health promotion, disease prevention, and health education. It actively participates in outreach programs, screening initiatives, and public health campaigns to improve overall community well-being. Through quality improvement programs, patient safety measures, and adherence to national and international healthcare standards, the hospital strives to be a trusted and reliable healthcare provider for all.</p>
</div>
<h3>Dostor Detail</h3>
<div class="doctor-detail">
    <div class="img">
        <img src="<?= get_template_directory_uri(); ?>/img/s.jpg" alt="">
    </div>
    <p>The hospital is supported by a team of highly qualified and experienced doctors dedicated to providing safe, effective, and compassionate medical care. Each doctor is licensed, professionally trained, and specialized in their respective fields, ensuring that patients receive accurate diagnoses and appropriate treatment plans. The medical staff includes general physicians, specialists, and consultants who work collaboratively to deliver comprehensive healthcare services. <br><br>

Doctors in the hospital are responsible for patient assessment, diagnosis, treatment, and ongoing medical management. They conduct clinical examinations, order and interpret diagnostic tests, perform medical and surgical procedures, and monitor patient progress throughout treatment and recovery. Clear communication with patients and their families is a priority, helping them understand their condition, treatment options, and expected outcomes. <br><br>

The hospital encourages continuous professional development among its doctors through regular training programs, workshops, and medical conferences. This ensures that clinical practices are aligned with the latest medical research, technologies, and evidence-based guidelines. Doctors also actively participate in quality improvement initiatives and patient safety programs to maintain high standards of care. <br><br>

In addition to clinical duties, doctors play an important role in mentoring junior medical staff, collaborating with nurses and allied health professionals, and contributing to a respectful and ethical healthcare environment. Their commitment to professionalism, empathy, and excellence ensures that patients receive reliable and patient-centered medical care at all times.</p>
</div>
<h3>Out Patient Clinics “OPD”</h3>
<div class="working">
    <div class="houre">
        <h1>1st Shift</h1>
        <p>8am -12pm</p>
    </div>
    <div class="houre">
        <h1>2nd Shift</h1>
        <p>4pm - 10pm</p>
    </div>
    <h4>Visitors</h4>
    <div class="houre">
        <h1>Daily</h1>
        <p>7am - 10pm</p>
    </div>
</div>
<h3>Pharmacies</h3>
<div class="working">
    <div class="houre">
        <h1>1st Shift</h1>
        <p>8am - 1pm</p>
    </div>
    <div class="houre">
        <h1>2nd Shift</h1>
        <p>4pm - 10pm</p>
    </div>
    <h4>Visitors</h4>
    <div class="houre">
        <h1>Time</h1>
        <p>8am - 4pm</p>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll(".auto");
    let index = 0;

    function showSlide() {
        slides.forEach((slide) => {
            slide.style.transform = `translateX(-${index * 100}%)`;
        });
    }

    setInterval(() => {
        index++;
        if (index >= slides.length) {
            index = 0;
        }
        showSlide();
    }, 4000); // change slide every 3 seconds
});
</script>

<br><br><br><br><br><br>
<?php get_footer(); ?>