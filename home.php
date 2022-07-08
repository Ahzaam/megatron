 <?php
session_start();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <title>MegaTrons</title>
    <link rel="stylesheet" href="home/nav_style.css">
    <link rel="stylesheet" href="home/style.css">
    <!-- <link rel="stylesheet" href="baby-corner/body.css"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="files/icon_css/all.css">
    <script defer src="files/icon_js/all.js"></script>


    <!--owl carousel -->

    <script src="files/owl-carousel/jquery-3.6.0.js"></script>
    <script src="files/owl-carousel/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="files/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="files/owl-carousel/carousel.css">


    <!-- Bootsrap -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="files/css/bootstrap.css">
    <script type="text/javascript" src="files/js/bootstrap.bundle.js"></script>


    <!--Grid  -->
    <link rel="stylesheet" href="files/grid/grid.css">




    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->



    <style media="screen">
      .container-add{
        background-image: url(bg-images/tree.jpg) ;
        background-repeat:no-repeat;
        width: 100%;

      }
      .dropdown{border-radius:5px;width:180px;}
      .dropdown:hover .dropdown-menu{
        display:block;
      }
      .dropdown-menu{
        text-align:center;

      }
      img[type='profile']{
        height:100%;
        width:100%;
        margin-bottom: 20px;

      }


    </style>
  </head>
<body>

    <?php
      if(!isset($_SESSION['visit'])){

        ?>
        <script type="text/javascript">
          alert('Note that these website is done for Education Purpose.\nMost of the images are not own by us');
        </script>
        <?php
        $_SESSION['visit'] = true;
    }


     ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="">

  <div class="container-fluid">

    <a href="#" >
      <img src="bg-images/logo.png" style="" type="logo" alt=""><span class="logo-txt d-none d-lg-inline-block d-md-inline-block" style="color:#00e0ff; margin-left:20px;">Mega</span>
      <span class="logo-txt d-none d-lg-inline-block d-md-inline-block" style="color:#ff00e6;">Trons</span>
     </a>


    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" style="" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ms-5">
          <a class="nav-link activenavp" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item activenav ms-5" >
          <a class="nav-link " href="baby-corner">Baby Conner
          </a>
        </li>


        <li class="nav-item dropdown activenav ms-5">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Drop Down
          </a>
          <ul class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" style="color:blue;"href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>

        <li class="nav-item activenav ms-5">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <a href="login/login.php?page=../home.php"><button class="btn btn-outline-success btn-lg ms-5 "  style="<?php echo ($_SESSION['login'])?'display:none;':''; ?> width:180px;" type="submit">Login</button></a>

        <?php
        if($_SESSION['login']){

          ?>

                  <li class="nav-item dropdown ms-5" style="border:4px solid #75ffea ; text-align:center;">
                    <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" style='color:#ff00e6;font-size:24px;  '>
                      <?php echo ucfirst($_SESSION['uname']) ?>
                    </a>
                    <ul class="dropdown-menu " style="background-color:rgba(255, 245, 255, 0.9);" aria-labelledby="navbarDropdownMenuLink">
                      <!--  -->

                      <?php

                          $arr = str_split($_SESSION['uname']);
                          ?>

                            <li style="background-color:rgba(5, 255, 0, 0.6);margin:auto; width: 80px;height:80px;padding-top:12px; border-radius:40px; text-align:center;margin-bottom: 20px;"> <a href="profile"><h1><?php echo strtoupper($arr[0]) ;?></h1></a></li>
                          <?php

                       ?>

                      <li><a class="dropdown-item" style="color:black; font-size:12px;"href="http://gmail.com?email=<?php echo  $_SESSION['email'];?>"><?php echo $_SESSION['email'] ?></a></li>
                      <li><a class="dropdown-item" style="color:red;"href="login/logout.php?page=../home.php">Logout</a></li>

                    </ul>
                  </li>


          <?php
        }
         ?>



       </ul>
       <br><br><br>

       <br><br>
       </div>

  </div>
</nav>
<!-- End of the Navbar -->

