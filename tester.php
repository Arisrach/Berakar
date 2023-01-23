<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    * { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* ---- grid ---- */

/* .grid {
  background: #DDD;
} */

/* clear fix */
/* .grid:after {
  content: '';
  display: block;
  clear: both;
} */

/* ---- .grid-item ---- */
/* 
.grid-item {
  width: 20%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
} */


/* .grid-item--width2 img{ width: 40%; } */
/* .grid-item--height2 img{ height: 200px; } */

</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
     <!-- <h1>Hello, world!</h1> -->
    <div class="row g-2" data-masonry='{"percentPosition": true }'>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" class="w-10 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" class="w-10 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" class="w-100 img-fluid"/>
      </div>
      <div class="col-4">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" class="w-100 img-fluid"/>
      </div>
  </div>


    <!-- <h1>Hello, world!</h1> -->
    <div class="grid d-none">
      <div class="grid-item ">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
      </div>
      <div class="grid-item grid-item--width2">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/submerged.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/look-out.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/one-world-trade.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/drizzle.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/cat-nose.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/contrail.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/golden-hour.jpg" />
      </div>
      <div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/flight-formation.jpg" />
      </div>
  </div>

    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <!-- <script src="https://unpkg.com/packery@2/dist/packery.pkgd.js"></script> -->
    <script>

        // init Packery
// var $grid = $('.grid').packery({
//   itemSelector: '.grid-item',
//   percentPosition: true
// });
// layout Packery after each image loads
// $grid.imagesLoaded().progress( function() {
//   $grid.packery();
// });  

// var $grid = $('.grid').imagesLoaded( function() {
//   $grid.packery({
//     itemSelector: '.grid-item',
//     percentPosition: true
//   });
// });  
//         $('.grid').packery({
//   itemSelector: '.grid-item',
//   percentPosition: true
// });

    </script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>