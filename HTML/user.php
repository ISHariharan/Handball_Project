<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/index.css">
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
        li{
          color: white;
        }
        .navbar i.fa-solid.fa-right-from-bracket {
          vertical-align: middle; /* Adjust the vertical alignment */
          margin-left: 0px; /* Adjust the left margin to create some space between the username and the icon */
        }
    </style>
</head>
<body>
    <nav class="DropDownbar">
        <a href="#" class="Header">Handball Arena</a>
        <ul class="sub">
            <li><a href="../S_Work/rules-user.php">Handball</a>
                <ul class="sub-dropdown">
                    <li style="text-align: center;"><a href="../S_Work/rules.html">History</a></li>
                    <li style="text-align: center;"><a href="../S_Work/rules.html">Rule & Regulation</a></li>
                </ul>
            </li>
            <li><a href="live_stream.php">Live Stream</a></li>
            <li><a href="search_matches.php">Search Matches</a></li>
            <li><a href="update-user.php">Updates</a></li>
            <li><a href="aboutus-user.php">About Us</a></li>
            <li style="color: white;"><a href="#">Hi, <?php echo $_SESSION['username']; ?> &nbsp</a></li>
            <li><a href="logout.html"><i class="fa-solid fa-right-from-bracket"></i></a></li>
        </ul>
    </nav>
    
    <div class="container">
        <img src="../OTHERS/black-white.png" alt="black-white-image" class="black-white">
        <div class="para-1">
            <p class="p1">
                Game and Experience are hard teachers because they gives the test first and lessons afterwards
            </p>
            <h3 class="h3-1">
                PLAY HANDBALL
                PRAY HANDBALL
            </h3>
        </div>
    </div>
    <br><br>
    <div class="intro-container">
        <div class="intro">
            <h1>Introduction</h1>
            <p class="p3">
                Handball (also known as team handball, European handball or Olympic handball) is a team sport in which two teams of seven players each (six outcourt players and a goalkeeper) pass a ball using their hands with the aim of throwing it into the goal of the opposing team. A standard match consists of two periods of 30 minutes, and the team that scores more goals wins.
            </p>
            <p class="p3">
                Modern handball is played on a court of 40 by 20 metres (131 by 66 ft), with a goal in the middle of each end. The goals are surrounded by a 6-metre (20 ft) zone where only the defending goalkeeper is allowed; goals must be scored by throwing the ball from outside the zone or while "diving" into it. The sport is usually played indoors, but outdoor variants exist in the forms of field handball, Czech handball (which were more common in the past) and beach handball. The game is fast and high-scoring: professional teams now typically score between 20 and 35 goals each, though lower scores were not uncommon until a few decades ago. Body contact is permitted for the defenders trying to stop the attackers from approaching the goal. No protective equipment is mandated, but players may wear soft protective bands, pads and mouth guards.
            </p>
            <p class="p3">
                The modern set of rules was published in 1917 by Karl Schelenz, Max Heiser, and Erich Konigh,on 29 October in Berlin, which day is seen as the date of birth of the sport.The rules have had several revisions since. The first official handball match was played in 1917 in Germany. Karl Schelenz modified the rules in 1919. The first international games were played (under these rules) with men in 1925 (between Germany and Belgium) and with women in 1930 (between Germany and Austria).
            </p>
            <p class="p3">
                Men's handball was first played at the Olympics in the 1936 Summer Olympics in Berlin outdoors, and the next time at the 1972 Summer Olympics in Munich indoors; handball has been an Olympic sport since then. Women's handball was added at the 1976 Summer Olympics.    
            </p>
            <p class="p3">
                The International Handball Federation was formed in 1946 and, as of 2016, has 197 member federations.The sport is most popular in Europe, and European countries have won all medals but one in the men's world championships since 1938. In the women's world championships, only two non-European countries have won the title: South Korea and Brazil. The game also enjoys popularity in East Asia, North Africa and parts of South America.
            </p>
        </div>
    </div>
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
              <li><a href="live_stream.php">View Streams</a></li>
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
