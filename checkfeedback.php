<?php
require('conn.php');
session_start();

if (isset($_POST['submit'])) {
    $FullNames = $_POST['Full_Name'];
    $Email = $_POST['Email'];
    $Phone_Number = $_POST['Phone_Number'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $stmt = mysqli_prepare($con, "INSERT INTO Feedback(Full_Name,Email, Phone_Number, Subject, Message) VALUES ( ?, ?, ?, ?, ?)");

    mysqli_stmt_bind_param($stmt, "sssss", $FullNames, $Email, $Phone_Number, $Subject, $Message);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Feedback sent Successfully</p>";
        header("Location: home.php");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Feedback Not sent</p>";
        header("Location: feedback.php");
        exit();
    }
}
?>