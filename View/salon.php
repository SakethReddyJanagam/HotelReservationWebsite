<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    include('header.php');
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ?>

    <style>
    	header.masthead {
		  background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    </style>
<head>
<meta charset="utf-8">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap1.min.css" rel="stylesheet">

    <!-- External Stylesheet -->
    <link href="css/style1.css" rel="stylesheet">
</head>
<body>


        <!-- Navbar  -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i class="fas fa-hotel"></i>Sahithi Saisree</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=list">Rooms</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=about">About</a></li>
				<a href="service.php" class="nav-item nav-link">Service</a>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Enjoy Your<br>Holidays</h1>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="" style="height:200px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Salon -->
		
		<div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Services</h5>
                    <h1 class="mb-5">Beauty of Life</h1>
                </div>
				
				
 <div class="wrapper1">
    <div class="product-img">
      <img src="img/Facial.jpg" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Facial Care</h1>
        <h2>Skin Type: Dry, Oily, Sensitive</h2>
        <p>Basic morning routine Cleanser. Use it to<br>  remove grime and residue that’s built up overnight. </p>
      </div>
      <div class="product-price-btn">
        <p><span>35</span>$</p>
        <button type="button">Buy This Package</button>
      </div>
    </div>
  </div>
		
		<div class="wrapper1">
    <div class="product-img">
      <img src="img/hair.jpg" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Woman's Haircut </h1>
        <h2>Type: Smullet, Long Pixie,Tapered Layers</h2>
        <p>Add some life to limp hair by cutting gradual <br>layers that create movement and body. </p>
      </div>
      <div class="product-price-btn">
        <p><span>70</span>$</p>
        <button type="button">Buy This Package</button>
      </div>
    </div>
  </div>
  
  <div class="wrapper1">
    <div class="product-img">
      <img src="img/spa.jpg" height="420" width="327">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1>Medi-SPA & Massage</h1>
        <h2>Type: Swedish, Sports,Reflexology </h2>
        <p>A sports massage is, as you’d expect, great for athletes or anyone with a physically demanding lifestyle.</p>
      </div>
      <div class="product-price-btn">
        <p><span>50</span>$</p>
        <button type="button">Buy This Package</button>
      </div>
    </div>
  </div>

	<!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
            
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contact</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>1480 US Highway 46 west,  apt 367-B Parsippany, NJ, 07054.</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 651 4758</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>AMShotel@gmail.com</p>
                        
                    </div>
                     <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-3" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-7 position-absolute top-15 end-0 mt-2 me-2" style="max-width: 120px;">SignUp</button>

                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
					 <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Social media</h4>
                       <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="index.php">Sahithi Saisree</a>, All Right Reserved. 
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
  
        

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    
	
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

    <?php $conn->close() ?>

</html>
