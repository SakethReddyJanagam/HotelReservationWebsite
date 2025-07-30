<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.php');?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dining at Your Hotel</title>
<style>
/* Reset CSS */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
    font-family: 'Cinzel', serif;
    font-weight: bold;
}

/* Header */
header {
  background-color: #e6fffd;
  color: #000000;
  padding: 20px 0;
  text-align: center;
}

/* Sections */
.section {
  padding: 50px;
  background-color: #e6fffd;
}
.menu{
    border: 2px solid #FFE2E3;
    padding-top: 100px;
    padding-bottom: 100px;

}

/* Background Image Section */
.background-image {
  background-image: url('DINING.jpg');
  background-size: cover;
  background-position: center;
  height: 600px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: white;
}

/* Menu Section */
.menu-item {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
}
h2{
    text-align: center;
    margin-bottom: 25px;
    letter-spacing: 3px;
}

.menu-card {
  background-color: #FFE2E3;
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  max-width: 300px;
}

.menu-card img {
  width: 100%;
  border-radius: 10px;
}

/* Special Dishes Section */
.special-dishes {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  gap: 20px;
}

.special-dish {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  max-width: 300px;
}

.special-dish img {
  width: 100%;
  border-radius: 10px;
}

/* Dining Events Section */
.dining-events {
  text-align: center;
}

.dining-event {
  margin-bottom: 20px;
}

.dining-event-card {
  background-color: #f9f9f9;
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  max-width: 300px;
}

