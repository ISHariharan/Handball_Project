<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/user.css">
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
        .search-box{
            margin-top: auto;
            margin-right: auto;
            margin-left: auto;
            margin-right:auto;
        }
        .btn-search {
            color: black;
        }
        li{
          color: white;
        }

    </style>
    <script>
      window.onload = function() {
          <?php
          if(isset($_SESSION['alert_message'])) {
              $alert_message = $_SESSION['alert_message'];
              echo "alert('$alert_message');";
              unset($_SESSION['alert_message']); // Remove the session variable
          }
          ?>
      }
    </script>

</head>
<body>
    <nav class="DropDownbar">
        <a href="user.php" class="Header">Handball Arena</a>
        <ul>
            <li><a href="../S_Work/rules.html">Handball</a>
                <ul class="sub-dropdown">
                    <li style="text-align: center;"><a href="../S_Work/rules.html">History</a></li>
                    <li style="text-align: center;"><a href="../S_Work/rules.html">Rule & Regulation</a></li>
                </ul>
            </li>
            <li><a href="live_stream.php">Live Stream</a></li>
            <li><a href="search_matches.php">Search Matches</a></li>
            <li><a href="update-user.php">Updates</a></li>
            <li><a href="aboutus-user.php">About Us</a></li>
            <a href="#"><li style="color: white;">Hi, <?php echo $_SESSION['username']; ?> &nbsp<a href="logout.html"><i class="fa-solid fa-right-from-bracket"></i></a></li></a>
        </ul>
    </nav>
    <br><br><br><br><br>
    <br><br>
   <!-- Search Box -->
   <div class="indication">
        <p>Do you wanna see the live stream... Click on the ball below</p>
   </div>
   <form action="live.php" method = "POST">
    <div class="search-box">
      <button class="btn-search"><i class="fas fa-search"></i></button>
      <input type="text" name = "team-name" class="input-search" placeholder="Enter Team Name....">
    </div>
   </form>

    

    <br><br><br><br><br><br><br>
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
              <li class="link_name"><a href="login-signin.php">Services</a></li>
              <li>Host Matches</li>
              <li>Analyse Matches</li>
              <li>View Live Matches</li>
              <li>Handball Info</li>
            </ul>
            <ul class="box">
              <li class="link_name">User</li>
              <li><a href="search_matches.php">View Matches</a></li>
              <li>View Analysis</li>
              <li><a href="#">View Streams</a></li>
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
