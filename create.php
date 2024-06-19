<!DOCTYPE html>
<html>
<head>
    <title>Add Task</title>
    <link rel="stylesheet" type="text/css" href="create.css">
</head>
<body>
    <div class="form">
      <h2>Add New Task</h2><hr/>
      <form  class="fom" action="process_task.php" method="post">
         <div class="info">
             <label for="name">Name:</label>
             <input type="text" id="name" name="name" required><br>
         </div>
          <div class="info">
              <label for="active">Active:</label>
              <input type="date" id="active" name="active" required><br>
          </div>
          <div class="info">
              <label for="deadline">Deadline:</label>
              <input type="date" id="deadline" name="deadline" required><br>
          </div>
          <div class="info">
             <label for="created_by">Created By:</label>
             <input type="text" id="created_by" name="created_by" required><br>
          </div>
          <input class="button" type="submit" value="Add Task">
      </form>
    </div>
</body>
</html>
