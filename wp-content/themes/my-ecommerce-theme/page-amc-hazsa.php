<?php get_header(); ?>
    <div class="amc-hazsa">
        <div class="hazsa">
            <img src="<?= get_template_directory_uri(); ?>/img/neww.jpg" alt="">
        </div>
    </div>
    <div class="auto-wrapper">
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/tower.jpg" alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/tower1." alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/newww.jpg" alt="">
        </div>
    </div>
    <div class="auto">
        <div class="auto-card">
            <img src="<?= get_template_directory_uri(); ?>/img/newww.jpg" alt="">
        </div>
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
    }, 3000); // change slide every 3 seconds
});
</script>

<br><br><br><br><br><br>
<?php get_footer(); ?>