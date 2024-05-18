<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fitnesso</title>
    <link rel="stylesheet" href="CSS/Fitnesso.CSS">
    <script src="JS/Fitnesso.js"></script>
    <?php include 'header.php'; ?>
</head>
<body>

    <div class = "container">
        <img src="Images/Athlete2.jpg" alt="Athlete" id = "img1">
        <div class = "overlay">
            <h1>Your Fitness Journey Starts Here.</h1>
            <h4>"You don't have to be great to start, but you have to start to be great."</h4>
            <a href="About.html" 
             onmousedown="changeSize1(this)"
             onmouseup="changeSize2(this)">
             Learn More
             </a>
        </div>
    </div>

    <div id = "goals">
        <h6>WHAT WE BELIEVE IN</h4>
        <h1>Achieve your desired results, get in shape, and stay consistent.</h1>
    </div>

    <div class="container2">
        <div class="text">
            <h5>About</h5>
            <h1>What Fitnesso do?</h1>
            <p>If your searching for a tool that can help you organize your diet plan, workouts
                and future goals Fitnesso can do that for you. It tracks your activity step by step
                and directs you to what need to be done do achieve a certain goal.
            </p>
            <a href="About.html">Learn More</a>
        </div>
        <div class="img2">
            <img src="Images/Athlete3.jpg" alt="Your Image">
        </div>
    </div>

    <div class="container2">
        <div class="img3">
            <img src="Images/Athlete4.jpg" alt="Your Image">
        </div>
        <div class="text">
            <h5>Requirements</h5>
            <h1>What do you need to start?</h1>
            <p>
                What you need is a strong mindest, patience, time, and effort. You need
                to stay consistent and disciplined. Goals can be achieved only when there are
                rules and those rules should never be broken to achieve these goals.
                But materistically you need to complete some steps to start with 
                <span style="font-style: italic;">Fitnesso.</span>
            </p>
            <a href="About.html">Learn More</a>
        </div>
    </div>

    <div class = "container3">
        <h1>You can benifit from various professionals</h1>
        <div class = "content">
            <h3>Personal Trainers</h3>
            <p>You can contact and work with experienced personal trainers that our team has
                collaborated with to help you achieve your goals and fitness result. These pro-trainers
                have studied in various fields like gym workouts, calisthenics and more different type of sports.
            </p>
            <a href="PersonalTrainers.php" id = "pro">Personal Trainers</a>
        </div>
        <div class = "content">
            <h3>Nutritionists</h3>
            <p>Our team has also collaborated with mutliple Nutritionists that have studied the field
                and can guide you through your diet plan throughout your fitness journey. This guidence
                 include daily meals-intake, weight loss and muscle gain during your fitness journey.
            </p>
            <a href="Nutritionists.php" id = "pro">Nutritionists</a>
        </div>
        <div class = "content">
            <h3>Fitness Advisers</h3>
            <p>You can work and contact multiple fitness advisers that will help you set your mentality
                to stay motivated and enthusiastic about your workouts and ultimate goals and body goals.
            </p>
            <a href="FitnessAdvisers.php" id = "pro">Fitness Advisers</a>
        </div>
    </div>

    <footer class="footer">
        <h1>Don't waste time and start now!</h1>
        <p>Starting and registering on our website doesn't take time. Join us now and begin your journey to better health and fitness!</p>
        <a href="Register.php" id="start-link">Get Started</a>
        <p>Contact us if you have any questions or need help</p>
        <a href="Contact.php" id = "contactus">Contact Us</a>
    </footer>

</body>
</html>