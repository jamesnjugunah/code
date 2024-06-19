<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Database Table</h2>

<table>
    <thead>
        <tr>
            <th>Not Planned</th>
            <th>To be done this Week</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Replace with your database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "priority-pulse";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Replace the query with your actual query
        $sql = "SELECT id, name, deadline, planned,completed FROM tasks ORDER BY deadline ASC";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                if ($row['planned'] == 0 & $row['completed'] == 0) {
                    echo "<td>{$row['name']}<br>{$row['deadline']}<br><button onclick='updateStatus({$row['id']})'>Move to Planned</button></td>";
                    echo "<td></td>";
                } else if ($row['planned'] == 1 & $row['completed'] == 0){
                    echo "<td></td>";
                    echo "<td>{$row['name']}<br>{$row['deadline']}</td>";
                }
                echo "</tr>";
            }
        }

        // Close connection
        $conn->close();
        ?>

        <script>
            function updateStatus(id) {
                // You can use JavaScript or AJAX to send a request to update the status in the database
                // For simplicity, you can redirect to a PHP page that handles the update

                // Example using window.location
                window.location.href = "update_status.php?id=" + id;
            }
        </script>
    </tbody>
</table>

</body>
</html>
