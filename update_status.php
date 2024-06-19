<?php
// Replace with your database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "priority-pulse";

// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to update planned status
$sql = "UPDATE tasks SET planned = 1 WHERE id = ?";

// Prepare statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("i", $id);

// Execute query
if ($stmt->execute()) {
    // Redirect back to the HTML page or inform the user of success
    header("Location: plan.php"); // Make sure to replace 'your_html_page.php' with the actual name of your HTML page
    exit();
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
$stmt->close();
$conn->close();
?>
