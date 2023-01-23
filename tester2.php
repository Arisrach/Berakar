<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* .grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: repeat(3, 1fr);
  grid-gap: 10px;
}

.grid-item {
  position: relative;
}

.grid-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
} */

/* .grid-container {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-template-rows: auto;
  grid-gap: 10px;
  align-items:.center;
}

.grid-item {
text-align: center;
}

.grid-item img {
width: 100%;
height: auto;
object-fit: cover;
}

.grid-item h2 {
font-size: 1.5rem;
margin-top: 10px;
}

.grid-item p {
font-size: 1rem;
color: #333;
margin-top: 5px;
} */

/* ---- grid ---- */

.grid {
  background: #DDD;
  height: 75%; /* inherit height from body */
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-item{
  float: left;
  /* width: auto; */
  /* width: 100px;
  height: 100px; */
  height: 100px;
  background: #0D8;
  border: 2px solid #333;
  border-color: hsla(0, 0%, 0%, 0.7);
}
/* img{
    width: 100%;
} */
    </style>
</head>
<body>
<!-- <div class="grid-container">
  <div class="grid-item">
    <img src="image1.jpg" alt="image1">
    <h2>Title 1</h2>
    <p>Description 1</p>
  </div>
  <div class="grid-item">
    <img src="image2.jpg" alt="image2">
    <h2>Title 2</h2>
    <p>Description 2</p>
  </div>
  <div class="grid-item">
    <img src="image3.jpg" alt="image3">
    <h2>Title 3</h2>
    <p>Description 3</p>
  </div>
</div> -->

<div class="grid">
<div class="grid-item">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/82/orange-tree.jpg" />
      </div>
      <div class="grid-item">
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
  <!-- Add more grid items here -->
</div>
<script src="https://isotope.metafizzy.co/isotope.pkgd.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
   
<script>
//     $('.grid').isotope({
//         layoutMode: 'masonryHorizontal',
// masonryHorizontal: {
//   rowHeight: 50
// }
// });

$( document ).ready(function() {
    $.getJSON("https://api.unsplash.com/photos/?client_id=_kCh5kCd9QmL8FBoqmmC7HqwMJXSmsAjIVEm1lGQ1cI" , function(data){
        $.each (data, function (i , data){
                // console.log(data)
                // console.log(data.urls.raw)
                const img = data.urls.raw;
                
                console.log(img.naturalHeight)
                img.onload = function() {
  console.log(this.width + 'x' + this.height)
}
                // return i<3;
                $('#main').append('<div class="col-lg-4"><div class="card"><img src="'+data.urls.full+'" class="img-fluid"/></div></div>')
            });
    });
});
</script>

</body>
</html>