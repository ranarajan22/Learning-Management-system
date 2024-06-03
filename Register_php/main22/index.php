<?php
include('db.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
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
                    <li> <a href="../login-sign/login.php" class="navbar-link">Courses</a>   </li>
                    <!-- <li> <a href="#" class="navbar-link">Collections</a></li> -->
                    
                </ul>
            </div>
            <!-- search-bar -->
            <div class="nav-action">
                <input type="text" placeholder="Search" class="search-bar">
                <button type="submit" class="btn-primary">
                 <a href="../login-sign/login.php"> Sign-in</a></button>
            </div>
        </div>
    </header>
     <!-- hero section -->
    <main>
       <div class="banner">
            <div class="banner-text">
                Explore Learn and Grow...!!
            </div>
            <div class="banner-lower">
                Study any topic, anytime. Explore thousands of  <br>
                courses for the lowest price ever!
            </div>

       </div>
    </main>
    <section class="lower-section">
       <div class="lower-flex">
            <div class="lower-hero">
                online courses <br>
                Explore a variety of fresh courses
            </div>
            <div class="lower-hero1">
                Expert Instruction <br>
                Find the right course for you

            </div>
            <div class="lower-hero2">
                Lifetime Access <br>
                Learn on your Schedule
            </div>
        </div>
    </section>
   <h1 class="cour">Courses</h1>
    <section class="lower2">
        <div class="lower02">
            <img src="../image/web.jpg" alt="image"  class="img1"> <br>
            <div class="block">Web Devlopment</div>
        
            <button class="btn-secondary"><a href="../login-sign/login.php">Explore</a></button> 
            <!-- <span>&#8594</span> -->
        </div>
        <div class="lower03">
            <img src="../image/science.jpg" alt="image"  class="img1"> <br>
            <div class="block">Data Science</div>
            
            <button class="btn-secondary"><a href="../login-sign/login.php">Explore</a></button>
        </div>
        <div class="lower04">
            <img src="../image/ai.jpg" alt="image"  class="img1"> <br>
           <div class="block">Artificial Intelligence</div>
            <button class="btn-secondary"><a href="../login-sign/login.php">Explore</a></button>
        </div>        
    </section> <br>
    <button class="btn-primary1"><h3><a href="../login-sign/login.php">Explore More</a></h3></button> <br> <br>
    <section class="foot">
        <footer>
            <div id="footer" class="footer0">
              <h1>Explore Learn and Grow...!!</h1>
            </div>
            <div class="footer1 ">
              Connect with us at<div class="social-media">
                <a href="#">
                  <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="#">
                  <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="#">
                  <ion-icon name="logo-youtube"></ion-icon>
                </a>
                <a href="#">
                  <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="#">
                  <ion-icon name="logo-twitter"></ion-icon>
                </a>
              </div>
            </div>
            <div class="footer2">
              <div class="product">
                <div class="heading">Explore eLearn</div>             
                <div class="div">elearn Devops</div>
                <div class="div">eLearn Data Science & ML </div>
                <div class="div">Become a Mentor</div>
                <div class="div">Become a Career Coach</div>       
              </div> 
              <div class="services">
                <div class="heading">Resources</div>
                <div class="div">eLearn</div>
                <div class="div">Blog</div>
                <div class="div">About us</div>
                <div class="div">contact</div>              
              </div>           
              <div class="Get Help">
                <div class="heading">Get Help</div>
                <div class="div">Help Center</div>
                <div class="div">Privacy Policy</div>
                <div class="div">Terms</div>
                <div class="div">Login</div>
              </div>
            </div>
            <div class="footer3"><h4>Copyright:</h4>@eLearn </div>
  </footer>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> 
    <script src="script.js"></script>
</body>
</html>