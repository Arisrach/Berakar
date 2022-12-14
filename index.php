<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .container-ar {
            padding-left: 60px;
            padding-right: 60px
        }

        .strikeout {
            /* font-size: 4em; */
            position: relative;
        }

        .welcome::after {
            background: #153116;
        }

        .strikeout::after {
            /* border-bottom: 0.125em solid rgba(255, 0, 0, 0.5);
  content: "";
  left: 0;
  line-height: 1em;
  margin-top: calc(0.125em / 2 * -1);
  position: absolute;
  right: 0;
  top: 50%; */
            border-bottom: 30px solid rgb(231 170 0 / 63%);
            content: "";
            left: 0;
            line-height: 1em;
            margin-top: calc(0.125em / 2 * -1);
            position: absolute;
            right: 0;
            top: 40%;
        }

        .award {
            font-size: 20px;
            font-weight: bold;
        }

        .category {
            font-size: 18px;
            font-weight: bold;
            color: #555;
        }

        .title {
            /* padding-top: 10px;
    margin-top: 10px;
    border-top: 1px solid #ccc; */
            font-size: 18px;
            font-style: italic;
        }

        .list-group-item {
            margin-bottom: 20px;
        }

        .status {
            font-size: 22px;
            font-weight: bold;
        }

        .hoppee {
            z-index: 999;
            display: none;
            position: absolute;
            background-color: #0000008c !important;
        }

        .card:hover .hoppee {
            z-index: 999;
            display: block;
            width: 100%;
        }

        .hoppee a {
            color: #000;
            text-decoration: none;
        }
 .team-position {
    display: block;
    margin-bottom: 20px;
    font-style: italic;
    color: #666;
    font-family: "EB Garamond", serif;
}
.post-media-news.post-thumb.rounded-left.border-right-0 {
    height: 200px;
    overflow: hidden;
}
a.readmore-button{
 text-decoration: none;
 font-weight: bold;
 color: #29abe2;
}
.entry-title-news a{
    text-decoration: none;
 font-weight: bold;
 color: #000;
}

.entry-meta-news a{
    text-decoration: none;
 font-weight: bold;
 color: #999999;
}

/* mobile */
@media screen and (max-width: 992px) {
  /* .container {
    margin: 1em 2em;
  } */
  .logo{
    font-size: 60px;
  }
  .navbar-nav{
    text-align: center;
   }
   .navbar-brand{
    display: block !important;
   }
   .font-m{
    font-size: 20px !important;
   }
   .container-ar{
    padding-left: 20px !important;
    /* overflow: visible; */
    padding-right: 20px !important;
   }
   .logo-strip{
    display: none;
   }
}
.img-main{
        max-height: 100vh;
        object-fit: cover;
      }
      .pkon-2{
        padding-top: 100px;
      }
      .desc-ms{
    font-size: 23px;
   }
@media screen and (min-width: 992px) {
  /* .logo{
    font-size: 90px;
    padding-right: 40px;
  }
  .menu-item{
    padding-right: 48px;
   }
   .navbar-nav{
    padding-top: 50px;
   } */
   .our-ms-f{font-size: 60px;
      }
   .pkon-2{
    padding-top: 306px;
   }
   .navbar-brand{
    display: none;
   }
   .desc-ms{
    font-size: 27px;
   }
   .welcome{
    height: 100vh;
   }
}


    </style>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="
    font-size: 25px;
