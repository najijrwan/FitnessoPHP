<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <link rel="stylesheet" href="CSS/Register.CSS">
    <script src="JS/Register.js"></script>
    <?php include 'Header.php'; ?>

</head>
<body>

    <div class = "gettingStarted">
        Getting Started
    </div>

    <h1 id = "formInfo">Enter your register information bellow:</h1>

    <div id="formContainer">
        <form id="welcomeForm">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br><br>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <span id="emailError" style="color: red; display: none;">Invalid email address!</span><br><br>
    
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>
    
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
            <span id="passwordError" style="color: red; display: none;">Passwords do not match!</span><br><br>
    
            <button type="submit">Submit</button>
            <p id="successMessage" style="color: green; display: none;"></p>
        </form>
    </div>

    <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script src="JS/Register.js"></script>

    <link rel="stylesheet" href="CSS/Fitnesso.CSS">
    <footer class="footer">
        <p>Contact us if you have any questions or need help</p>
        <a href="Contact.php" id = "contactus">Contact Us</a>
    </footer>

</body>
</html>