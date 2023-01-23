<?php include_once('header.php'); ?>
<div class="container" style="padding-top:106px;">
    <h1 class="sub-color news-f" style="font-size: 177px;">
        NEWS
    </h1>
    <?php
    $y = 1;
    while ($y <= 6) : ?>
    <hr>
    <div class="row">
        <div class="col-lg-4 order-lg-3">
            <img src="assets/img/hp4-slider3-1170x770-1.png" alt="" class="img-fluid">
        </div>
        <div class="col-lg-4 order-lg-1">
            <h2 class="color-darkgreen mt-3" style="font-size: 50px;">Lorem ipsum dolor sit amet.</h2>
        </div>
        <div class="col-lg-4 order-lg-2">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod... </p>
            <p class="text-secondary">December 23, 2021</p>
            <a class="btn btn-secondary mb-4 rounded-0" href="#" role="button">Link</a>
            
        </div>
    </div>
    <?php
      $y++;
    endwhile; ?>
</div>
<?php include_once('footer.php'); ?>