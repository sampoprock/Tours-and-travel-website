<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    // header('location: index.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Magical Travel</title>

      
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <link href="fontawesome/css/all.css" rel="stylesheet"> <!--load all styles -->
      
      
      <link rel="stylesheet" type="text/css" href="css/tour-packages.css">
      <link rel="stylesheet" type="text/css" href="css/destination.css">
      <link rel="stylesheet" type="text/css" href="css/testimonial.css">
      <link rel="stylesheet" type="text/css" href="css/header-style.css">
      <link rel="stylesheet" type="text/css" href="css/footer-style.css">

    

      
</head>
<body>

<header>
      <nav>
        <div class="menu-icon">
          <i class="fa fa-bars fa-2x"></i>
        </div>

        <div class="logo">
          Magical Travel
        </div>

                  <div class="menu">
                        <ul>
                              <li><a href="index.html">Home</a></li>
                              <li><a href="#gallery">Tour Packages</a></li>
                              <li><a href="#findus">Contact</a></li>
                              <li><div class="content1">
                                <?php  if (isset($_SESSION['username'])) : ?>
                                  <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></div></li>
                                  <li><p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                                <?php endif ?>
                              </li>
                              <li>
                                <?php  if (!isset($_SESSION['username'])) : ?>
                                  <a href="login.php" target="_blank"><button type="button" class="btn btn-secondary btn-sm">Log in</button></a></li>
                                 <?php endif ?>
                        </ul>
                  </div>
      </nav>

      <div class="row fullscreen align-items-center justify-content-between" style="width: 100%">
            <div class="col-lg-6 col-md-6 banner-right" id="para">
                <h6>Away from monotonous life</h6>
                <h1>Magical Travel</h1>
                <p>
                    If you want to witness the best travel experience of your life then register with us.
                </p>
                <?php  if (!isset($_SESSION['username'])) : ?>
                <a href="register.php" target="_blank"><button type="button" class="btn btn-success btn-lg" style="margin-bottom: 30px">REGISTER</button></a><br>
                <?php endif ?>
               
            </div>
            <div class="col col-xl-4 col-lg-6 col-md-8 col-sm-8 banner-right" id="my-form">
                <ul class="nav nav-tabs" style="background-color: transparent;border-color: white">
                  <div class="tab-button">
                      <li class="nav-item">
                          <a class="nav-link" onclick="showPanel(0)">Queries</a>
                      </li>
                  </div>
                    
                    
                </ul>
              <div class="tab-content ">
                
                
                <div class="tab-panel">
                  <form>
                    <input type="text" name="name" placeholder="Name " style="margin-top:60px" required><br>
                        <input type="email" name="email" placeholder="Email " required><br>
                        <input type="number" name="contact number" placeholder="Contact Number " required><br>
                        <textarea required></textarea>
                        <button type="submit" class="btn btn-warning" style="margin: 20px; float: right;">Submit Query</button>                              
                    </form>                       
                </div>
              </div>
            </div>
      </div>
</header>


    <div class="row d-flex justify-content-center" style="margin-top: 200px;">
      <div class="menu-content pb-70 col-lg-8">
        <div class="title text-center">
          <h1 class="mb-10">Tour Packages</h1>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
        </div>
      </div>
    </div>

<div class="gallery" id="gallery">

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2" style="margin: 5px;">
     <div class="image-text" style="font-weight: bold;">PILGRIMAGE TOURS<a href="pilgrimage.html"><img class="img-fluid" src="img/55.jpg" alt="Card image cap"></a></div> 
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 1" style="margin: 5px;">
    <div class="image-text" style="font-weight: bold;">HERITAGE TOURS<a href="heritage.html"><img class="img-fluid" src="img/76.jpeg" alt="Card image cap" style="position: relative;bottom: 0px"></a></div>
  </div>

   <div class="mb-3 pics animation all 1" style="margin: 5px;">
    <div class="image-text" style="font-weight: bold;">BEACH TOURS<a href="beachtours.html"><img class="img-fluid" src="https://www.tourmyindia.com/imagesh1/beaches-and-backwaters-tour.jpg" alt="Card image cap"></a></div>
  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  
  <!-- Grid column -->

  <!-- Grid column -->
  
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="mb-3 pics animation all 2">
    <div class="image-text" style="font-weight: bold;">CULTURAL TOURS<a href="cultural.html"><img class="img-fluid" src="img/61.jpg" alt="Card image cap"></a></div>
