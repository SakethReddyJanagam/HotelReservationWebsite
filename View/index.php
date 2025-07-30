
    <?php
    session_start();
    include('admin/db_connect.php');

	$query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach ($query as $key => $value) {
		if(!is_numeric($key))
			$_SESSION['setting_'.$key] = $value;
	}
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('header.php');?>
  </head>
    <style>
    	header.masthead {
		  background: url(assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
		  background-repeat: no-repeat;
		  background-size: cover;
		}
    .navbar-nav a:hover{
      color: red !important;
    }
    </style>
    <body id="page-top">
        <!-- Navigation-->
        
        <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-body text-white">
        </div>
      </div>
     
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style= "background-image: url('imagesW/carousel/homeform.jpg'); background-size: cover; background-position: center;background-repeat: no-repeat; color: black;">
            <div class="container">
                <div>
                <img style=" width:50px; height :50px; display: inline;margin-right:10px;" src="assets/img/logom.png" alt="Description of the image" />
                <a class="navbar-brand js-scroll-trigger" style="color:black" href="user.html"><?php echo $_SESSION['setting_hotel_name'] ?></a>
                </div>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=home" style="color:black" >Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=list" style="color:black">Rooms</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=IndoorOutdoor" style="color:black">Indoor/Outdoor</a></li>
			                  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=dining" style="color:black">Dining</a></li>
			                	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=reservations" style="color:black">Reservations</a></li>
                    </ul>
                </div>
            </div>
        </nav>
       
        <?php 
        $page = isset($_GET['page']) ?$_GET['page'] : "home";
        include $page.'.php';
        ?>
       

<div class="modal fade" id="confirm_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='confirm' onclick="">Continue</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal" role='dialog'>
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id='submit' onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <section id="locate">
  <h1 id ="filter-book" style="text-align:center; font-size:65px; color: white;background-color: #f8f4ea" style="padding-bottom: 10px;margin-bottom: 0;">LOCATION</h1>
  <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3" >
		<div style ="margin-top: 0px;" id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
        var setting = {"query":"Duncan Avenue, Jersey City, NJ, USA","width":1920,"height":706,"satellite":false,"zoom":12,"placeId":"EiBEdW5jYW4gQXZlLCBKZXJzZXkgQ2l0eSwgTkosIFVTQSIuKiwKFAoSCbV5x0grUcKJETCSObFOmmpzEhQKEgndr78l0lDCiRHZJc2iE_BJAg","cid":"0x736a9a4eb1399230","coords":[40.7289488,-74.0816566],"lang":"us","queryString":"Duncan Avenue, Jersey City, NJ, USA","centerCoord":[40.7289488,-74.0816566],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1080690"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=1080690';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
      })();</script><a href="https://1map.com/us/map-embed">1 Map</a></div>
      </section>
  <footer id ="filter-book" style="background-color: #343a40;; padding: 20px 0;">
    <div style="text-align: center; color: #000; font-size: 30px; background-color: #343a40;">CONTACT US</div>
    <div style="background-color: #343a40; color: #333; padding: 20px; border-radius: 20px; margin-top: 30px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px; color: #000;">Social Media</h4>
                <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-bottom: 40px;">
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #fff; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; margin-bottom: 20px;"> <i class="fab fa-twitter"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #fff; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; margin-bottom: 20px;"> <i class="fab fa-facebook-f"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #FF0000; background-color: #fff; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; margin-bottom: 20px;"> <i class="fab fa-youtube"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #fff; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; font-size: 30px; margin-bottom: 20px;"> <i class="fab fa-linkedin-in"></i> </a>
                </div>
            </div>
            <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                <div style="flex: 0 0 calc(50% - 20px); margin-bottom: 20px; color: #000;">
                    <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px; text-align: center;">Contact</h4>
                    <a href="index.php#locate" style="text-decoration: none; color: #000; display: block; margin-bottom: 20px; text-align: center;"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i> Duncan Avenue, Jersey City, NJ, 07304, US</a>
                    <p style="margin-bottom: 20px; text-align: center;"><i class="fas fa-phone-alt" style="margin-right: 10px;"></i>+012 651 4758</p>
                </div> 
                <div  style="flex: 0 0 calc(50% - 20px); margin-bottom: 20px; color: #000;">
                    <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px; text-align: center;">Newsletter</h4>
                    <form style="text-align: center;">
                        <div  style="display: inline-block; margin-bottom: 20px;">
                            <input type="email" style="width: calc(70% - 10px); background-color: #fff; padding: 10px; border-radius: 50px; border: none; padding-left: 30px; display: inline-block; border: 2px solid white" placeholder="Your email">
                            <button class="social" style="background-color: #000; color: #fff; border: 2px solid #25303E; padding: 10px 20px; border-radius: 50px; cursor: pointer; transition: box-shadow 0.3s; display: inline-block;">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="text-align: center; margin-top: 30px; color: #666; font-size: 14px;">&copy; <a href="#" style="color: #666; text-decoration: none;">AMS</a>, All Right Reserved.</div>
        </div>
    </div>
</footer>



<style> 
#filter-book{
      /* Set background image */
      background-image: url('imagesW/carousel/homeform.jpg') !important; /* Replace 'background-image.jpg' with the path to your image */
      /* Adjust background properties */
      background-size: cover; /* Adjusts the size of the background image to cover the entire body */
      background-position: center; /* Centers the background image */
      background-repeat: no-repeat; /* Prevents the background image from repeating */
    }
   footer{
    letter-spacing: 2px !important;

   }

  
    .social:hover {
transform: scale(0.90);
    }
</style>



       <?php include('footer.php') ?>
    </body>

    <?php $conn->close() ?>

</html>
