<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/host.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <script src="https://kit.fontawesome.com/4a665312bb.js" crossorigin="anonymous"></script>
    <title>handballarena.com</title>
    <style>
        .intro-container {
            display: block;
        }
        .login a {
          color: #fff;
        }
        
        .login a:hover {
          color: #000 !important;
        }
        .para-1{
          text-align: center;
        }
        li{
          color: white;
        }
    </style>
</head>
<body>
    <nav class="DropDownbar">
        <a href="#" class="Header">Handball Arena</a>
        <ul>
            <li><a href="#">DashBoard</a></li>
            <li><a href="../HOST/create-1.php">Create Matches</a></li>
            <li><a href="../HOST/updates.php">Update</a></li>
            <li><a href="matches-hosted.php">Matches-Hosted</a></li>
            <a href="#"><li style="color: white;">Hi, <?php echo $_SESSION['username']; ?> &nbsp<a href="logout.html" ><i class="fa-solid fa-right-from-bracket"></i></a></li></a>
    </nav>
    
    <div class="para-1">
        <p>
            Welcome, <?php echo $_SESSION['username']; ?>
        </p>
    </div>
    <br><br><br><br>
    <br><br><br><br>
    <footer>
        <div class="content">
          <div class="top">
            <div class="logo-details">
              <span class="logo_name">Handball Arena</span>
            </div>
            <div class="media-icons">
              <a href="#"><i class="fa-brands fa-facebook"></i></a>
              <a href="#"><i class="fa-brands fa-instagram"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin"></i></a>
              <a href="#"><i class="fa-brands fa-github"></i></a>
              <a href="#"><i class="fa-solid fa-mailbox"></i></a>
            </div>
          </div>
          <div class="link-boxes">
            <ul class="box">
              <li class="link_name">Details</li>
              <li>Info about handball</li>
              <li>Contact us</li>
              <li>About us</li>
              <li>lets play</li>
            </ul>
            <ul class="box">
              <li class="link_name">Services</li>
              <li><a href="#">Host Matches</a></li>
              <li>Analyse Matches</li>
              <li><a href="upload-1.php">View Live Matches</a></li>
              <li>Handball Info</li>
            </ul>
            <ul class="box">
              <li class="link_name"><a href="../HTML/login-signin.php">User</a></li>
              <li>View Matches</li>
              <li>View Analysis</li>
              <li>View Streams</li>
            </ul>
            <ul class="box">
              <li class="link_name"><a href="login-signin.php">Host</a></li>
              <li>Host Analysis</li>
              <li>Host Matches</li>
            </ul>
            <ul class="box input-box">
              <li class="link_name">Follow</li>
              <li><input type="text" placeholder="Enter your email"></li>
              <li><input type="button" value="Send"></li>
            </ul>
          </div>
        </div>
        <div class="bottom-details">
          <div class="bottom_text">
            <span class="copyright_text">Copyright © 2023 <a href="#">Handball Arena.</a>All rights reserved</span>
            <span class="policy_terms">
              <a href="#">Privacy policy</a>
              <a href="#">Terms & condition</a>
            </span>
          </div>
        </div>
      </footer>
</body>
</html>
