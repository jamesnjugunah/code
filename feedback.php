<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>feedback</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
    <div class="container">
        <div class="title">Feedback</div>
        <form action="checkfeedback.php" method="post">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" name="Full_Name" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" name="Email" placeholder="Enter your email" required>
                </div>
                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="text" name="Phone_Number" placeholder="Enter your number" required>
                </div>
            </div>
            <div class="subject">
                <span class="details">Subject</span>
                <input type="text" name="Subject" placeholder="Enter the subject" required>
            </div>
            <div class="message">
                <span class="details">Message</span>
                <textarea name="Message" required></textarea>
            </div>
            
                <input class="button" name="submit" type="submit" value="Send" >
            
        </form>
    </div>
    
</body>

</html>