<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      /* body{
        background-color: #222222;
      } */
.banners{
  object-fit: cover;
}
.dropdown-item.active, .dropdown-item:active {
    /* color: var(--bs-dropdown-link-active-color); */
    text-decoration: none;
    background-color: #006837;
}

.video-containers {
  position: relative;
  padding-bottom: 56.25%; /* 16:9 */
  height: 0;
}
.video-containers iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.video-container {
  position: absolute;
  top: 0;
  bottom: 0;
  width: 100%;
  height: 100%; 
  overflow: hidden;
}
.video-container video {
  /* Make video to at least 100% wide and tall */
  min-width: 100%; 
  min-height: 100%; 

  /* Setting width & height to auto prevents the browser from stretching or squishing the video */
  width: auto;
  height: auto;

  /* Center the video */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}

.img-content{
  min-width: 100%;
min-height: 100%;
}

.image-gallery {
    background-color:#000000;
  width: 100%;
  /* max-width: 950px; */
  margin: 0 auto;
  /* padding: 50px 20px; */
  padding: 5px;
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(550px, 1fr));
  grid-auto-rows: 300px;
  grid-auto-flow: dense;
  grid-gap: 5px;
}

.image-gallery .image-box {
  position: relative;
  /* background-color: #d7d7d8; */
  background: linear-gradient(0deg, rgb(0 0 0 / 50%) 0%, rgba(0,0,0,0) 100%);
  overflow: hidden;
  
}

.image-gallery .image-box:nth-child(7n + 1) {
  grid-column: span 2;
  grid-row: span 2;
}

.image-gallery .image-box img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: all 0.5s ease;
}

.image-gallery .image-box:hover img {
  transform: scale(1.1);
}

.image-gallery .image-box .overlay {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 20px;
  /* background-color: #fafafaf2; */
  background: rgb(0,0,0);
background: linear-gradient(0deg, rgb(0 0 0 / 50%) 0%, rgba(0,0,0,0) 100%);
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  /* opacity: 0; */
  transition: all 0.5s ease;
  z-index: 1;

}
.overlay2 {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 20px;
  /* background-color: #fafafaf2; */
  /* background: rgb(0,0,0); */
background: linear-gradient(0deg, rgb(0 0 0 / 50%) 0%, rgba(0,0,0,0) 100%);
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  /* opacity: 0; */
  transition: all 0.5s ease;
  z-index: 99;

}

.image-gallery .image-box:hover .overlay {
  /* top: 20px;
  right: 20px;
  bottom: 20px;
  left: 20px; */
  opacity: 0.5;
  animation: animatedBackground 0.5s;
}
@keyframes animatedBackground {
  from {
    transform: scale(1);
  }
  to {
    transform: scale(1);
  }
}
.image-gallery .image-box .details {
  text-align: left;
}

.image-gallery .image-box .details .title {
  margin-bottom: 8px;
  font-size: 42px;
  font-weight: 600;
  /* width: 300px;
  overflow-wrap: break-word; */
  position: relative;
  top: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box .details .category {
  font-size: 18px;
  font-weight: 400;
  position: relative;
  bottom: -5px;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
}

.image-gallery .image-box .details .title {
  top: 0px;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box .details .category {
  bottom: 0;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s 0.2s ease;
}

.image-gallery .image-box .details .title a,
.image-gallery .image-box .details .category a {
  color: #ffffff;
  text-decoration: none;
}
/* Let's make it responsive */
@media (max-width: 1441px) and (min-width: 1099px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    grid-auto-rows: 260px;
  }
  .circle{
    margin-top: 125px !important;
    padding-top: 8% !important;
    width: 370px !important;
    height: 370px !important;
  }

}

@media (max-width: 1098px) and (min-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    grid-auto-rows: 250px;
  }

}

/* Let's make it responsive */
@media (max-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
  }

  .image-gallery .image-box:nth-child(7n + 1) {
    grid-column: unset;
    grid-row: unset;
  }
}


