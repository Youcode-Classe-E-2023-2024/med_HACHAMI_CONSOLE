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
include_once('./includes/isLogged.php');
if(isLoggedIn()){


?>

  <div class="profile">
      <div class="profile-container">
        <div class="card">
            <img src="./assets/dragonBull.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $_SESSION['user_fullname']; ?></h5>
                
            </div>
            <div class="logout">
              
              <a href="includes/log-out.php" class="sideBar-link"><img src="./assets/log-out.png" class="item-icon" style="width: 100%;height:100%" alt="Log-Out" ></a>
            </div>
        </div>
        <div class="collapse-container">
            <div class="collapse-btn">
                <button class="collapsible" id="button1">Profile Details</button>
                <button class="collapsible" id="button2">Likes</button>
            </div>
            <div class="collapse-body">
                <div class="content" id="section1">
                    <ul class="user-deatils">
                      <li>
                        <img src="./assets/icon-user.png" alt="">
                         <p><?php echo $_SESSION['user_fullname']; ?></p>
                        </li>
                      <li>
                        <img src="./assets/icon-email.png" alt="">
                         <p><?php echo $_SESSION['email']; ?></p>
                        </li>
                      <li>
                        <img src="./assets/icon-phone.png" alt="">
                         <p><?php echo $_SESSION['phone']; ?></p>
                        </li>
                    </ul>
                  </div>
                  
                  
                  <div class="content" id="section2">
                    
                    <div class="games-container">
                    <?php
                    include_once('./includes/LikedProducts.php');
                    $products = likedProduct($_SESSION['user_id']);
                    foreach($products as $product){
                    ?>
                      <div class="game-card">
                          <div class="card-thumb">
                              <img src="./assets/<?php echo $product['imgUrl'] ?>" alt="">
                          </div>
                          <div class="card-description">
                              <h2><?php echo $product['title'] ?></h2>
                              <div class="card-footer">
                                  
                                  <span><?php echo $product['price'] ?>$</span>
                              </div>
                          </div>
                      </div>
                      
                      <?php }?>    
                  </div>
                  
                  </div>
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

  <h2>Log in</h2> 

  <form class="form" action="includes/login.inc.php" method="POST" > 

   <div class="inputBox"> 

    <input type="text" name="email" required> <i>Email</i> 

   </div> 

   <div class="inputBox"> 

    <input type="password" name="pwd" required> <i>Password</i> 

   </div> 

   <div class="links"> <a href="#">Forgot Password</a> <a href="./SignUp.php">Signup</a> 

   </div> 

   <div class="inputBox"> 

    <button class="login-btn" name="submit" type="submit" >Log in</button>

   </div> 

  </form> 

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