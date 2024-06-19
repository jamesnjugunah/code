<?php
require('conn.php');
session_start();

if (isset($_POST['Register1'])) {
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Phone_Number = $_POST['Phone_Number'];
    $password = $_POST['password'];
    $Confirm_password = $_POST['Confirm_password'];


    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Email Address.</p>";
        header("Location: register.php");
        exit();
    }
    if (!preg_match('/^[0-9]{10}$/', $Phone_Number)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Phone Number.</p>";
        header("Location: register.php");
        exit();
    }
    if ($password !== $Confirm_password) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Passwords do not match.</p>";
        header("Location: register.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "SELECT * FROM Registration WHERE email = ? OR phone_number = ?");
    mysqli_stmt_bind_param($stmt, "ss", $Email, $Phone_Number);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Email or Phone Number already Exists.</p>";
        header("Location: register.php");
        exit();
    }

    $stmt = mysqli_prepare($con, "INSERT INTO Registration(Username,email, phone_number, password) VALUES ( ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, "ssss", $Username, $Email, $Phone_Number, $password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Registered Successfully</p>";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Registration Failed</p>";
        header("Location: register.php");
        exit();
    }
}
?>