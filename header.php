<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <style>
      /* body{
        background-color: #222222;
      } */
      html{
  scroll-behavior: smooth;
      }
      html,body
{
    width: 100%;
    /* height: 100%; */
    margin: 0px;
    padding: 0px;
    overflow-x: hidden; 
}
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
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
  grid-auto-rows: 250px;
  grid-auto-flow: dense;
  grid-gap: 5px;
}

.image-gallery .image-box {
  position: relative;
  /* background-color: #d7d7d8; */
  background: linear-gradient(0deg, rgb(0 0 0 / 50%) 0%, rgba(0,0,0,0) 100%);
  overflow: hidden;
  
}

/* .image-gallery .image-box:nth-child(7n + 1) {
  grid-column: span 2;
  grid-row: span 2;
} */

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
  font-size: 1.75rem;
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

.illustation{
  padding-top:400px;
}

.flex-container {
  display: flex;
  flex-direction: row;
  text-align: center;
}

.flex-item-left {
  padding: 10px;
  flex: 60%;
}
.flex-item-mid {
  padding: 10px;
  flex: 20%;
}

.flex-item-right {
  padding: 10px;
  flex: 20%;
}

.image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(2n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(3n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 3;
}

/* Let's make it responsive */
@media (min-width: 1921px) {
  .circle{
    margin-top: 700px !important;
    padding-top: 18% !important;
    width: 600px !important;
    height: 600px !important;
  }
  .image-gallery{
    grid-template-columns: repeat(auto-fit, minmax(655px, 1fr));
    grid-auto-rows: 450px;
  }
  .image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(2n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(3n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 3;
}

}
@media (max-width: 1441px) and (min-width: 1200px) {
  .circle{
    margin-top: 125px !important;
    padding-top: 8% !important;
    width: 370px !important;
    height: 370px !important;
  }
  .desc-root{
    font-size: 24px !important;
  }
  .sub-title{
    font-size: 35px !important;
  }
  .creative {
    width: 574px !important;
    top: 20% !important;
}
.campaign {
    width: 600px !important;
    top: 32% !important;
    left: 2% !important;
}
.social {
  top: 101px !important;
    /* position: absolute;
    width: 393px;
    left: 1%; */
}
}

@media (max-width: 1441px) and (min-width: 1099px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
    grid-auto-rows: 260px;
    /* --grid-column-count: 5; */
  }
  .image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(2n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(3n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 3;
}
  /* .image-gallery .image-box:nth-child(5n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(6n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(7n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(8n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(9n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(10n) {
  grid-column: span 1;
  grid-row: span 1;
} */

  .circle{
    margin-top: 125px !important;
    padding-top: 8% !important;
    width: 370px !important;
    height: 370px !important;
  }
  .desc-root{
    font-size: 24px !important;
  }
  .sub-title{
    font-size: 35px !important;
  }
  .creative {
    width: 574px !important;
    top: 20% !important;
}
.campaign {
    width: 600px !important;
    top: 32% !important;
    left: 2% !important;
}
}

@media (max-width: 1098px) and (min-width: 768px) {
  .image-gallery {
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    grid-auto-rows: 250px;
  }
  .image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(2n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(3n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 3;
}
.circle {
    margin-top: 550px !important;
    padding-top: 14% !important;
    width: 400px !important;
    height: 400px !important;
}
.social{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.campaign{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.creative{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.execution{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.powerhouse {
    position: unset !important;
    height: unset !important;
    margin-top: unset !important;
    width: unset !important;
    overflow: unset !important;
}
}
@media (max-width: 1023px) and (min-width: 768px) {
  .image-gallery { 
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    /* grid-template-columns: auto auto; */
    grid-auto-rows: 250px;
  }
  /* .image-gallery .image-box:nth-child(2n) {
  grid-column: span 2;
  grid-row: span 2;
} */
.image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(2n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(3n) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 2;
}

}
/* Let's make it responsive mobile */
@media (max-width: 768px) {
  .image-gallery { 
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    /* grid-template-columns: auto auto; */
    grid-auto-rows: 250px;
  }
  .image-gallery .image-box:nth-child(1n+1) {
  grid-column: span 2;
  grid-row: span 2;
}
  .image-gallery .image-box:nth-child(3n+1) {
  grid-column: span 1;
  grid-row: span 1;
}
  .image-gallery .image-box:nth-child(4n+1) {
  grid-column: span 1;
  grid-row: span 2;
}
  /* .image-gallery:nth-child(1){ 
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    grid-auto-rows: 250px;
  } */
  /* .image-gallery.image-box:nth-child(2n) { 
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    grid-auto-rows: 250px;
  } */
  /* .image-gallery .image-box:nth-child(7n + 1) {
    grid-column: unset;
    grid-row: unset;
  } */

  /* .image-gallery .image-box:nth-child(2n) {
    grid-column: 1 !important;
    grid-row: 1 !important;
  } */
  /* .image-gallery .image-box:nth-child(1) {
    grid-column: 2 !important;
    grid-row: 2 !important;
  } */
.news-f{
  font-size: 90px !important;
}
  h4.team-nama{
    font-size: 14px !important;
  }
  p.team-pos{
    font-size: 14px !important;
  }
  .title-root {
    font-size: 27px !important;
}
.sub-title {
    line-height: 50px;
}
.circle{
  margin-top: 100px !important;
  width: 100% !important;
  border: 0px !important;
  height: auto !important;
  padding-top: 0 !important;
  line-height: 50px;
}
.illustation {
    padding-top: 276px !important;
}
.social{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.campaign{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.creative{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.execution{
  position: unset !important;
  width: 100% !important;
  margin-top: 40px;
  margin-bottom: 40px;
}
.powerhouse {
    position: unset !important;
    height: unset !important;
    margin-top: unset !important;
    width: unset !important;
    overflow: unset !important;
}
}
.vh100{
  height: 100vh;
}
@media (max-width: 445px) {
  .video-container {
    height: 750px !important;
  }
  .vh100{
    height: 750px !important;
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
@font-face {
  font-family: 'mygothamlight';
  src:  url('assets/font/FONT-GOTHAM/Gotham-light.ttf') format("truetype");
  /* url('assets/font/american_purpose/American-Purpose.otf') format('otf') */
}
.gotlight{
    font-family: mygothamlight !important;
}
.desc{
    font-family: mygothamlight;
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
.color-darkgreen{
  color:#006837;
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
    font-size: 18px;
    /* color: #606060; */
    margin: 0;
}
.bottom-left h4{
    font-family: myAmerican;
    font-size: 24px;
    margin: 0;
    /* color: #606060; */
}
.main-color{
    color:#006837;
}
.title-root{
    font-size: 77px;
}
.desc-sub{
    font-size: 23px;
    font-family: mygotham;
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
.sub-title-tree{
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
    /* text-align: right; */
    margin-bottom: 0px;
}
.campaign{
    position: absolute;
    width: 600px;
    top: 35%;
    left: 14%;
}
.campaign p{
    /* text-align: right; */
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
.navbar-toggler {
  padding: 0px;
    border: 0px;
}
/* goodbysilver */
/* .work-filters {
  -webkit-column-width: auto;
  -moz-column-width: auto;
  column-width: auto;
  -webkit-column-count: 5;
  -moz-column-count: 5;
  column-count: 5;
  -webkit-column-gap: 20px;
  -moz-column-gap: 20px;
  column-gap: 20px;
  -webkit-transform: translateY(-10px);
  -moz-transform: translateY(-10px);
  -o-transform: translateY(-10px);
  transform: translateY(-10px);
  -webkit-transition: opacity 0.1s ease, transform 0.1s ease;
  -moz-transition: opacity 0.1s ease, transform 0.1s ease;
  -o-transition: opacity 0.1s ease, transform 0.1s ease;
  transition: opacity 0.1s ease, transform 0.1s ease;
  height: auto;
  left: 0;
  opacity: 0;
  padding: 10px 20px 40px 275px;
  pointer-events: none;
  position: absolute;
  right: 0;
  text-align: left;
  top: 110px;
  z-index: 1;
}
.work-filters li a {
  font-size: 18px;
  line-height: 25px;
  color: #757575;
}
.work-filters.is-visible {
  opacity: 1;
  pointer-events: all;
  -webkit-transform: translateY(0px);
  -moz-transform: translateY(0px);
  -o-transform: translateY(0px);
  transform: translateY(0px);
  -webkit-transition: opacity 0.4s ease, transform 0.4s ease;
  -moz-transition: opacity 0.4s ease, transform 0.4s ease;
  -o-transition: opacity 0.4s ease, transform 0.4s ease;
  transition: opacity 0.4s ease, transform 0.4s ease;
}
.filter-closer {
  -webkit-transition: -webkit-transform transform 0.2s ease;
  -moz-transition: -moz-transform transform 0.2s ease;
  -o-transition: -o-transform transform 0.2s ease;
  transition: transform transform 0.2s ease;
  -webkit-transform-origin: 15px 15px;
  -moz-transform-origin: 15px 15px;
  -o-transform-origin: 15px 15px;
  transform-origin: 15px 15px;
  background: url("../images/sprite.svg") no-repeat -10px -290px;
  width: 30px;
  height: 30px;
  position: absolute;
  right: 13px;
  top: -40px;
}
.filter-closer:hover {
  -webkit-transform: rotate(-90deg);
  -moz-transform: rotate(-90deg);
  -o-transform: rotate(-90deg);
  transform: rotate(-90deg);
} */

.activebg { background-color: #fff !important}
/* .collapse.show { background-color: #fff} */

/* masonary */
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

/* .grid-sizer,
.grid-item {
  width: 33.333%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
} */
/* 2 columns */
/* .grid-item--width2 { width: 40%; } */

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

/* .grid-item {
  width: 33.333%;
}

.grid-item {
  float: left;
} */

/* .grid-item img {
  display: block;
  max-width: 100%;
} */

/* 5 columns, percentage width */
/* .grid-item {
  float: left;
  width: 20%;
  height: 100px;
  background: #C09;
  border: 2px solid hsla(0, 0%, 0%, 0.5);
}

.grid-item--width2 { width: 40%; }
.grid-item--height2 { height: 200px; } */

.tes-aja{
  position: absolute;
  width: 100%;
  height: 100%;
  bottom: 0px;
  /* background: linear-gradient(0deg, rgb(0 0 0 / 50%) 0%, rgba(0,0,0,0) 100%); */
}
.tes-aja p{
  bottom: 0px;
}
.tes-aja p {
    bottom: 0px;
    position: absolute;
    font-size: 50px;
    color: aliceblue;
}

/* horizontal */
.grid {
  display: flex;
  flex-wrap: wrap;
  position: relative;
}
.grid > img {
  max-height: 100px;
  opacity: 0;
}

.grid img {
  opacity: 0;
  transition: opacity 0.3s;
}

.grid::after {
  content: '';
  flex-grow: 999999999;
}

.grid > figure {
  margin: 2px;
  /* background-color: violet; */
  position: relative;
  transition: all 1s ease-in-out;
  background-repeat: no-repeat;
  background-size: cover;
  transform: scale(1);
  transition: all 0.4s ease-in-out;
  position: relative;
  z-index: 0;
  /* border:1px solid red; */
}
.grid > figure.loaded {
  transform: scale(1);
}
.grid > figure.loaded img {
  opacity: 0.99999;
}
.grid > figure.loaded:hover {
  /* transform: scale(1.05); */
  z-index: 5;
}

.grid > figure > i {
  display: block;
}

.grid > figure > img {
  position: absolute;
  top: 0;
  width: 100%;
  height: auto;
}

    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <nav id="navs" class="navbar navbar-expand-lg navbar-light bg-white py-0 fixed-top">
  <div class="container">
    <a class="navbar-brand pb-0 pt-3" href="index.php"><img src="assets/img/mini-logo.svg" width="100px" alt=""></a>
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
            <li><a class="dropdown-item" href="about.php#root">Roots</a></li>
            <li><a class="dropdown-item" href="about.php#service">Services</a></li>
            <li><a class="dropdown-item" href="about.php#client">Client</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="about.php#team">Team</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="contact.php">Contact</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>