<!DOCTYPE html>
<html>
<head>
    <title>Login - Assessment System</title>
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="login-page">  <!-- ADD THIS CLASS HERE -->

<div class="login-box">  <!-- CHANGE FROM login-container TO login-box -->
    <h2>Welcome Back</h2>  <!-- REMOVE the login-header div, just use h2 -->
    
    <?php if ($error != ""): ?>
        <div class="error">  <!-- CHANGE FROM error-message TO error -->
            <?php echo $error; ?>
        </div>
    <?php endif; ?>
    
    <form method="POST">  <!-- REMOVE login-form class -->
        <label>Username</label>
        <input type="text" name="username" placeholder="Enter your username" required>
        
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password" required>
        
        <button type="submit">Login</button>  <!-- REMOVE login-button class -->
    </form>
    
    <!-- Optional: Remove the demo hint and footer if you don't want them -->
</div>

</body>
</html>