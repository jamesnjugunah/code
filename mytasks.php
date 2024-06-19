<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks</title>
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
.a {
    text-decoration:none;
    color:white;

}
* {
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
/* Sidebar*/
.user_img {
    width:50px;
    border-radius: 100%;
    border: 1px solid white;
}
.sidebar {
    position:absolute;
    top:0px;
    left:opx;
    height:100vh;
    width:80px;
    background-color: #12171e;
    padding: 0.4rem 0.8rem;
    transition: all 0.5s ease;
}
.sidebar.active ~ .main-content {
    left:250px;
    width: calc(100% - 250px);

}
.sidebar.active {
    width:250px;
}
.sidebar #btn {
    position:absolute;
    top: 0.4rem;
    left:50%;
    color:white;
    font-size: 1.2rem;
    line-height: 50px;
    transform:translateX(-50%);
    cursor:pointer;

}
.sidebar.active #btn {
    left:90%;
}
.sidebar .top .title {
    color:white;
    display:flex;
    height:50px;    
    width:100%;
    align-items: center;
    pointer-events: none;
    opacity:0;
}
.sidebar.active .top .title {
    opacity:1;
}
.user {
    display:flex;
    margin: 1rem 0;
    align-items: center;

}
.user p {
    margin-left: 1rem;
    color:white;
    opacity:1;

}
.bold {
    font-weight: 600;
}
.sidebar p {
    opacity:0;
}
.sidebar.active p {
    opacity:1;
}
.nav_links {
    padding-left: 20px;;
}
.sidebar ul li {
    position:relative;
    list-style-type: none;
    margin:1.6rem auto;
    width:90%;
    height:50px;
    line-height:50px;

}
.sidebar ul li a {
    color:white;
    display:flex;
    align-items: center;
    text-decoration: none;
    border-radius: 0.8rem;

}

.sidebar ul li a:hover {
    background-color: white;
    color: #12171e;
}
.sidebar ul li a i {
    line-height: 50px;
    min-width: 50px;
    align-items: center;
    border-radius:12px;
    height:50px;

}
.sidebar .link_names {
    opacity:0;

}
.sidebar.active .link_names {
    opacity:1;
}
.sidebar ul li .tool_tip {
    position:absolute;
    left:60px;
    top:0%;
    transform:translate (-50%, -50%);
    box-shadow: 0 0.5rem 0.8rem rgba(0,0,0,0.2);;
    border-radius:0.6rem;
    padding: 0.4rem 1.2rem;
     line-height: 1.8rem;
     z-index: 20;
     opacity:0;

}

.sidebar ul li:hover .tool_tip {
    opacity:1;
}
.sidebar.active ul li:hover .tool_tip {
    opacity:0;
}

.main-content {
    position:relative;
    min-height: auto;
    top:50px;
    left:80px;
    transition:all 0.5s ease;
    background-color: #eee;
    padding: 1rem;
    width: calc(100% - 80px);
}
.sidebar .feed a {
    opacity:0;
    text-decoration:none;
    position:absolute;
    left:75px;
    bottom:60px;
    align-items:center;
    color:white;

}
.sidebar .Terms a {
    opacity:0;
    text-decoration:none;
    position:absolute;
    left:40px;
    bottom:30px;
    color:white;
    
}
.sidebar.active ~ .container {
    left:250px;
    width: calc(100% - 250px);

}
.sidebar.active .feed a {
    opacity:1;
}
.sidebar.active .Terms a {
    opacity:1;
}
.container {
    width: calc(100% - 80px);
    display:flex;
    position:relative;
    top:10px;
    left:80px;
    transition:all 0.5s ease;
    align-items: center;
    justify-content: space-between;
    background-color: #12171e;
    border-radius: 30px;
    color:white;
    padding:10px 10px 10px 10px;
    
    



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
                <li><a href="home.php">
                    <i class='bx bx-home-alt'></i>
                    <span class="link_names">Home</span>
                    </a>
                    <span class="tool_tip">Home</span>
                </li>
                <li><a href="tasks.php">
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
                <li><a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="link_names">Settings</span>
                    </a>
                    <span class="tool_tip">Settings</span>
                <li><a href="">
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
    <div class="container">
        <h1>Priority-Pulse</h1>
        <p>My Tasks</p>
        <div id="clock"></div>
        <div id="calendar"></div>
    </div>
    <table class="main-content">
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

    </table><a  class="a" href="home.php">
    <button class="btn">home</button></a>
</body>
<script src="home.js"></script>
</html>

