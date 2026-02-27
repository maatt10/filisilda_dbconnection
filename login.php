<?php
session_start();

// If already logged in, redirect to index
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username']; 
    $password = $_POST['password'];

    // Static admin login
    if ($username === "admin" && $password === "admin") {
        $_SESSION['username'] = "ADMIN";
        header("Location: index.php");
        exit();
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - Assessment System</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="login-container">
    <div class="login-header">
        <h2>Welcome Back</h2>
        <p>Please login to continue</p>
    </div>
    
    <?php if ($error != ""): ?>
        <div class="error-message">
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    
    <form class="login-form" method="POST">
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        
        <button type="submit" class="login-button">Login</button>
    </form>
    
    <div class="demo-hint">
        <p>Credentials:</p>
        <div class="credentials">
            <span>Username:</span> admin<br>
            <span class="coral">Password:</span> admin
        </div>
    </div>
    
    <div class="login-footer">
        &copy; Assessment System
    </div>
</div>

</body>
</html>