<div class="container-fluid d-xl-flex justify-content-center ">
  <div id="carouselExampleIndicators" class="carousel slide w-100" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="bg-images/banner-mq1.jpg" type="sldimg" class="d-block "  alt="...">
          <div class="centered text-white text-start">
            <h2 class="slide-heading" style="color: var(--DTColor_Heading);
               color:#ffffff; font-size: 60px;">Collection of Toys <br>From movies</h2>
            <p class="lead" style="color:rgba(#949494, 0.1); background-color: rgba(#006ca8, 0.61); font-size:30px;">Realastic Toy Car Models</p>
          </div>
      </div>


      <div class="carousel-item" style="">
        <img src="bg-images/construction.jpg" class="d-block"  alt="...">
        <div class="centered  text-start" style="background-color:rgba(255, 247, 60, 0.61);">
          <h5 class="display-3 text-dark" >All Kind of Heavy Vechicles</h5>
          <p class="lead">Buldozer -- Front Loader -- Excavator</p>
        </div>
      </div>

      <div class="carousel-item" style="">
        <img src="bg-images/baby.jpg" class="d-block"  alt="...">
        <div class="centered  text-start">
          <h5 class="display-3 " style="color:#626262; " >All Toy and <br>accessories <br>for Babies  </h5>
          <p class="lead"><span style="font-size:30px; color:#ee30f2;">30%</span> off for shopping over 5000LKR</p>
          <a href="baby-corner/baby.php"><button type="button-baby-corner" name="button">Visit</button></a>
        </div>
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
</div>

<!-- End of the Slide -->

<div class="container-fluid mt-5" style="text-align:center;" style="max-width:2000px;">
    <div class="col-lg-3 col-md-12 mx-lg-5 mx-md-1 d-inline-block position-relative mt-5">
      <div class="option d-inline-block">
        <img src="bg-images/free shipping.jpg" class="w-100" alt="No feature">
      </div>
    </div>


    <div class="col-lg-3  col-md-12 mx-lg-5 mx-md-1 d-inline-block position-relative  mt-5">
      <div class="option d-inline-block ">
        <img src="bg-images/replacement.jpg" class="w-100" alt="No feature">
      </div>
    </div>


    <div class="col-lg-3  col-md-12 mx-lg-5 mx-md-1 d-inline-block position-relative   mt-5 ">
      <div class="option d-inline-block">
        <img src="bg-images/easy-return.jpg" class="w-100" alt="No feature">
    </div>
  </div>
</div>

<!-- End of the feature -->

<!-- Start of the parallax -->
  <div class="margin d-flex mt-5" style="align-items:center;">
    <section class="parallax w-100" style="background: url('bg-images/sldimg1.jpg')no-repeat fixed 100%;">
      <div class="parallax-inner text-center">
        <br><br><br>
        <h1 class="display-3 text-muted">Buy all baby Accesorien in one place</h1>
        <br><br><br>
        <a href="baby-corner/baby.php"><button style="background-color:#00c9c3;" type="button-baby-corner" name="button">Visit</button></a>
      </div>
    </section>
  </div>
<br><br><br><br><br>
<!-- End of the parallax -->

<div class="container-fluid px-lg-5 ">
  <div class="px-3" style="border-left:2px solid yellow;">
    <p class="lead">Construction Equipment Collection</p>
  </div>
</div>
<br>
    <div class="container d-xl-flex  justify-content-center"  >
      <div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner ">
          <div class="carousel-item active " style="text-align:center;">
            <img src="Home/products/background-cons.jpg" type="sldimg" class="d-block"  alt="...">
            <div class="bannercen text-dark mt-5" style="background-color:rgba(249, 241, 62, 0.29);">
              <h1 class="display-2 text-white mt-5"> FEEL YOUR FUTURE TODAY</h1>
              <p class="lead" style="color:#ffd600;">All The Contstruction Vechicle Toys</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- </div> -->
<!-- Start of the Owl Carousel -->

<section class="container-fluid mt-5 px-lg-5" >
  <div class="container-fluid text-center py-5 " style="border-bottom:2px solid yellow;"
    <div class="row pt-3">
      <div class="owl-carousel owl-theme ">


    <?php
      include 'con.php';
        $query = "SELECT * FROM home WHERE type = 'owl-carousel'";
        $result = $conn->query($query);
        $pass = "";
        if ($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            $path = $row['image'];
            ?>
            <div class="item ">
             <div class="card border-0">
               <img src="<?php echo $path ?>" alt="<?php echo $path?>" style="max-width:" class="card-img-top">

               <div class="card-body">
                <div class="owl-details">
                   <p><?php echo $row['name']; ?> <br><?php echo $row['model']; ?></p>
                </div>
                <div class="owl-price">
                   <?php echo $row['price']; ?><span style='font-size:10px;'>LKR</span> <del><?php $dis = $row['discount']; echo ($row['discount'])== "0"? "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp": $dis."LKR" ; ?></del>
                </div>
                <a href="home/view.php?id=<?php echo $row['item-id']?>" style="padding:0 40px;  " id="c<?php echo $row['item-id'] ?>"  data-tip="Wishlist" class="cancel btn btn-info btn-block text-white w-100 "><i class="fa fa-search"></i> View  </a>
               </div>
             </div>
           </div>
            <?php
          }
          echo $pass;
      } else {
        echo "0 results";

      }
      $conn->close();

   ?>


      </div>
    </div>
  </div>