">
                    <li class="nav-item px-4">
                        <a class="nav-link active" aria-current="page" href="#">Roots</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Work</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item px-4">
                        <a class="nav-link" href="#">News</a>
                    </li>
                    <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
                </ul>
                <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
            </div>
        </div>
    </nav>

    <div class="position-relative" style="height: 100vh;overflow:hidden;">

        <!-- <div class="position-absolute"></div> -->
        <div class="position-absolute" style="height: 100vh;background-image: url('assets/img/Landing-page.png');background-position: bottom; z-index:3;width:100%;background-repeat: repeat-x;    background-size: cover;">
            <!-- your content on screen 1 -->
        </div>
        <div class="position-absolute" style="background: #00000078;z-index: 2;height: 100vh;width:100%;">

        </div>
        <div class="position-absolute" style="z-index: 1;height: 100vh;width:100%;">
            <img class="h-100 img-main" src="assets/img/hp4-slider3-1170x770-1.png" alt="" style="width:100%;">
        </div>
        <div class="position-absolute" style="z-index: 99;bottom:20%;width:800px;">
            <div class="container-ar">
                <h1 class="text-light fw-bold font-m" style="font-size:60px;">
                    A TRUTH OF
                    THE TRUTHFUL MOTH
                </h1>
                <a href="#" class="h2 text-light text-decoration-underline">See the work</a>
            </div>
        </div>
        <div class="position-absolute logo-strip" style="z-index: 999;bottom:-3px;right: 200px;">
            <img src="assets/img/3@2x.png" width="500px" alt="">
        </div>
        <!-- <div class="position-absolute" style="z-index: 2;height: 100vh;bottom:0;">
       <img src="assets/img/Landing-page.png" alt="" style="height: 100vh;">
   </div> -->

    </div>
    <div class="position-relative" style="height: 100vh;
    background-color: #153116;background-image: url('assets/img/Page-Root.png');background-repeat: repeat-x; background-position: top; z-index:999;overflow:hidden;background-size: cover;">
        <!-- your content on screen 1 -->
        <!-- <div class="position-absolute" style="z-index: 1;">
       <img src="assets/img/image-asset.png" alt="" style="height: 100vh;">
   </div> -->
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/2@2x.png" width="500px" height="1080" alt="">
        </div>
        <div class="container-ar pkon-2">

            <h2 class="text-warning">our mission is to</h2>
            <h1 class="text-light fw-bold our-ms-f">RESONATE YOU <br>
                WITH POEPLE’S HEART <br>
                BY <span class="strikeout">CONNECTING</span> YOU <br>
                <span class="strikeout">TO THEIR ROOTS</span>
            </h1>
            <div class="row text-light pt-5 desc-ms">
                <div class="col-lg-6">An independent creative agency founded in 2008 by an award winning creative team, including Yoga Adhitrisna & Hari Prasetyo, we have our ideas three location of audience: their heart, their mind, and their life.</div>
                <div class="col-lg-6">
                    Berakar Komunikasi which literally means rooted communication, has a commitment to create creative concept based on insight that have strong roots on pulse of Indonesia.
                </div>
            </div>
        </div>
    </div>
    <!-- <div style="background-color: #211b15;height: 100vh;">
    <h1>tes</h1></div> -->
    <div class="welcome position-relative" style="
    background-color: #fff; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/4@2x.png" width="500px" height="1080" alt="">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">
            <div class="row justify-content-between">
                
                <div class="col-lg-4 order-lg-2" style="color:#6ebd45;margin-top:260px">
                    <div class="bg-white py-3">

                        <h1 class="fw-bold" style="font-size:80px; ">BRANDS &
                            <br>
                            CLIENT
                        </h1>
                        <p>We are fortunate to work with many loved brands and many great on going and past client.</p>
                    </div>
                </div>
                <div class="col-lg-7 mt-5 order-lg-1">
                    <div class="row">
                    <?php
                    $y = 1;
                    while($y <= 30) : ?>
                        <div class="col-lg-2 col-3 mx-auto mb-3">
                            <img src="assets/img/Coke.jpg" alt="" class="img-fluid">
                        </div>
                        
                        <?php 
                    $y++;
                    endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="welcome position-relative" style="background-color:#cccccc; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/4@2x.png" width="500px" height="1080" alt="">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">
            <div class="row justify-content-between">
                <div class="col-lg-6" style="margin-top:150px">
                    <div class="row">
                    <?php
                    $y = 1;
                    while($y <= 4) : ?>
                        <div class="col-6">
                            <div class="py-5">

                                <span class="year">2017</span>
                                <br>
                                <span class="status">Silver</span>

                                <br>
                                <span class="award">Pinasthika Creativestival, Yogyakarta</span>

                                <br>
                                <span class="category">Film TV Ads</span>
                                <br>

                                <span class="title">Sprite: Kenyataan Ramadan</span>
                            </div>
                        </div>
                        <?php 
                    $y++;
                    endwhile; ?>
                        

                    </div>

                    <a class="btn btn-dark fw-bold" href="#" role="button">More Details</a>
                </div>
                <div class="col-4" style="color:#6ebd45;margin-top:260px">
                    <div class="py-3 px-2">

                        <h1 class="fw-bold mb-0" style="font-size:80px; "><span style="background-color:#cccccc;">OUR</span><br>
                            <span style="background-color:#cccccc;">ACCIEV-</span>
                        </h1>
                        <div class="d-flex align-self-start justify-align-start" style="width: 500px;">
                            <div class="flex-fill fw-bold" style="font-size:80px;background-color:#cccccc;">MENT</div>
                            <div class="flex-fill pt-3 fw-bold" style="font-size:50px;background-color:#cccccc;">SO FAR...</div>
                        </div>
                        <!-- <span style="font-size: 40px;">SO FAR...</span> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome position-relative" style="background-color:#fff; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/5@2x.png" width="500px" height="1080" alt="" style="filter:invert(1);">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">
            <div class="row justify-content-between">
            <div class="col-lg-6" style="margin-top:50px">
                    <div class="row">
                    <?php
                    $x = 1;
                    while($x <= 12) : ?>
                        <div class="col-lg-4">
                            <div class="card shadow-sm mb-4 position-relative">
                                <div class="entry-thumbnail" style="
  overflow: hidden;">
                                    <div class="post-media post-thumb  rounded-left  border-right-0">

                                        <img src="assets/img/hp4-slider3-1170x770-1.png" class="alignleft w-100 img-fluid wp-post-image" alt="">
                                    </div>
                                </div>
                                <div class="hoppee h-100">
                                    <a href="#">
                                        <div class="card bg-transparent h-100">
                                            <p class=" my-auto text-light text-center">
                                                text</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php 
                    $x++;
                    endwhile; ?>
                    </div>
                    
                    <a class="btn btn-dark fw-bold" href="#" role="button">More Details</a>
                </div>
                    
                <div class="col-4" style="color:#000;margin-top:260px">
                    <div class="p-0">

                        <h1 class="fw-bold mb-0" style="font-size:150px; "><span style="background-color:#ffff;">OUR</span><br>
                            <span class="p-2" style="background-color:#ffff;">WORK</span>
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="welcome position-relative" style="background-color:#cccccc; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/5@2x.png" width="500px" height="1080" alt="">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">
            <div class="row justify-content-between">
                <div class="col-lg-6" style="margin-top:190px">
                    <div class="row">
                    <?php
                    $x = 1;
                    while($x <= 6) : ?>
                            <div class="col-lg-6">
                                <div class="row justify-content-between mb-5">
