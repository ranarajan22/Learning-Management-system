<?php
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
  }
  if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: login.php");
  }

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>courses</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <div class="nav-container">
        <!-- logo -->
        <div class="logo-container">
            <a href="./main/index.php" ><img src="../image/logo11.jpg" alt="logo" class="logo"></a>
        </div>
        <!-- nav-bar -->
        <div class="nav-links-container">
            <ul class="nav-links">
                <li> <a href="#" class="navbar-link">Home</a>       </li>
                <li> <a href="#" class="navbar-link">About</a>      </li>
                <li> <a href="#" class="navbar-link">Explore</a>    </li>
                <li> <a href="#" class="navbar-link">Courses</a>   </li>
                <!-- <li> <a href="#" class="navbar-link">Collections</a></li> -->
                
            </ul>
        </div>
        <!-- search-bar -->
        <div class="nav-action">
            <input type="text" placeholder="Search" class="search-bar">
            <button type="submit" class="btn-primary">
             <a href="../main/index.php">back</a></button>
        </div>
    </div>
</header>


<h3 class="cour">All Courses</h3>
  <section class="lower2">
    <div class="lower02">
        <img src="../image/web.jpg" alt="image"  class="img1"> <br>
        <a href=""><div class="block">Web Devlopment</div></a>
    
       
    </div>
    <div class="lower03">
        <img src="../image/science.jpg" alt="image"  class="img1"> <br>
        <div class="block">Data Science</div>
        
        
    </div>
    <div class="lower04">
        <img src="../image/ai.jpg" alt="image"  class="img1"> <br>
       <div class="block">Artificial Intelligence</div>
        
    </div>        
</section> <br>
<section class="lower2">
  <div class="lower02">
      <img src="../image/web.jpg" alt="image"  class="img1"> <br>
      <div class="block">Learn python</div>
  
  </div>
  <div class="lower03">
    <img src="../image/science.jpg" alt="image"  class="img1"> <br>
    <a href="https://youtu.be/irqbmMNs2Bo"><div class="block">Learn C</div></a>
    
    
</div>
  <div class="lower04">
      <img src="../image/ai.jpg" alt="image"  class="img1"> <br>
     <div class="block">Learn java</div>
      
  </div>        
</section> <br>
<section class="lower2">
  <div class="lower02">
      <img src="../image/web.jpg" alt="image"  class="img1"> <br>
      <div class="block">Learn C++</div>
  
      
  </div>
  <div class="lower03">
      <img src="../image/science.jpg" alt="image"  class="img1"> <br>
      <div class="block">Learn SQL</div>
      
      
  </div>
  <div class="lower04">
      <img src="../image/ai.jpg" alt="image"  class="img1"> <br>
     <div class="block">Learn DSA</div>
     
  </div>        
</section> <br>
</body>
</html>