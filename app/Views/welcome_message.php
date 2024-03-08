
<!-- http://localhost:8080/index.php/login -->
<!-- 
https://demo.templatemonster.com/demo/68393.html?aff=colorlib -->
<!doctype html>
<html lang="en">
  <head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Car Rental</title>


  </head>
  <style>
    .navbar{
      background-color:black;
      height:90px;
      
    }
    .nav-item .nav-link{
      color: aliceblue;
      font-size:20px;
      margin-left:35px;
    }
    .navbar .navbar-brand{
      color: #fff;
      font-family: "Josefin Sans", sans-serif;
      font-weight: 400;
      font-style: normal;
      font-size:40px;
      margin-left:150px;

     }
     .carousel-inner .pic{
    
      margin-top:-450px;
      margin-left:-100vh;
      
     }
    .carousel-inner .pic h1{
      font-size: 90px;
      font-family: "Josefin Sans", sans-serif;
      line-height:90px
     
    }
    .carousel-inner .pic p{
     margin-top:30px;
      font-size: 20px;
  
    }
    .carousel-inner .pic button{
     margin-top:40px;
     padding:8px 20px 8px 20px;
     border-radius:50px;
    }
   

  </style>
  <body>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg">
    <div class="container">

            <a class="navbar-brand" href="#">Bhurr</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Home
          </a>
          <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Beauty salon</a></li>
            <li><a class="dropdown-item" href="#a">Hair salon</a></li>
            <li><a class="dropdown-item" href="#b">Nail salon</a></li>
            <li><a class="dropdown-item" href="#c">Waxing salon</a></li>
            <li><a class="dropdown-item" href="#d">Tatto salon</a></li>
          </ul> -->
        </li>

          <li class="nav-item">
            <a class="nav-link" href="about">About</a>
           </li>

        <li class="nav-item">
            <a class="nav-link" href="service">service</a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="about">pricing</a>
        </li> -->

          <li class="nav-item">
            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contact</a>
          </li>
        </ul>

        <form class="d-flex">
           <a style="padding:8px 25px 8px 25px;"class="btn btn-outline-light" href="/login" type="submit">login</a>
          </form>
          
      </div>
    </div>
  </nav>
      <!-- navbar end -->

   <!-- carousal -->
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    </div>


<div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://img.freepik.com/premium-photo/front-view-generic-brandless-moder-car_110488-502.jpg" height="680vh" width="100%">
        <div class="carousel-caption d-none d-md-block">
          <div class="pic">
            <h1>Car Rental</h1>
            <p>this is the system of car rental.
            </p>
            <button class="btn btn-outline-light" type="submit">Book now</button>
          </div>
        
        </div>
      </div>
    </div>
 </div>
   <!-- carousal end -->


  <!-- middle part -->
  
<!-- contact form -->
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-2 display-5 text-center">Contact us</h2>
        <p class="text-secondary mb-5 text-center">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et neque id ligula mattis commodo.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">

          <form action="#!">
            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              <div class="col-12">
                <label for="fullname" class="form-label">Full Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="" required>
              </div>
              <div class="col-12 col-md-6">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                      <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                    </svg>
                  </span>
                  <input type="email" class="form-control" id="email" name="email" value="" required>
                </div>
              </div>
              <div class="col-12 col-md-6">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="input-group">
                  <span class="input-group-text">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                      <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                    </svg>
                  </span>
                  <input type="tel" class="form-control" id="phone" name="phone" value="">
                </div>
              </div>
              <div class="col-12">

<label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
              </div>
              <div class="col-12">
                <div class="d-grid">
                  <button style="background-color:grey;border:rgb(238,159,159);color:white" class="btn btn-primary btn-lg" type="submit">Submit</button>
                </div>
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- contact form end -->
 
   <!-- footer -->
   <section class="">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: grey;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="">
        <p class="d-flex justify-content-center align-items-center">
          <span class="me-3">Register for free</span>
          <button style="color:white;" data-mdb-ripple-init type="button" class="btn btn-outline-dark btn-rounded">
            Sign up!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: black;">
      © 2020 Copyright:
      <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
   <!-- footer end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>