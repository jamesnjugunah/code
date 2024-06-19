<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Tasks</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
         * {
            margin-top:0px;
            padding:0;
            box-sizing:border-box;
        }
    table {
    border-collapse: collapse;
    width: 100%;
    
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

#dropdown {
    position: relative;
    display:inline-block;

   
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-decoration:none;

}

.dropdown:hover .dropdown-content {
    display: flex;
}

    </style>
</head>
<body>
    <table class="content">
        <tr>
        <th>Complete</th>
            <th>Name</th>
            <th>Active</th>
            <th>Deadline</th>
            <th>Created By</th>
            <th>Actions</th>
        </tr>

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

        // Handle delete action
        if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
            $idToDelete = $_GET['id'];
            $deleteSql = "DELETE FROM tasks WHERE id = $idToDelete";
            if ($conn->query($deleteSql) === TRUE) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . $conn->error;
            }
        }

        // Handle complete action
        if (isset($_GET['action']) && $_GET['action'] == 'complete' && isset($_GET['id'])) {
            $idToComplete = $_GET['id'];
            $completeSql = "UPDATE tasks SET completed = 1 WHERE id = $idToComplete";
            if ($conn->query($completeSql) === TRUE) {
                echo "Task completed successfully";
            } else {
                echo "Error completing task: " . $conn->error;
            }
        }

        // Fetch data from the database (replace 'your_table' with your actual table name)
        $sql = "SELECT * FROM tasks";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><input type='checkbox' name='complete' value='1' " . ($row['completed'] == 1 ? 'checked' : '') . "></td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["active"] . "</td>";
                echo "<td>" . $row["deadline"] . "</td>";
                echo "<td>" . $row["created_by"] . "</td>";
                
                echo '<td>
                        <div class="dropdown">
                        <i id="dropbtn" class="bx bx-menu"></i>
                        <div class="dropdown-content">
                            <a href="?action=edit&id=' . $row["id"] . '">Edit</a>
                            <a href="?action=delete&id=' . $row["id"] . '">Delete</a>
                            <a href="?action=complete&id=' . $row["id"] . '">Complete</a>
                        </div>
                           
                        </div>
                    </td>';
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }

        // Close the database connection
        $conn->close();
        ?>
    
</body>
</html>