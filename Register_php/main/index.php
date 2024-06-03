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
    <title>Learning management system</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <div class="nav-container">
            <!-- logo -->
            <div class="logo-container">
                <a href="#" ><img src="../image/logo11.jpg" alt="logo" class="logo"></a>
            </div>
            <!-- nav-bar -->
            <div class="nav-links-container">
                <ul class="nav-links">
                    <li> <a href="#" class="navbar-link">Home</a>       </li>
                    <li> <a href="#" class="navbar-link">About</a>      </li>
                    <li> <a href="#" class="navbar-link">Explore</a>    </li>
                    <li> <a href="../course/courses.php" class="navbar-link">Courses</a>   </li>
                    <!-- <li> <a href="#" class="navbar-link">Collections</a></li> -->
                    
                </ul>
            </div>
            <!-- search-bar -->
            <div class="nav-action">
    <form action="search.php" method="GET">
        <label for="searchInput"></label>
        <!-- <input type="text" id="searchInput" name="q" placeholder="Search..."> -->
        <input type="text" placeholder="Search" class="search-bar">
        <!-- <button type="submit" class="btn-primary">Search</button> -->
    </form>

    <?php if (isset($_SESSION['username'])) : ?>
        <div id="user-info">
            <p><strong>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</strong></p>
            <a href="../main22/index.php"> <button id="logoutBtn1" class="btn-primary">Logout</button> </a>
        </div>
    <?php else : ?>
        <button id="signInBtn" class="btn-primary">Sign In</button>
    <?php endif; ?>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const signInBtn = document.getElementById('signInBtn');
        const logoutBtn = document.getElementById('logoutBtn');
        const userInfo = document.getElementById('user-info');

        // Check if user is logged in
        <?php if (isset($_SESSION['username'])) : ?>
            showLoggedIn(); // Show logged-in state
        <?php else : ?>
            showLoggedOut(); // Show logged-out state
        <?php endif; ?>

        signInBtn.addEventListener('click', function() {
            // Redirect to sign-in page
            window.location.href = '../login/login.php';
        });

        logoutBtn.addEventListener('click', function() {
            // Perform logout action
            window.location.href = '../main/index.php';
        });

        function showLoggedIn() {
            signInBtn.style.display = 'none'; // Hide sign-in button
            if (userInfo) {
                userInfo.style.display = 'block'; // Show user info section
            }
        }

        function showLoggedOut() {
            if (userInfo) {
                userInfo.style.display = 'none'; // Hide user info section
            }
            logoutBtn.style.display = 'none'; // Hide logout button
            signInBtn.style.display = 'block'; // Show sign-in button
        }
    });
</script>

  

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
        
            <button class="btn-secondary"><a href="../course/courses.php">Explore</a></button> 
            <!-- <span>&#8594</span> -->
        </div>
        <div class="lower03">
            <img src="../image/science.jpg" alt="image"  class="img1"> <br>
            <div class="block">Data Science</div>
            
            <button class="btn-secondary"><a href="../course/courses.php">Explore</a></button>
        </div>
        <div class="lower04">
            <img src="../image/ai.jpg" alt="image"  class="img1"> <br>
           <div class="block">Artificial Intelligence</div>
            <button class="btn-secondary"><a href="../course/courses.php">Explore</a></button>
        </div>        
    </section> <br>
    <!-- <button class="btn-primary1"><h3><a href="../login/signup.php">Explore More</a></h3></button> <br> <br> -->
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