</div>
   <div class="mb-3 pics animation all 2">
   <div class="image-text" style="font-weight: bold; margin: 5px;">HONEYMOON TOURS<a href="honeymoon.html"><img class="img-fluid" src="img/90.jpg" alt="Card image cap"></a></div>

  </div>

  <a href="packages.html"><button type="button" class="btn btn-dark" style="float: right;margin: 60px;">See more</button></a>
  <!-- Grid column -->
</div>

<!-- Grid row --> 


  

<div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>

        <div class="t-row">
          <div class="t-col">
            <div class="testimonial">
              <img src="img/p1.png" alt="">
              <div class="name">Anand Bhartu, Student</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                First of all a BIG Thank You for making flawless planning, arrangements and execution of the complete trip. The group appreciates the enthusiasm and hospitality
              </p>
            </div>
          </div>

          <div class="t-col">
            <div class="testimonial">
              <img src="img/p2.png" alt="">
              <div class="name">Mohini Yadav, Developer</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                The trip was absolutely first rate.  Our travel planner at this travel company was very easy to work with and the trip he planned let us do everything we asked.  The logistics worked seamlessly which allowed us to concentrate on enjoying ourselves without worrying about the next step
              </p>
            </div>
          </div>

          <div class="t-col">
            <div class="testimonial">
              <img src="img/p3.png" alt="">
              <div class="name">Roshni Paul,Doctor</div>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>

              <p>
                It was our first experience with Magical Travel, and it was awesome. We enjoyed alot. Service was excellent. They helped us in every possible way. Thanks once again for making our tour awesome and memorable.
              </p>
            </div>
          </div>
        </div>
      </div>
     
    </div>


  <div id="footer">
            <div id="upper">
            <div class="search-box">
                <input type="text" name="" placeholder="Search Places" class="input-box">
                <a href="#" style="color: tomato" class="search-button"><i class="fas fa-search"></i></a>
            </div>
               
              <div class="row">
                <div class="col col-md-4 col-12">
                  <div class="quick-link" style="padding-left: 100px;">
                    <h3>Quick link</h3>
                    <ul class="ul-style">
                     <a href="index.html"  style="text-decoration: none; color: inherit;"> <li class="li-style">Home</li></a>
                     
                      
                     
                      
                    </ul>
                  </div>
                </div>
                <div class="col col-md-4 col-12">
                  <div class="quick-link" style="padding-left: 100px;">
                <h3>Quick link</h3>
                <ul class="ul-style">
                  
                  
                  <a href="packages.html"  style="text-decoration: none; color: inherit;"><li class="li-style">Tour packages</li></a>
                  
                  
                </ul>
              </div>
                </div>
                <div class="col col-md-4 col-12" id="findus">
                 <div class="find-us" style="padding-left: 100px">
                <h3>Find us</h3>
                  <p style="width:300px;text-align: justify">78/5, Rashbehari Avenue.</p>
                            
                            <p><i class="fa fa-phone"></i>  +91-9999999999 </p>
                            <p><i class="fa fa fa-envelope"></i> xyz@gmail.com  </p>
                     </div>
                  </div>

                  

              </div>
            </div>
            <div id="lower">
              <div class="row" style="padding-top: 10px;padding-bottom:10px">
                  <div class="col col-xs-12 col-s-12 col-md-12 col-lg-12" align="center">
                      <a href="#" class="social-icon"><i class="fab fa-facebook-f fa-2x"></i></a>
                          <a href="#" class="social-icon"><i class="fab fa-instagram fa-2x"></i></a>
                          <a href="#" class="social-icon"><i class="fab fa-twitter fa-2x"></i></a>
                          <a href="#" class="social-icon"><i class="fab fa-google-plus-g fa-2x"></i></a>
                          <a href="#" class="social-icon"><i class="fa fa-envelope fa-2x"></i></a>
                  </div>
              </div>
              <div class="row">
                    <div class="col col-s-12 col-s-12 col-md-12 col-lg-12" aligvn= "center">
                          
                            <center><p>&copy All right Reserved <a style="color: #eeee" href="https://www.sunlimetech.com" target="_blank">Samanway & Pritam</a></p></center>
                    </div>
              </div>
            </div>
  </div>



      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="js/header-form.js"></script>


      <script type="text/javascript">

      // Menu-toggle button

      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
            }
      })


      </script>
      

</body>
</html>