/* Responsive Styling */
@media only screen and (max-width: 768px) {
  .background-image {
    height: 400px;
  }
}
.logo{
    margin-left: 0;
    padding-left: 0;
    background-color: #e6fffd;
}
.navbar {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.navbar-brand {
    display: flex;
    align-items: center;
}

.logo {
    width: 40px;
    height: auto;
    margin-right: 10px;
}

.navbar-name {
    font-size: 20px;
}

.navbar-menu {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.navbar-menu li {
    margin-right: 20px;
}

.navbar-menu li:last-child {
    margin-right: 0;
}

.navbar-menu li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

.navbar-menu li a:hover {
    color: #ffd700; /* Change to your desired hover color */
}

.navbar-toggle {
    display: none;
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 0;
    margin-right: 10px;
}

.navbar-toggle span {
    display: block;
    width: 25px;
    height: 3px;
    background-color: #fff;
    margin-bottom: 5px;
}

@media (max-width: 768px) {
    .navbar-menu {
        display: none;
        flex-direction: column;
        background-color: #333;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
    }

    .navbar-menu.active {
        display: flex;
    }

    .navbar-menu li {
        margin-right: 0;
        padding: 10px 20px;
        border-bottom: 1px solid #fff;
    }

    .navbar-toggle {
        display: block;
    }
}
.foot{
    font-family: "Merriweather", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    margin: 40px;
}
section{
    margin: 40px;
}
</style>
</head>
<body>

<!-- Header -->

       <!-- Navigation-->
       <nav class="navbar">
    <div class="container">
        <div class="navbar-brand">
            <img src="logo.png" alt="Logo" class="logo">
            <span class="navbar-name">Hotel Name</span>
        </div>
        <button class="navbar-toggle" aria-label="Toggle navigation" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <ul class="navbar-menu" id="navbarMenu">
            <li><a href="#">Home</a></li>
            <li><a href="#">Rooms</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Service</a></li>
        </ul>
    </div>
</nav>


<!-- Background Image Section -->
<section class="section background-image">
</section>

<!-- Menu Section -->
<section class="section menu one">
  <h2>OUR MENU</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="starters.jpg" alt="Menu Item 1">
      <h3>Grilled Salmon</h3>
      <p>Freshly caught salmon, grilled to perfection, served with seasonal vegetables and lemon butter sauce.</p>
    </div>
    <div class="menu-card">
      <img src="cocktails.jpg" alt="Menu Item 2">
      <h3>Cocktails</h3>
      <p>Prime beef tenderloin, seared and served with roasted potatoes, asparagus, and red wine reduction.</p>
    </div>
    <div class="menu-card">
      <img src="seafood.png" alt="Menu Item 3">
      <h3>Caprese Salad</h3>
      <p>Fresh tomatoes, mozzarella cheese, and basil leaves drizzled with balsamic glaze.</p>
    </div>
  </div>
</section>

<!-- Special Dishes Section -->
<section class="section menu two">
  <h2>SPECIAL DISHES</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 1">
      <h3>Grilled Salmon</h3>
      <p>Freshly caught salmon, grilled to perfection, served with seasonal vegetables and lemon butter sauce.</p>
    </div>
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 2">
      <h3>Beef Tenderloin</h3>
      <p>Prime beef tenderloin, seared and served with roasted potatoes, asparagus, and red wine reduction.</p>
    </div>
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 3">
      <h3>Caprese Salad</h3>
      <p>Fresh tomatoes, mozzarella cheese, and basil leaves drizzled with balsamic glaze.</p>
    </div>
  </div>
</section>

<!-- Dining Events Section -->
<section class="section menu one">
  <h2>DINING EVENTS</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 1">
      <h3>Grilled Salmon</h3>
      <p>Freshly caught salmon, grilled to perfection, served with seasonal vegetables and lemon butter sauce.</p>
    </div>
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 2">
      <h3>Beef Tenderloin</h3>
      <p>Prime beef tenderloin, seared and served with roasted potatoes, asparagus, and red wine reduction.</p>
    </div>
    <div class="menu-card">
      <img src="https://via.placeholder.com/300" alt="Menu Item 3">
      <h3>Caprese Salad</h3>
      <p>Fresh tomatoes, mozzarella cheese, and basil leaves drizzled with balsamic glaze.</p>
    </div>
  </div>
</section>
<section class="foot">
<footer style="background-color: #e6fffd; padding: 20px 0;">
    <div style="text-align: center; color: #666; font-size: 30px; background-color: #e6fffd;">CONTACT US</div>
    <div style="background-color: #e6fffd; color: #333; padding: 20px; border-radius: 20px; margin-top: 30px;">
        <div style="max-width: 1200px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px;">Social Media</h4>
                <div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap; margin-bottom: 40px;">
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #e6fffd; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; box-shadow: -2px -2px 5px rgba(255,255,255,5), 3px 3px 5px rgba(0,0,0,0.5); margin-bottom: 20px;"> <i class="fab fa-twitter"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #e6fffd; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; box-shadow: -2px -2px 5px rgba(255,255,255,5), 3px 3px 5px rgba(0,0,0,0.5); margin-bottom: 20px;"> <i class="fab fa-facebook-f"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #FF0000; background-color: #e6fffd; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; margin-right: 30px; font-size: 30px; box-shadow: -2px -2px 5px rgba(255,255,255,5), 3px 3px 5px rgba(0,0,0,0.5); margin-bottom: 20px;"> <i class="fab fa-youtube"></i> </a>
                    <a class="social" href="#" style="text-decoration: none; color: #6a9bd8; background-color: #e6fffd; display: inline-flex; justify-content: center; align-items: center; width: 60px; height: 60px; border-radius: 10px; font-size: 30px; box-shadow: -2px -2px 5px rgba(255,255,255,5), 3px 3px 5px rgba(0,0,0,0.5); margin-bottom: 20px;"> <i class="fab fa-linkedin-in"></i> </a>
                </div>
            </div>
            <div style="display: flex; flex-wrap: wrap; justify-content: center;">
                <div style="flex: 0 0 calc(50% - 20px); margin-bottom: 20px;">
                    <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px; text-align: center;">Contact</h4>
                    <a class="yy" href="#" style="text-decoration: none; color: #333; display: block; margin-bottom: 20px; text-align: center;"><i class="fas fa-map-marker-alt" style="margin-right: 10px;"></i>62 Jewett Avenue, Jersey City, NJ, 07304, US</a>
                    <p style="margin-bottom: 20px; text-align: center;"><i class="fas fa-phone-alt" style="margin-right: 10px;"></i>+012 651 4758</p>
                </div>
                <div style="flex: 0 0 calc(50% - 20px); margin-bottom: 20px;">
                    <h4 style="font-size: 18px; font-weight: 500; margin-bottom: 20px; text-align: center;">Newsletter</h4>
                    <form style="text-align: center;">
                        <div style="display: inline-block; margin-bottom: 20px;">
                            <input type="email" style="width: calc(70% - 10px); background-color: #e6fffd; padding: 10px; border-radius: 50px; border: none; box-shadow: inset -2px -2px 5px rgba(255,255,255,5), inset 3px 3px 5px rgba(0,0,0,0.2); padding-left: 30px; display: inline-block;" placeholder="Your email">
                            <button class="social" style="background-color: #e6fffd; color: #434242; border: none; padding: 10px 20px; border-radius: 50px; cursor: pointer; transition: box-shadow 0.3s; box-shadow: -2px -2px 5px rgba(255,255,255,5), 3px 3px 5px rgba(0,0,0,0.3); display: inline-block;">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <div style="text-align: center; margin-top: 30px; color: #666; font-size: 14px;">&copy; <a href="#" style="color: #666; text-decoration: none;">AMS</a>, All Right Reserved.</div>
        </div>
    </div>
</footer>



<style> 
  
    .social:hover {
      box-shadow: inset -2px -2px 5px rgba(255,255,255,5),
                  inset 3px 3px 5px rgba(0,0,0,0.5) !important; 
transform: scale(0.95);
    }
</style>
</section>

<script>
    function toggleMenu() {
        var menu = document.getElementById("navbarMenu");
        console.log(menu);
        console.log(menu.classList);
        menu.classList.toggle('active');
        console.log(menu.classList.toggle('active'));
        if (menu.classList.contains("active")) {
            menu.style.display = "flex";
        } else {
            menu.style.display = "none";
        }
    }
</script>

</body>
</html>
