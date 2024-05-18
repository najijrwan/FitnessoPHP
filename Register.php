<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started</title>
    <script src="JS/Register.js"></script>
    <?php include 'header.php'; ?>
</head>
<body>

    <div id="form-container">
        <form id="welcomeForm">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>

    
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script src="JS/Register.js"></script>

</body>
</html>