</section>

<br><br><br><br>

<br><div class="container-fluid px-lg-5" >
  <div class="px-3" style="border-left:2px solid red;">
    <p class="lead">Disney Cars </p>
  </div>
</div>
<!-- Vodeo -->
<div class="container-fluid mt-5 px-lg-5 text-center">

  <div class="container-fluid position-relative bg-dark" style="min-height:500px; max-width:1650px;">

    <section class="video-ani">
     <video autoplay loop class="video-back d-none d-lg-inline-block" plays-inline muted >
       <source src="bg-images/animation.mp4" type="video/mp4">
     </video>
     <div class="cover-ani position-absolute">
       <div class="msg px-lg-5 mt-5 text-start">
         <!-- <h1 class="display-1  " style="color:red;">WelCome</h1> -->
         <h1 class="display-3 text-white ">Explore the collection <br> of toy cars </h1>
         <p class="display-3 text-white"><span class="display-2" style="color:#24ff00;">20%</span> OFF</p>
         <img src="bg-images/cars.png" width="100px" class="ml-5" alt="">
         <img src="bg-images/disney.png" width="100px" class="ml-5" alt="">
       </div>
     </div>

    </section>
  </div>


<!-- Grid -->
  <div class="container my-5 py-5" style="border-bottom:2px solid red;">
      <div class="row">
        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="home/cars/mqqueen1.jpeg">
                        <img class="pic-2" src="home/cars/mqqueen2.jpeg">
                    </a>
                    <span class="product-trend-label">Trending</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <!-- <li><a href="#" data-tip="Quick View"><i class="fa fa-ca"></i></a></li> -->
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                    <h3 class="title"><a href="#">MQ Quuen</a></h3>
                    <div class="price discount"><span>400LKR</span> 320LKR</div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="home/cars/blue1.webp">
                        <img class="pic-2" src="home/cars/blue2.webp">
                    </a>
                    <!-- <span class="product-trend-label">Trend</span> -->
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a id="123" data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a id="w123" class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                    <h3 class="title"><a href="#">Blue Mustang</a></h3>
                    <div class="price discount"><span>300LKR</span> 240LKR</div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mt-5">
          <div class="product-grid shadow rounded">
              <div class="product-image">
                  <a href="#">
                    <img class="pic-1" src="home/cars/blue21.webp">
                    <img class="pic-2" src="home/cars/blue22.webp">
                  </a>
                  <!-- <span class="product-trend-label">Trend</span> -->
                  <span class="product-discount-label">-20%</span>
                  <ul class="social">
                      <li><a id="768" data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                      <li id=><a id="w768" class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                      <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                      <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                  </ul>
              </div>

              <div class="product-content px-3">
                <h3 class="title"><a href="#">Blue Supra</a></h3>
                <div class="price discount"><span>300LKR</span> 240LKR</div>
              </div>
            </div>
          </div>

        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                      <img class="pic-1" src="home/cars/yellow1.webp">
                      <img class="pic-2" src="home/cars/yellow2.jpg">
                    </a>
                    <!-- <span class="product-trend-label">Trend</span> -->
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a id="231" data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                  <h3 class="title"><a href="#">OFF Road</a></h3>
                  <div class="price discount"><span>350LKR</span> 280LKR</div>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                      <img class="pic-1" src="home/cars/black1.webp">
                      <img class="pic-2" src="home/cars/black2.webp">
                    </a>
                    <!-- <span class="product-trend-label">Trend</span> -->
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                  <h3 class="title"><a href="#">OFF Road</a></h3>
                  <div class="price discount"><span>350LKR</span> 280LKR</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                      <img class="pic-1" src="home/cars/lorry1.jpeg">
                      <img class="pic-2" src="home/cars/lorry2.jpeg">
                    </a>
                    <span class="product-trend-label">Trending</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                  <h3 class="title"><a href="#">Container</a></h3>
                  <div class="price discount"><span>700LKR</span> 560LKR</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                      <img class="pic-1" src="home/cars/black-b1.jpeg">
                      <img class="pic-2" src="home/cars/black-b2.jpeg">
                    </a>
                    <span class="product-trend-label">Trending</span>
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                  <h3 class="title"><a href="#">Black GTR</a></h3>
                  <div class="price discount"><span>400LKR</span> 320LKR</div>
                </div>
            </div>
        </div>


        <div class="col-md-3 col-sm-6 mt-5">
            <div class="product-grid shadow rounded">
                <div class="product-image">
                    <a href="#">
                      <img class="pic-1" src="home/cars/white1.jpeg">
                      <img class="pic-2" src="home/cars/white2.jpeg">
                    </a>
                    <!-- <span class="product-trend-label">Trend</span> -->
                    <span class="product-discount-label">-20%</span>
                    <ul class="social">
                        <li><a data-tip="Add to Cart" class="add-cart"><i class="fa fa-shopping-cart"></i></a></li>
                        <li><a class="wish" data-tip="Wishlist"><i class="fa fa-heart"></i></a></li>
                        <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                        <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
                <div class="product-content px-3">
                  <h3 class="title"><a href="#">Rols Royce</a></h3>
                  <div class="price discount"><span>350LKR</span> 280LKR</div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>



