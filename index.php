<?php include_once('header.php'); ?>
<img src="assets/img/hp4-slider3-1170x770-1.png" height="800px" class=" video-container w-100 banners" alt="">
<!-- <div class="video-container">
<video width="100%" loop autoplay muted>
  <source src="assets/video/tes.mp4" type="video/mp4">
  Your browser does not support the video tag.
</video>
</div> -->
<div class="vh-100">
</div>
<div class="containers">

  <div class="image-gallery">
    <?php
    $y = 1;
    while ($y <= 21) : ?>
      <section class="image-box">
        <div class="content">
          <a href="single.php">
            <div class="overlay"  style="background-image: url('assets/img/hp4-slider3-1170x770-1.png');background-size: cover;background-position: center;">
              <div class="overlay2">
                <div class="details">
                  <h3 class="title text-light">A TRUTH OF
                    TRUTHFUL MONTH
                  </h3>
                </div>
              </div>
            </div>
          </a>
        </div>
      </section>
    <?php
      $y++;
    endwhile; ?>
  </div>
</div>
<?php include_once('footer.php'); ?>