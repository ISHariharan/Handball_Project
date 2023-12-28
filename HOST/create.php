<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/create.css">
    <link rel="stylesheet" href="../CSS/table.css">
    <script src="script.js"></script>
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
        .create{
          background-color: white;
          color: black;
          border-radius: 20px;
        }

        .form-container {
            margin-top: 7vh;
            align-items: left;
            
        }
        .form-container-1 {
            margin-top: 7vh;
            align-items: left;
            
        }
        .table_input{
          border: none;
        }
        h2{
          font-weight: bolder;
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
    </nav>
    
    
    <div class="form-container">
        <form action="upload-1.php" method="POST" enctype="multipart/form-data">
            <!--League image-->
            <p>League-Image</p>
            <input type="file" name='league-image' id="league-image">
            League-Name:  <input type="text" name='league' id="league">

            <p>Team 1 - Image:</p>
            <!--FILE OF IMAGE -1-->
            <input type="file" name='image-1' required>
            Team Name-1: <input type="text" name='name-team-1' id="name-team-1">
            <br>
            <p>Team 2- Image:</p>
            <!--FILE OF IMAGE -2-->
            <input type="file" name='image-2' required>
            Team Name-2: <input type="text" name='name-team-2' id="name-team-2">
            <br><br>
            Match Number:   <input type="text" name='match-number' id="match-number">
            <br><br>
            Refree Name:   <input type="text" name='refree-name' id="refree-name">
            <br><br>
        <h2>TEAM 1 PLAYERS LIST</h2>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> GoalKeeper Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" name='gk1-num-1' placeholder="GK" class="table_input" required></td>
                        <td> <input type="text" name='gk1-name-1' placeholder="GK 1" class="table_input" required></td>
                        <td> <input type="text" name='gk1-pos-1' placeholder="GK 1" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='gk1-num-2' placeholder="GK 2" class="table_input" required></td>
                        <td><input type="text" name='gk1-name-2' placeholder="GK 2" class="table_input" required></td>
                        <td> <input type="text" name='gk1-pos-2' placeholder="GK 2" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='gk1-num-3' placeholder="GK 3" class="table_input" required></td>
                        <td><input type="text" name='gk1-name-3' placeholder="GK 3" class="table_input" required></td>
                        <td> <input type="text" name='gk1-pos-3' placeholder="GK 3" class="table_input" required> </td>
                    </tr>
                </tbody>
            </table>
        </section>


        <!--table form to get player details -->
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Player Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Position <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" name='t1-num-1' placeholder="Player 1" class="table_input" required></td>
                        <td> <input type="text" name='t1-name-1' placeholder="Player 1" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-1' placeholder="Player 1" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-2' placeholder="Player 2" class="table_input" required></td>
                        <td><input type="text" name='t1-name-2' placeholder="Player 2" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-2' placeholder="Player 2" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-3' placeholder="Player 3" class="table_input" required></td>
                        <td><input type="text" name='t1-name-3' placeholder="Player 3" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-3' placeholder="Player 3" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td> <input type="text" name='t1-num-4' placeholder="Player 4" class="table_input" required></td>
                        <td><input type="text" name='t1-name-4' placeholder="Player 4" class="table_input" required> </td>
                        <td> <input type="text" name='t1-pos-4' placeholder="Player 4" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-5' placeholder="Player 5" class="table_input" required></td>
                        <td><input type="text" name='t1-name-5' placeholder="Player 5" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-5' placeholder="Player 5" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-6' placeholder="Player 6" class="table_input" required></td>
                        <td><input type="text" name='t1-name-6' placeholder="Player 6" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-6' placeholder="Player 6" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-7' placeholder="Player 7" class="table_input" required></td>
                        <td><input type="text" name='t1-name-7' placeholder="Player 7" class="table_input" required> </td>
                        <td> <input type="text" name='t1-pos-7' placeholder="Player 7" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-8' placeholder="Player 8" class="table_input" required></td>
                        <td><input type="text" name='t1-name-8' placeholder="Player 8" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-8' placeholder="Player 8" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-9' placeholder="Player 9" class="table_input" required></td>
                        <td><input type="text" name='t1-name-9' placeholder="Player 9" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-9' placeholder="Player 9" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-10' placeholder="Player 10" class="table_input" required></td>
                        <td><input type="text" name='t1-name-10' placeholder="Player 10" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-10' placeholder="Player 10" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-11' placeholder="Player 11" class="table_input" required></td>
                        <td><input type="text" name='t1-name-11' placeholder="Player 11" class="table_input" required> </td>
                        <td> <input type="text" name='t1-pos-11' placeholder="Player 11" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t1-num-12' placeholder="Player 12" class="table_input" required></td>
                        <td><input type="text" name='t1-name-12' placeholder="Player 12" class="table_input" required></td>
                        <td> <input type="text" name='t1-pos-12' placeholder="Player 12" class="table_input" required> </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <br><br><br>
        <h2>TEAM 2 PLAYERS LIST</h2>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> GoalKeeper Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" name='gk2-num-1' placeholder="GK 1" class="table_input" required></td>
                        <td> <input type="text" name='gk2-name-1' placeholder="GK 1" class="table_input" required></td>
                        <td> <input type="text" name='gk2-pos-1' placeholder="GK 1" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='gk2-num-2' placeholder="GK 2" class="table_input" required></td>
                        <td><input type="text" name='gk2-name-2' placeholder="GK 2" class="table_input" required></td>
                        <td> <input type="text" name='gk2-pos-2' placeholder="GK 2" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='gk2-num-3' placeholder="GK 3" class="table_input" required></td>
                        <td><input type="text" name='gk2-name-3' placeholder="GK 3" class="table_input" required></td>
                        <td> <input type="text" name='gk2-pos-3' placeholder="GK 3" class="table_input" required> </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!--table form to get player details -->
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Player Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Position <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> <input type="text" name='t2-num-1' placeholder="Player 1" class="table_input" required></td>
                        <td> <input type="text" name='t2-name-1' placeholder="Player 1" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-1' placeholder="Player 1" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-2' placeholder="Player 2" class="table_input" required></td>
                        <td><input type="text" name='t2-name-2' placeholder="Player 2" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-2' placeholder="Player 2" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-3' placeholder="Player 3" class="table_input" required></td>
                        <td><input type="text" name='t2-name-3' placeholder="Player 3" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-3' placeholder="Player 3" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td> <input type="text" name='t2-num-4' placeholder="Player 4" class="table_input" required></td>
                        <td><input type="text" name='t2-name-4' placeholder="Player 4" class="table_input" required> </td>
                        <td> <input type="text" name='t2-pos-4' placeholder="Player 4" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-5' placeholder="Player 5" class="table_input" required></td>
                        <td><input type="text" name='t2-name-5' placeholder="Player 5" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-5' placeholder="Player 5" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-6' placeholder="Player 6" class="table_input" required></td>
                        <td><input type="text" name='t2-name-6' placeholder="Player 6" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-6' placeholder="Player 6" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-7' placeholder="Player 7" class="table_input" required></td>
                        <td><input type="text" name='t2-name-7' placeholder="Player 7" class="table_input" required> </td>
                        <td> <input type="text" name='t2-pos-7' placeholder="Player 7" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-8' placeholder="Player 8" class="table_input" required></td>
                        <td><input type="text" name='t2-name-8' placeholder="Player 8" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-8' placeholder="Player 8" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-9' placeholder="Player 9" class="table_input" required></td>
                        <td><input type="text" name='t2-name-9' placeholder="Player 9" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-9' placeholder="Player 9" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-10' placeholder="Player 10" class="table_input" required></td>
                        <td><input type="text" name='t2-name-10' placeholder="Player 10" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-10' placeholder="Player 10" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-11' placeholder="Player 11" class="table_input" required></td>
                        <td><input type="text" name='t2-name-11' placeholder="Player 11" class="table_input" required> </td>
                        <td> <input type="text" name='t2-pos-11' placeholder="Player 11" class="table_input" required> </td>
                    </tr>
                    <tr>
                        <td><input type="text" name='t2-num-12' placeholder="Player 12" class="table_input" required></td>
                        <td><input type="text" name='t2-name-12' placeholder="Player 12" class="table_input" required></td>
                        <td> <input type="text" name='t2-pos-12' placeholder="Player 12" class="table_input" required> </td>
                    </tr>

                </tbody>
            </table>
        </section>
        <br><br>
        <input type="submit" name='upload' value='Upload' class="upload">
        </form>
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
              <li><a href="host.php">Host Matches</a></li>
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