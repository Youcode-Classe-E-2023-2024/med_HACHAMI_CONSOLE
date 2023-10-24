<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style/index.css">
    <link rel="stylesheet" href="./style/profile.css">
   
</head>
<body>
    <div id="navbar"></div>
<?php
session_start();
if (isset($_SESSION["user_id"])) {
?>
  <div class="profile">
        
        <div class="card">
            <img src="./assets/dragonBull.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">MedHachami</h5>
                
            </div>
        </div>
            
       
        <div class="collapse-container">
            <div class="collapse-btn">
                <button class="collapsible" id="button1">Profile Details</button>
                <button class="collapsible" id="button2">Likes</button>
            </div>
            <div class="collapse-body">
                <div class="content" id="section1">
                    <p>This is Section 1 Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum velit quos consequatur in architecto sunt officiis debitis sapiente iste omnis dolor libero et assumenda quidem, quam exercitationem nam quae! Delectus.</p>
                  </div>
                  
                  
                  <div class="content" id="section2">
                    <p>This is Section 2 Lorem ipsum dolor sit amet consectetur adipisicing elit. In non deleniti expedita reiciendis rem quasi aspernatur vero, dolorum, sint exercitationem repellat, soluta quisquam? Mollitia maxime hic repellendus, eius odio officia?.</p>
                  </div>
            </div>
        </div>
    </div> 
<?php
  } else {
?>
<div class="login-container">
 <section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> 

<div class="signin"> 

 <div class="content"> 

  <h2>Sign In</h2> 

  <div class="form"> 

   <div class="inputBox"> 

    <input type="text" required> <i>Username</i> 

   </div> 

   <div class="inputBox"> 

    <input type="password" required> <i>Password</i> 

   </div> 

   <div class="links"> <a href="#">Forgot Password</a> <a href="./SignUp.php">Signup</a> 

   </div> 

   <div class="inputBox"> 

    <button class="login-btn">Register</button>

   </div> 

  </div> 

 </div> 

</div> 

</section>
</div>
<?php } ?>
    <div id="footer"></div>
    <script src="./Components/navBar.js"></script>
    <script src="./Components/Footer.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
  var buttons = document.getElementsByClassName("collapsible");
  var sections = document.getElementsByClassName("content");

  for (var i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function () {
      // Remove 'active' class from all buttons
      for (var j = 0; j < buttons.length; j++) {
        buttons[j].classList.remove("active");
      }

      // Add 'active' class to the clicked button
      this.classList.add("active");

      // Hide all sections
      for (var j = 0; j < sections.length; j++) {
        sections[j].style.display = "none";
      }

      // Toggle the clicked section's visibility
      var targetId = this.getAttribute("id").replace("button", "section");
      var targetSection = document.getElementById(targetId);
      targetSection.style.display = "block";
    });
  }
});

    </script>
</body>
</html>