<div class="col-lg-4 mx-auto">
<img src="assets/img/DemokreatifPortrait1-150x150-1.jpg" class="rounded-circle mb-3 mx-auto d-block" alt="...">
</div>
                                <div class="col-lg-6 mx-auto text-center text-lg-start">
                                    <h4>Hari Prasetyo</h4>
                                    <span class="team-position">Founder/Creative Director</span>
                                    <a class="btn btn-outline-light fw-bold mb-5" href="#" role="button">More Details</a>
                                </div>
                            </div>
                            </div>
                            <?php 
                    $x++;
                endwhile; ?>

</div>
                   
                </div>
                <div class="col-lg-4" style="color:#000;margin-top:260px">
                    <div class="p-0">

                        <h1 class="fw-bold mb-0 text-white" style="font-size:150px; "><span class="p-2"style="background-color:#cccccc;">THE</span><br>
                            <span class="p-2"style="background-color:#cccccc;">TEAM</span>
                        </h1>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="position-relative" style="background-color:#fff; padding-top:200px;padding-bottom:200px; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/5@2x.png" width="500px" height="3080" alt="" style="filter:invert(1);">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">

        <h1 class="fw-bold" style="font-size:160px;">BRKNGNEWS</h1>
            <div class="row justify-content-between">
            <div class="col-lg-7" style="margin-top:50px">
                <?php
                    $x = 1;
                    while($x <= 3) : ?>
                        <div class="row">
                        <div class="col-lg-6 p-4">
                        <div class="entry-body">
                            <div class="entry-header">
                                <h2 class="entry-title-news">
                                    <a href="#" rel="bookmark">First Day of Sales</a></h2></div>
                                    <div class="entry-meta-news"> <span class="meta-date"><a href="#">
                                        <!-- <time class="entry-date published" datetime="2017-08-16T07:15:56+00:00">August 16, 2017</time> -->
                                        <time class="updated" datetime="2018-06-08T10:51:38+00:00">June 8, 2018</time></a></span>
                                    </div>
                                    <div class="entry-content-news">
                                        <p>It’s when students go back to school and employees say goodbye to summer Fridays. On the bright side, though, it’s also when a lot of stores run big end-of-season sales.…</p></div><div class="entry-aux"> <a class="readmore-button" href="#">[ Read more ]</a></div></div>
                        </div>
                        <div class="col-lg-6 p-4">
                        <div class="post-media-news post-thumb  rounded-left  border-right-0">

<img src="assets/img/hp4-slider3-1170x770-1.png" class="alignleft w-100 img-fluid wp-post-image" alt="">
</div>
                        </div>
                        </div>
                        <hr>
                        <?php 
                    $x++;
                    endwhile; ?>
                    
                    <a class="btn btn-dark fw-bold mt-5" href="#" role="button">More Details</a>
                </div>
                    
                
            </div>
        </div>
    </div>

    <div class="welcome position-relative" style="padding-top:120px;background-color:#cccccc; z-index:999;overflow:hidden;">
        <div class="position-absolute logo-strip" style="z-index: 999;top:0;right: 200px;">
            <img src="assets/img/5@2x.png" width="500px" height="1080" alt="">
        </div>
        <div class="container-ar position-relative" style="z-index: 9999;">
        <h1 class="fw-bold mb-5" style="font-size:200px; letter-spacing: 1px; word-spacing: 10px;line-height: 0.8;">CONNECT
            <br />
            WITH
            <br />
US</h1>

<div class="row mt-5">
    <div class="col-lg-3">
<div class="card bg-dark p-5 mb-4">tes</div>
</div>
<div class="col-lg-3">
        <div class="card bg-dark p-5 mb-4">tes</div>
    </div>
</div>
            
    </div>
    <!-- <img src="assets/img/Page-Root.png" alt="" style="height:auto"> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>