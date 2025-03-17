<?php include '../controller/AuthController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <img src="../assets/logofk.png" class="background-logo" alt="Logo"> 

    <div class="container">
        <div class = "title-container">
        <img src="../assets/logofk.png" class="logo"> 
        <h2>Register</h2>
        </div>
        <form action="../controller/AuthController.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="register">Register</button>

            <small>Already have an account? <a href="login.php">Login</a></small>
        </form>
    </div>
</body>
</html>

