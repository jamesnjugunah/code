
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>
<body class="body">
    <img src="images/gud.jpg" alt="background image" class="back">
    <div class="login">
      <img src="images/logo.png" alt="task manager logo" class="image">
      <h1 style="text-align: center;">Login</h1><br><hr>
      <form action="log_in.php" method="post" class="form">
        <label for="username">Username</label>
        <input type="text" name="user" id="username"><br><br>
        <label for="password">Password</label>
        <input type="password" name="pass" id="password"><br><br>
        <input type="submit" name="Log_in" value="Login" class="button">
      </form>
      <p>Do not have an account?<a href="register.php">Register</a></p> 
    </div>
    
</body>
</html>