 // sidebar
 let btn =document.querySelector('#btn');
 let sidebar =document.querySelector('.sidebar');

 btn.onclick = function() {
     sidebar.classList.toggle('active');
 }
 // clock and calendar
 function updateTime() {
   const now = new Date();
   const hours = String(now.getHours()).padStart(2, '0');
   const minutes = String(now.getMinutes()).padStart(2, '0');
   const seconds = String(now.getSeconds()).padStart(2, '0');
   document.getElementById('clock').textContent = `${hours}:${minutes}:${seconds}`;
 }

 function updateCalendar() {
   const now = new Date();
   const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
   document.getElementById('calendar').textContent = now.toLocaleDateString('en-US', options);
 }


 setInterval(updateTime, 1000);
 updateCalendar();

 // notiications 
 let notificationCount = 3;

function updateBadge(count) {
 const badge = document.getElementById('notificationBadge');
 if (count > 0) {
     badge.textContent = count;
     badge.style.display = 'block';
 } else {
     badge.style.display = 'none';
 }
}

window.onload = function() {
 updateBadge(notificationCount);
};
function markAllNotificationsAsRead() {
 notificationCount = 0;
 updateBadge(notificationCount);
}
function openDialog() {
 document.getElementById('notificationDialog').style.display = 'block';
}

// Close the notification dialog
function closeDialog() {
 document.getElementById('notificationDialog').style.display = 'none';
markAllNotificationsAsRead();
}

// Toggle dialog visibility when notification icon is clicked
document.getElementById('notificationIcon').addEventListener('click', function() {
 openDialog();
});

 function openHelpModal() {
    document.getElementById('helpModal').style.display = "block";
}

function closeHelpModal() {
    document.getElementById('helpModal').style.display = "none";
}

// Close modal if user clicks outside of it
window.onclick = function(event) {
    var modal = document.getElementById('helpModal');
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Function to handle logout
function logout() {
    
    console.log("User logged out");

    
    window.location.href = "login.php"; 


document.getElementsByClassName("bx bx-log-out").addEventListener("click", function() {
    logout();
});
}


// upload image
const fileInput = document.getElementById('file-input');
const uploadedImage = document.getElementById('uploaded-image');

fileInput.onchange = function () {
    uploadedImage.src = URL.createObjectURL(fileInput[0]);
}
//for search input bar 
const searchInput = document.getElementById('search');
const tasksTable = document.getElementById('tasksTable');
const rows = tasksTable.getElementsByTagName('tr');

searchInput.addEventListener('keyup', function() {
    const searchText = searchInput.value.toLowerCase();
    
    for (let i = 1; i < rows.length; i++) {
        const taskName = rows[i].getElementsByTagName('td')[1].textContent.toLowerCase();
        
        if (taskName.includes(searchText)) {
            rows[i].style.display = '';
        } else {
            rows[i].style.display = 'none';
        }
    }
});

function displayProfile() {
    var username = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phoneNumber = document.getElementById("phone").value;

    var profileResult = document.getElementById("profile_result");
    profileResult.innerHTML = "<h2>User Profile</h2>" +
                              "<p><strong>Username:</strong> " + username + "</p>" +
                              "<p><strong>Email:</strong> " + email + "</p>" +
                              "<p><strong>Phone Number:</strong> " + phoneNumber + "</p>";
}
