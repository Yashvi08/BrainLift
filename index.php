<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrainLift</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Include Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>

<link rel="stylesheet" href="./css/style.css">
    
<style>

</style>
</head>
<body>

  <!-- start navbar -->
<?php
include("./courses/header.php");
?>
  <!-- end navbar -->

  <!-- start background video -->

    <div class="container-fluid remove-vid-marg">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="./videos/bgvid2.mp4">
        </video>
        <div class="overlay">
          
        </div>
      </div>
      <div class="vid-content">
        <h1 class="my-content">Welcome to BrainLift</h1>
        <small class="my-contentsm">Empowering CSE Minds, One Resource at a Time.</small>
        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Get Started</a>
        
      </div>
    </div>
<!-- end background video -->

<!-- start text banner -->
  <div class="container-fluid bg-danger txt-banner">
    <div class="row bottom-banner">

      <div class="col-sm">
        <h5><i class="fas fa-book-open" style="margin-right: 1rem;"></i>100+ Online Courses</h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-users" style="margin-right: 1rem;"></i>Expert Instructions</h5>
      </div>

      <div class="col-sm">
        <h5><i class="fas fa-keyboard" style="margin-right: 1rem;"></i>Lifetime Access</h5>
      </div>

      <div class="col-sm">
        <h5><i class="fa-solid fa-indian-rupee-sign" style="margin-right: 1rem;"></i>Moneyback guuarantee*</h5>
      </div>

    </div>

  </div>
<!-- end text banner -->

<!-- start most popular courses -->
<?php
include("mostpopcourse.php");
?>
<!-- end  most popular courses -->

<!-- start contact us -->
 <?php
 include("contact.php")
 ?>
<!-- end contact us -->

<!-- Start Feedback-->
 <?php
include("feedback.php")
?>
<!-- end Feedback-->
<!-- start social follow-->
 <?php
 include("social.php")
 ?>
<!-- end social follow-->

<!-- start footer section-->
<?php
 include './courses/footer.php'
 ?>
 <!-- end footer section-->

<!-- start student redistration model-->
 <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color:rgb(96, 92, 92); border:3px solid white;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register here</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- start of registration form -->
<form class="login-form" action="javascript:void(0);">
  <div class="form-input-material">
  <i class="fa-regular fa-circle-user"></i>
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username" placeholder="Enter username here " autocomplete="off" class="form-control-material" required />
  </div>

  <div class="form-input-material">
  <i class="fa-regular fa-envelope"></i>
    <label for="email">Email:</label><br>
    <input type="email" name="email" id="email" placeholder="Enter Email" autocomplete="off" class="form-control-material" required />
  </div>

  <div class="form-input-material">
  <i class="fa-solid fa-lock"></i>
  <label for="password">Password:</label><br>
    <input type="password" name="password" id="password" placeholder="Choose password" autocomplete="off" class="form-control-material" required />
    
  </div>
</form>
<!-- end of registration form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Register Now!</button>
      </div>
    </div>
  </div>
</div>
 <!-- ends student registration model-->

 <!-- start of login model -->
 <div class="modal fade" id="LoginModal" tabindex="-1" aria-labelledby="LoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color:rgb(96, 92, 92); border:3px solid white;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="LoginModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- start of login form -->
<form class="login-forms" action="javascript:void(0);">

  <div class="form-input-materials">
  <i class="fa-regular fa-envelope"></i>
    <label for="logemail">Email:</label><br>
    <input type="email" name="logemail" id="logemail" placeholder="Enter Email" autocomplete="off" class="form-control-materials" required />
  </div>

  <div class="form-input-materials">
  <i class="fa-solid fa-lock"></i>
  <label for="logpassword">Password:</label><br>
    <input type="password" name="logpassword" id="logpassword" placeholder="Choose password" autocomplete="off" class="form-control-materials" required />
    
  </div>
</form>
<!-- end of LOGIN form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>
 <!-- ends student login model-->

  <!-- START student ADMINlogin model-->
 <div class="modal fade" id="admLoginModal" tabindex="-1" aria-labelledby="admLoginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background-color:rgb(96, 92, 92); border:3px solid white;">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="admLoginModalLabel" style="color:#000000;
  font-family: 'Times New Roman', Times, serif;
  font-size:xx-large;
  font-weight: bold;
  padding-left: 180px;">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- start of admlogin form -->
<form class="login-forms" action="javascript:void(0);">

  <div class="form-input-materials">
  <i class="fa-regular fa-envelope"></i>
    <label for="admlogemail">Email:</label><br>
    <input type="email" name="admlogemail" id="admlogemail" placeholder="Enter Email" autocomplete="off" class="form-control-materials" required />
  </div>

  <div class="form-input-materials">
  <i class="fa-solid fa-lock"></i>
  <label for="admlogpassword">Password:</label><br>
    <input type="password" name="admlogpassword" id="admlogpassword" placeholder="Choose password" autocomplete="off" class="form-control-materials" required />
    
  </div>
</form>
<!-- end of admlogin form -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Login</button>
      </div>
    </div>
  </div>
</div>

 <!-- ends admin login model-->

    <script src="./js/jquery.min.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script src="./js/slider.js"></script>
</body>
</html>