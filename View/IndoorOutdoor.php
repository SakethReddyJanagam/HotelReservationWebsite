<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indoor/Outdoor Activities</title>
    <style>
        body {
            font-family: 'Cinzel', serif;
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        .header {
            background-image: url('assets/img/inouts.jpg');
            background-size: cover;
            color: white;
            text-align: center;
            padding: 50px 0;
            height: 100vh;
            margin: 40px;
        }

        .header-content {
            background-color: rgba(0, 0, 0, 0.5);
            padding: 20px;
        }

        .activities-section {
            background-color: #e6fffd;
            padding: 100px;
            margin: 30px;
             /* Added border between sections */
        }

        .activities-section h2 {
            text-align: center;
            margin-bottom: 20px; /* Added margin below section headings */
            margin: 40px;
        }

        .activities-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .activity-card {
            width: calc(25% - 40px);
            margin: 20px;
            position: relative;
            perspective: 1000px;
            
        }

        .activity-card img {
            width: 100%;
            border-radius: 5px;
        }

        .card-back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            transform: rotateY(180deg);
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .activity-card:hover .card-back {
            transform: rotateY(0); 
            font-weight: normal;
            color: black;
            background-image: url('imagesW/carousel/homeform.jpg');
        
        }
        .activity-card-heading {
            text-align: center;
            margin-top: 10px; /* Added margin above card headings */
        }

        @media screen and (max-width: 768px) {
            .background-image{
                height: calc(50% - 40px);
            }
            .activity-card {
                width: calc(50% - 40px);
            }
        }
        @media screen and (max-width: 576px) {
            .activity-card {
                width: calc(100% - 40px);
            }
        }
        #filter-book{
      /* Set background image */
      background-image: url('imagesW/carousel/homeform.jpg') !important; /* Replace 'background-image.jpg' with the path to your image */
      /* Adjust background properties */
      background-size: cover; /* Adjusts the size of the background image to cover the entire body */
      background-position: center; /* Centers the background image */
      background-repeat: no-repeat; /* Prevents the background image from repeating */
    }
    </style>
</head>
<body>
    <div class="header">
        
    </div>
    <div id="filter-book" class="activities-section">
        <h2>Indoor Activities</h2>
        <div class="activities-container">
            <div class="activity-card">
                <h3 class="activity-card-heading">Spa</h3> <!-- Added card heading -->
                <img src="assets/img/spa.jpg" alt="Indoor Activity 1">
                <div class="card-back"> 
                    <p>Indulge in relaxation and rejuvenation with our luxurious spa amenities, offering a range of treatments designed to pamper your body and mind, leaving you feeling refreshed and revitalized.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Billiards</h3> <!-- Added card heading -->
                <img src="assets/img/billards.jpg" alt="Indoor Activity 2">
                <div class="card-back">
                    <p>Test your skills on our professional-grade billiards table, perfect for socializing and enjoying a casual game with friends or fellow guests.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Fitness Center</h3> <!-- Added card heading -->
                <img src="assets/img/fitness.jpg" alt="Indoor Activity 3">
                <div class="card-back">
                    <p>Our state-of-the-art fitness center is equipped with the latest exercise machines and trained staff to help you reach your fitness goals. Stay active and energized with a variety of cardio and strength training options.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Board Games</h3> <!-- Added card heading -->
                <img src="assets/img/chess.jpg" alt="Outdoor Activity 3">
                <div class="card-back">
                    <p>Unwind with friends and family in our cozy lounge area, where you can enjoy a selection of classic board games for some old-fashioned fun and friendly competition.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="activities-section">
        <h2>Outdoor Activities</h2>
        <div class="activities-container">
            <div class="activity-card">
                <h3 class="activity-card-heading">Tennis</h3> <!-- Added card heading -->
                <img src="assets/img/tennis.jpg" alt="Outdoor Activity 1">
                <div class="card-back">
                    <p>Hit the courts and perfect your serve on our well-maintained tennis facilities, offering an ideal setting for friendly matches or intense rallies against opponents.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Skating Rink</h3> <!-- Added card heading -->
                <img src="assets/img/skatingrink.jpg" alt="Outdoor Activity 2">
                <div class="card-back">
                    <p>Glide across the ice in our charming skating rink, offering a delightful experience for skaters of all levels, whether you're practicing your figure eights or enjoying a romantic twirl under the twinkling lights.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Beach Access</h3> <!-- Added card heading -->
                <img src="assets/img/beachaccess.jpg" alt="Outdoor Activity 3">
                <div class="card-back">
                    <p>Immerse yourself in the sun, sand, and surf with direct access to pristine beaches, where you can relax, swim, or partake in various water sports for a memorable seaside getaway.</p>
                </div>
            </div>
            <div class="activity-card">
                <h3 class="activity-card-heading">Golf</h3> <!-- Added card heading -->
                <img src="assets/img/golf.jpg" alt="Outdoor Activity 3">
                <div class="card-back">
                    <p>Tee off on our scenic golf course, featuring lush fairways and challenging holes that cater to both novice players and seasoned pros alike, providing an unforgettable golfing experience.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