<div class="container d-xl-flex justify-content-center my-5 mt-5"  >
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active" style="text-align:center;">
        <img src="bg-images/banner4.jpg" type="sldimg" class="d-block w-auto"  alt="...">
        <div class="bannercen text-dark">
          <h1 class="display-4 fw-bold"> Enjoy daily deals</h1>
          Subscribe For News Letters
          <form class="d-flex my-3x col-sm-12 border py-1 px-1">
            <input class="form-control me-2 border-0 bg-transparent" type="email" value="<?php echo $_SESSION['email'];?>"  aria-label="Search" placeholder="">
            <button class="btn btn-light" type="false">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End of Grid -->

<div class="container-fluid text-dark" style="background-image:url('bg-images/pattern-dot.png');background-color:#00eebc;">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-3 col-sm-11 col-md-5">
        <h1 class="display-6">Our Mission</h1>
        <p class="lead">
          Our mission is to help nurture our future leaders, inventors and creative thinkers.
          We inspire the next generation to lead meaningful, happy and productive lives.
          We encourage all families to laugh,
          grow and play together because we know that making the world a better place for our children is the greatest legacy we can leave. </p>
      </div>
      <div class="col-lg-3 col-sm-11 col-md-5">
        <h1 class="display-6">Our Mission</h1>
        <p class="lead">
          Our mission is to help nurture our future leaders, inventors and creative thinkers.
          We inspire the next generation to lead meaningful, happy and productive lives.
          We encourage all families to laugh,
          grow and play together because we know that making the world a better place for our children is the greatest legacy we can leave. </p>
      </div>
      <div class="col-lg-3 col-sm-11 col-md-5">
        <h1 class="display-6">Our Mission</h1>
        <p class="lead">
          Our mission is to help nurture our future leaders, inventors and creative thinkers.
          We inspire the next generation to lead meaningful, happy and productive lives.
          We encourage all families to laugh,
          grow and play together because we know that making the world a better place for our children is the greatest legacy we can leave. </p>
      </div>
      <div class="col-lg-3 col-sm-11 col-md-5">
        <p><i class="fas fa-map-marker " style="color:red;font-size:16px;"></i>&nbsp&nbsp&nbsp218 Fifth Avenue, HeavenTower NewYork City </p>
        <p><i class="fas fa-phone" style="color:red;"></i>&nbsp&nbsp&nbsp(+68) 123 456 7890</p>
        <!-- <p><span style="color:red;">Email:&nbsp&nbsp&nbsp</span>Hot-Support@Dagon.com</p> -->
        <p><i class="fas fa-envelope" style="color:red;"></i>&nbsp&nbsp&nbspHot-Support@Dagon.com</p>
      </div>
    </div>
  </div>
</div>

<script>
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  autoplay: true,
  autoplayTimeout:1500,
  autoplayHoverPause:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:6
      }
  }
});
</script>
<script type="text/javascript" src="files/addtocart.js"></script>
  </body>
</html>
<!--

 -->
