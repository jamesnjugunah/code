<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body class="body">
    
    <div class="Register">
        <img src="images/logo.png" alt="task manager logo" class="logo">
            <h1 style="text-align: center;">Register</h1><br><hr>
            <?php 
			if(isset($_SESSION['status']))
			{
				echo $_SESSION['status'];
				unset($_SESSION['status']);
			}
		?>
            <form action="Registration.php" method="post" class="form">
                <label for="Username">Username:</label>
                <input type="text" name="Username" id="Uname" required><br><br>
                <label for="Email">Email:</label>
                <input type="text" name="Email" id="Email" required><br><br>
                <label for="Phone Number">Phone Number:</label>
                <input type="text" name="Phone_Number" id="Pnumber" required><br><br>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>
                <label for="Confirm password">Confirm Password:</label>
                <input type="password" name="Confirm_password" id="Cpassword" required><br><br>
                <input type="submit" value="Register" name="Register1" class="button">
            </form>
            <p>Already have an account?<a href="login.php">Login</a></p>
    </div>
    
</body>
</html>