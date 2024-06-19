<?php
// Connect to your database (replace placeholders with your actual database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "priority-pulse";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $active = $_POST['active'];
    $deadline = $_POST['deadline'];
    $created_by = $_POST['created_by'];

    // Insert data into the database
    $insertSql = "INSERT INTO tasks (name, active, deadline, created_by) VALUES ('$name', '$active', '$deadline', '$created_by')";

    if ($conn->query($insertSql) === TRUE) {
        include 'home.php';
        echo "Task added successfully";
    } else {
        echo "Error adding task: " . $conn->error;
    }
}



// Close the database connection
//$conn->close();
?>
