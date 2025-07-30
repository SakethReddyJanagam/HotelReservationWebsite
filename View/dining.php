
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
    
    padding-top: 100px;
    padding-bottom: 100px;

}

/* Background Image Section */
.background-image {
  background-image: url('assets/img/DINING.jpg');
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
h3{
  margin: 10px auto;
}
p{
  font-weight: normal;
}
.menu-card {
  background-image: url('imagesW/carousel/homeform.jpg');
  padding: 20px;
  border-radius: 10px;
  flex: 1;
  max-width: 300px;
  text-align: center;
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
.one{
  background-image: url('imagesW/carousel/homeform.jpg');
  background-size: cover;
}

</style>

<div>
<br><br><br>
<!-- Background Image Section -->
<section class="section background-image">
</section>

<!-- Menu Section -->
<section class="section menu one">
  <h2>OUR MENU</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="assets/img/starters.jpg" alt=" Menu Item 1">
      <h3>Food</h3>
      <p>Tiramisu,Burgers, Pasta, Bruschetta, Chocolate Fondue, Crème Brûlée, Vegetable Stir Fry, Caprese Salad, Spring Rolls.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/cocktails.jpg" alt="Menu Item 2">
      <h3>Cocktails</h3>
      <p>Mojito, Martini, Cosmopolitan, Margarita,Old fashioned,Negroni,Manhattan and red wine.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/seafood.png" alt="Menu Item 3">
      <h3>Sea Food</h3>
      <p>Grilled Salmon, Shrimp Scampi Pasta, Crab Stuffed Mushrooms, Lobster Tails,Garlic Butter Scallops, Tuna Poke Bowl.</p>
    </div>
  </div>
</section>

<!-- Special Dishes Section -->
<section class="section menu two">
  <h2>SPECIAL DISHES</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="assets/img/specialdish1.jpg" alt="Lobster ">
      <h3>Lobster Thermidor</h3>
      <p>Freshly caught lobster,Decadent French dish featuring lobster meat in creamy sauce, baked to perfection.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/specialdish2.jpg" alt="Chicken biryani">
      <h3>Chicken Biryani</h3>
      <p>Fragrant rice dish with tender chicken, aromatic spices, and herbs, a staple of Indian cuisine.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/specialdish3.jpg" alt="Seafood Paella">
      <h3>Seafood Paella</h3>
      <p>Spanish specialty of saffron-infused rice cooked with an assortment of seafood and vegetables.</p>
    </div>
  </div>
</section>

<!-- Dining Events Section -->
<section class="section menu one">
  <h2>DINING EVENTS</h2>
  <div class="menu-item">
    <div class="menu-card">
      <img src="assets/img/diningevents1.jpg" alt="Holiday Dinners">
      <h3>Holiday Dinners</h3>
      <p>Gather with loved ones to enjoy traditional festive dishes and create cherished memories.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/diningevents2.jpg" alt="Wine Tastings">
      <h3>Wine Tasting</h3>
      <p>Explore diverse flavors and aromas of wines, guided by experts in an interactive tasting experience.</p>
    </div>
    <div class="menu-card">
      <img src="assets/img/diningevents3.jpg" alt="Menu Tastings">
      <h3>Tasting Menu</h3>
      <p>Indulge in a curated selection of small plates, showcasing chef's creativity and culinary expertise.</p>
    </div>
  </div>
</section>

</div>


