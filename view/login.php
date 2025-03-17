<?php include '../controller/AuthController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
</head>
<body>
    <img src="../assets/logofk.png" class="background-logo" alt="Logo"> 

    <div class="container">
        <div class = "title-container">
        <img src="../assets/logofk.png" class="logo"> 
        <h2>Login</h2>
        </div>
        
        <form action="../controller/AuthController.php" method="POST">
            <label>Username:</label>
            <input type="text" name="username" value="<?php echo isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; ?>" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <label>
            <input type="checkbox" name="remember" <?php echo isset($_COOKIE['username']) ? "checked" : ""; ?>> Remember me
            </label>

            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="register.php">Register</a></p>

        </form>
    </div>
</body>
</html>
