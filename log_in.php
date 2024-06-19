<?php      
    include('conn.php');
    
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql ="SELECT * FROM `registration` where username = '$username' and password= '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){ 
            $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Login Successful.</p>";
            // header('Location:home.php');
            include 'home.php';
            exit();
        }  
        else{  
			$_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid email or password.</p>";
            header('Location:login.php');
            include 'login.php';
            exit(); 
        }   
 
?>