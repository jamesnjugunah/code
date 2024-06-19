
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Priority-Pulse</title>
    <link href="home.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <style>
    .content {
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
.switch {
    position:absolute;
    top:300px;
    left:30px;
    width:90%;
    height:auto;  
    display:block;  
}
.list {
    display:block;
}
.planner {
    display:none;
}

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
 #lbtton {
    background-color:grey;
    border-color:#12171e;
 }
 #Pbtton {
    background-color:grey;
    border-color:#12171e;
 }
 #Obtton {
    background-color:grey;
    border-color:#12171e;
 }
    
    </style>

</head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="title">
                <p>PriorityPulse</p>
            </div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <div class="user">
            <img class="user_img" src="images/bro.PNG"/>
            <div>
                <p>Paul N.</p>
                <p>Admin</p>
            </div>
        </div>
        <div class="nav_links">
            <ul>
                <li><a href="#">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_names">Home</span>
                    </a>
                    <span class="tool_tip">Home</span>
                </li>
                <li><a href="mytasks.php">
                    <i class='bx bx-task'></i>
                    <span class="link_names">Tasks</span>
                    </a>
                    <span class="tool_tip">Tasks</span>
                </li>
                <li><a href="support.php">
                    <i class='bx bx-support'></i>
                    <span class="link_names">Support</span>
                    </a>
                    <span class="tool_tip">Support</span>
                </li>
                <li><a href="profile.php">
                    <i class='bx bx-cog'></i>
                    <span class="link_names">Settings</span>
                    </a>
                    <span class="tool_tip">Settings</span>
                <li><a href="#"onclick="logout()">
                    <i class='bx bx-log-out'></i>
                    <span class="link_names">Log_Out</span>
                    </a>
                    <span class="tool_tip">Log_Out</span>
                </li>
                <li><a href="help.php">
                <i class="bx bx-help-circle"></i>
                    <span class="link_names">Help</span>
                    </a>
                    <span class="tool_tip">Help</span>
                </li>
            </ul>

        </div>
        <p class="feed"><a href="feedback.php">FeedBack</a></p>
        <p class="Terms"><a href="terms.php">Terms and Conditions</a></p>   
    </div>
   
  <div class="main-content">
      <div class="container">
          <h1>Priority-Pulse</h1>
          <div id="clock"></div>
          <div id="calendar"></div>
       </div>
      <div class="creat">
          <a href="Create.php"><button class="butt">CREATE TASK</button></a>
          <input type="text" id="search" placeholder="Search..">
      </div>
      <div class="nav">
        <button id="lbtton"><p>List</p></button>
        <button id="Pbtton"><p>Planner</p></button>
        <button id="Obtton"><p>Overdue</p></button>
      </div>
      <div class="switch">
      <div class="list">
       <table class="content" id="tasksTable">
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
      </div>
      <div class="planner">
         
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
        </div>

        <script>
            function updateStatus(id) {
                window.location.href = "update_status.php?id=" + id;
                var listbtn = document.getElementById('Lbtton');
                var planbtn = document.getElementById('Pbtton');
                var listdiv = document.getElementByClassName('list');
                var Plannerdiv = document.getElementClassName('Planner');

                listbtn.addEventListener('click', function() {
                    listdiv.style.display = 'block';
                    Plannerdiv.style.display = 'none';
                });
                planbtn.addEventListener('click', function() {
                    listdiv.style.display = 'none';
                    Plannerdiv.style.display = 'block';
                });

            }
        </script>
      </div>
      </div>
    
  </div>
 

    
</body>
<script src="home.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

</html>