@font-face {
  font-family: 'myAmerican';
  src:  url('assets/font/american_purpose/American-Purpose.ttf') format("truetype");
  /* url('assets/font/american_purpose/American-Purpose.otf') format('otf') */
}
@font-face {
  font-family: 'mygotham';
  src:  url('assets/font/FONT-GOTHAM/Gotham-Medium.ttf') format("truetype");
  /* url('assets/font/american_purpose/American-Purpose.otf') format('otf') */
}
.desc{
    font-family: mygotham;
    font-size: 23px;
    color: #606060;
}
.category{
    font-family: mygotham;
    font-size: 23px;
    color: #606060;
}
.title-about{
    font-size: 77px;
    color: #606060;
}
.sub-color{
    color: #989898;
}
.color-brand{
    color: #6ebc45;
}

.nav-link{
  font-family: mygotham;
}
h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: myAmerican;
}

/* team */
.box-team{
    position: relative;
  text-align: center;
  color: white;
}
.bottom-left {
  position: absolute;
  bottom: 15px;
  left: 15px;
}
.bottom-left p{
    font-family: mygotham;
    font-size: 23px;
    /* color: #606060; */
    margin: 0;
}
.bottom-left h4{
    font-family: myAmerican;
    font-size: 33px ;
    margin: 0;
    /* color: #606060; */
}
.main-color{
    color:#006837;
}
.title-root{
    font-size: 77px;
}
.desc-root{
    font-size: 23px;
    font-family: mygotham;
}
.illustation{
    background-image: url("assets/img/rootillustration@2x.png");
    /* height: 100%; */
    /* background-attachment: fixed; */
    /* background-position: center; */
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
}

.circle {
    margin-top: 320px;
    padding-top: 12%;
  width: 450px;
  height: 450px;
  /* line-height: 500px; */
  border-radius: 50%;
  font-size: 50px;
  border:5px solid white;
  color:#006837;
  font-family: myAmerican;
  text-align: center;
  transition: 1s;
  opacity: 0;
  transition-delay: 0.5s;
  /* background: #000 */
}
.circle[data-scroll="in"]{
  opacity: 1;
}
.sub-title{
    font-family: myAmerican;
    font-size: 50px ;
    color:#006837;
}
.powerhouse{
    position: relative;
    height:800px;
    margin-top: -160px;
    width: 100%;
    overflow: hidden;
}
.social{
    position: absolute;
    width: 500px;
  top: 0px;
  left: 1%;
}
.social p{
    text-align: right;
    margin-bottom: 0px;
}
.campaign{
    position: absolute;
    width: 600px;
    top: 35%;
    left: 14%;
}
.campaign p{
    text-align: right;
    margin-bottom: 0px;
}
.creative{
    position: absolute;
    width: 700px;
  top: 15%;
  right: 0%;
}
.creative p{
    /* text-align: right; */
    margin-bottom: 0px;
}
.execution{
    position: absolute;
    width: 700px;
  top: 45%;
  right: 0%;
}
.execution p{
    /* text-align: right; */
    margin-bottom: 0px;
}

/* animation */
.content h3{
  transition: 0.1s;
  transition-delay: 2s;
  transform-origin: left;
  transform: scaleX(0);
}
.content h3[data-scroll="in"]{
  transform: scaleX(1);
}
section.image-box{
  transition: 0.1s;
  transform-origin: left;
  transform: scaleX(0);
}
section.image-box[data-scroll="in"]{
  transform: scaleX(1);
}
.content img{
  transition: 0.5s;
  transform: scale(2);
}
.content img[data-scroll="in"]{
  transform: scale(1);
}

.animate h1{
  transition: 0.2s;
  transform-origin: left;
  transform: scaleX(0);
}
.animate h1[data-scroll="in"]{
  transform: scaleX(1);
}
.animate h3{
  transition: 1s;
  transition-delay: 0.3s;
  opacity: 0;
}
.animate h3[data-scroll="in"]{
  opacity: 1;
}

