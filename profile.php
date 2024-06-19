<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="profile.css">   
</head>
<body>
   <div class="container">
     <div class="profile_picture">
      <label for="file-input">Change Photo</label>
      <input type="file" id="file-input" class="pro_picture" accept="image.png, image.jpeg, image.png">
      <img id="uploaded-image" src="images/profile.png" alt="Uploaded Image">
     </div>
     <form>
      <div class="profile_info" action="process_task.php" method="get">
        <div class="info">
          <label for="file-input">Name</label>
          <input type="text" id="name" name="username" value="james2003">
        </div>
        <div class="info">  
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="jamesnjugunah2003@gmail.com">
        </div>
        <div class="info">
          <label for="phone">Phone_Number</label>
          <input type="tel" id="phone" name="Phone_Number" value="0705795711">
        </div>   
              
     </form>
   
   </div>


    </div>
  </div>

  <script src="home.js"></script>
</body>
</html>