.text-end{
  transition: 1s;
  transform: scale(0);
}
.text-end[data-scroll="in"]{
  transform: scale(1);
}
.animate img{
  transition: 1s;
  transition-delay: 0.5s;
  opacity: 0;
}
.animate img[data-scroll="in"]{
  opacity: 1;
}

.animate p{
  transition: 1.5s;
  opacity: 0;
}
.animate p[data-scroll="in"]{
  opacity: 1;
}
.animate-root{
  overflow: hidden;
}

span.title-root1{
  position: relative;
  transition: 1s;
  opacity: 0;
  transition-delay: 0.1s;
  top:-100px;
  overflow: hidden;
}
span.title-root1[data-scroll="in"]{
  opacity: 1;
  top: 0px;
}
span.title-root2{
  position: relative;
  transition: 1s;
  opacity: 0;
  transition-delay: 0.5s;
  top:-100px;
  overflow: hidden;
}
span.title-root2[data-scroll="in"]{
  opacity: 1;
  top: 0px;
}
span.title-root3{
  position: relative;
  transition: 1s;
  opacity: 0;
  transition-delay: 1s;
  top:-100px;
  overflow: hidden;
}
span.title-root3[data-scroll="in"]{
  opacity: 1;
  top: 0px;
}

p.desc-root{
  transition: 1s;
  transition-delay: 0.9s;
  opacity: 0;
}

p.desc-root[data-scroll="in"]{
  opacity: 1;
}

.desc-root p{
  position: relative;
  transition: 1s;
  opacity: 0;
  transition-delay: 0.3s;
  top:-100px;
  overflow: hidden;
}

.desc-root p[data-scroll="in"]{
  opacity: 1;
  top: 0px;
}

h3.sub-title{
  transition: 0.1s;
  transition-delay: 0.1s;
  transform-origin: bottom;
  transform: scaleY(0);
}

h3.sub-title[data-scroll="in"]{
  transform: scaleY(1);
}

h1.title-about{
  position: relative;
  transition: 1s;
  opacity: 0;
  transition-delay: 0.5s;
  top:-100px;
  overflow: hidden;
}

h1.title-about[data-scroll="in"]{
  opacity: 1;
  top: 0px;
}
img.img-brand{
  transition: 1s;
  transition-delay: 0.5s;
  transform: scale(0);
}
img.img-brand[data-scroll="in"]{
  transform: scale(1);
}
img.img-brand{
  transition: 1s;
  transition-delay: 0.5s;
  transform: scale(0);
}
img.img-brand[data-scroll="in"]{
  transform: scale(1);
}
p.color-brand{
  transition: 1s;
  transition-delay: 1s;
  transform-origin: left;
  transform: scaleX(0);
}
p.color-brand[data-scroll="in"]{
  transform: scaleX(1);
}
img.img-team{
  transition: 1s;
  opacity: 0;
  transition-delay: 0.5s;
}
img.img-team[data-scroll="in"]{
  opacity: 1;
}
h4.team-nama{
  transition: 1s;
  transition-delay: 0.5s;
  transform-origin: left;
  transform: scaleX(0);
}
h4.team-nama[data-scroll="in"]{
  transform: scaleX(1);
}
p.team-pos{
  transition: 1s;
  transition-delay: 1s;
  transform-origin: left;
  transform: scaleX(0);
}
p.team-pos[data-scroll="in"]{
  transform: scaleX(1);
}

    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-0 fixed-top">
  <div class="container">
    <a class="navbar-brand pb-0 pt-3" href="index.php"><img src="assets/img/logo-berakar.svg" width="100px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Work</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="about.php">Roots</a></li>
            <li><a class="dropdown-item" href="#">Services</a></li>
            <li><a class="dropdown-item" href="#">Client</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="#">Team</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Contact</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>