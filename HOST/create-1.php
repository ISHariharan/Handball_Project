<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/create-1.css">
    <link rel="stylesheet" href="../CSS/table.css">
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <script src="https://kit.fontawesome.com/4a665312bb.js" crossorigin="anonymous"></script>
    <title>handballarena.com</title>
</head>

<body>
    <nav class="DropDownbar">
        <a href="#" class="Header">Handball Arena</a>
        <ul>
            <li><a href="#">DashBoard</a></li>
    </nav>
    <center>
        <div class="form-container">
            <form action="upload-1.php" method="POST" enctype="multipart/form-data">

                <!-- League-Details-Setion -->
                <div class="form-sub-cont-1">
                    <div class="head-title">Create New League and Match</div>
                    <div class="input-league">
                        <div class="input">
                            <label for="league-image" class="label-image" id="lg-image"></label>
                            <input type="file" name='league-image' id="league-image">
                        </div>
                        <div class="input" style="margin:auto 0;">
                            <input type="text" name='league' id="league" placeholder="League Name"
                                style="width: 28rem;"><br><br>
                            <input type="text" name='refree-name-1' id="refree-name" placeholder="Refree Name 1" required>
                            <input type="text" name='refree-name-2' id="refree-name" placeholder="Refree Name 2" required>
                        </div>
                    </div>
                </div>

                <!--Team Details Section-->
                <div class="form-sub-cont-2">
                    <div class="input-team">
                        <div class="head-title" style="background-color: #000;">TEAM 1</div>
                        <div class="input-team-sub">
                            <label for="image-1" class="label-image-2" id="t1image"></label>
                            <input type="file" name='image-1' id="image-1" required>
                            <input type="text" name='name-team-1' id="name-team-1" placeholder="Team Name-1">
                        </div>

                    </div>
                    <div class="input-team">
                        <div class="head-title" style="background-color: #000;">TEAM 2</div>
                        <div class="input-team-sub">
                            <label for="image-2" class="label-image-2" id="t2image"></label>
                            <input type="file" name='image-2' id="image-2" required>
                            <input type="text" name='name-team-2' id="name-team-2" placeholder="Team Name-2">
                        </div>
                    </div>
                </div>

                <br>

                <div class="team-table">
                    <div class="team-a">
                        <div class="head-title" style="background-color: #c7c3c3;color: #000;font-weight: bold;">TEAM 1 PLAYERS</div>
                        <section class="table__body"><br>
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
                                        <td> <input type="text" name='gk1-num-1' placeholder="GK" class="table_input p-no-col"
                                                required></td>
                                        <td> <input type="text" name='gk1-name-1' placeholder="GK 1" class="table_input"
                                                required></td>
                                        <td> GK </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='gk1-num-2' placeholder="GK 2" class="table_input p-no-col"
                                                required></td>
                                        <td><input type="text" name='gk1-name-2' placeholder="GK 2" class="table_input"
                                                required></td>
                                        <td> GK </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='gk1-num-3' placeholder="GK 3" class="table_input p-no-col"
                                                required></td>
                                        <td><input type="text" name='gk1-name-3' placeholder="GK 3" class="table_input"
                                                required></td>
                                        <td> GK </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>

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
                                        <td> <input type="text" name='t1-num-1' placeholder="Player 1"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td> <input type="text" name='t1-name-1' placeholder="Player 1"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t1-pos-1' placeholder="Player 1"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-2' placeholder="Player 2"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-2' placeholder="Player 2"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-2' placeholder="Player 2"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-3' placeholder="Player 3"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-3' placeholder="Player 3"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-3' placeholder="Player 3"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="text" name='t1-num-4' placeholder="Player 4"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-4' placeholder="Player 4"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-4' placeholder="Player 4"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-5' placeholder="Player 5"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-5' placeholder="Player 5"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-5' placeholder="Player 5"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-6' placeholder="Player 6"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-6' placeholder="Player 6"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-6' placeholder="Player 6"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-7' placeholder="Player 7"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-7' placeholder="Player 7"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-7' placeholder="Player 7"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-8' placeholder="Player 8"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-8' placeholder="Player 8"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-8' placeholder="Player 8"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-9' placeholder="Player 9"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t1-name-9' placeholder="Player 9"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t1-pos-9' placeholder="Player 9"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-10' placeholder="Player 10"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t1-name-10' placeholder="Player 10"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t1-pos-10' placeholder="Player 10"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-11' placeholder="Player 11"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t1-name-11' placeholder="Player 11"
                                                class="table_input" required> </td>
                                        <td> <input type="text" name='t1-pos-11' placeholder="Player 11"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t1-num-12' placeholder="Player 12"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t1-name-12' placeholder="Player 12"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t1-pos-12' placeholder="Player 12"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>
                                </tbody><br>
                            </table>
                        </section>
                    </div>

                    <br>

                    <div class="team-a">
                        <div class="head-title" style="background-color: #c7c3c3;color: #000;font-weight: bold;">TEAM 2 PLAYERS</div>
                        <section class="table__body"><br>
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
                                        <td> <input type="text" name='gk2-num-1' placeholder="GK 1" class="table_input p-no-col"
                                                required>
                                        </td>
                                        <td> <input type="text" name='gk2-name-1' placeholder="GK 1" class="table_input"
                                                required>
                                        </td>
                                        <td> GK
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='gk2-num-2' placeholder="GK 2" class="table_input p-no-col"
                                                required>
                                        </td>
                                        <td><input type="text" name='gk2-name-2' placeholder="GK 2" class="table_input"
                                                required>
                                        </td>
                                        <td> GK
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='gk2-num-3' placeholder="GK 3" class="table_input p-no-col"
                                                required>
                                        </td>
                                        <td><input type="text" name='gk2-name-3' placeholder="GK 3" class="table_input"
                                                required>
                                        </td>
                                        <td> GK
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </section><br>

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
                                        <td> <input type="text" name='t2-num-1' placeholder="Player 1"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td> <input type="text" name='t2-name-1' placeholder="Player 1"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t2-pos-1' placeholder="Player 1"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-2' placeholder="Player 2"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-2' placeholder="Player 2"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-2' placeholder="Player 2"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-3' placeholder="Player 3"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-3' placeholder="Player 3"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-3' placeholder="Player 3"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input type="text" name='t2-num-4' placeholder="Player 4"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-4' placeholder="Player 4"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-4' placeholder="Player 4"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-5' placeholder="Player 5"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-5' placeholder="Player 5"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-5' placeholder="Player 5"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-6' placeholder="Player 6"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-6' placeholder="Player 6"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-6' placeholder="Player 6"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-7' placeholder="Player 7"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-7' placeholder="Player 7"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-7' placeholder="Player 7"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-8' placeholder="Player 8"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-8' placeholder="Player 8"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-8' placeholder="Player 8"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-9' placeholder="Player 9"
                                                class="table_input p-no-col" required>
                                        </td>
                                        <td><input type="text" name='t2-name-9' placeholder="Player 9"
                                                class="table_input" required>
                                        </td>
                                        <td> <input type="text" name='t2-pos-9' placeholder="Player 9"
                                                class="table_input p-pos-col" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-10' placeholder="Player 10"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t2-name-10' placeholder="Player 10"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t2-pos-10' placeholder="Player 10"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-11' placeholder="Player 11"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t2-name-11' placeholder="Player 11"
                                                class="table_input" required> </td>
                                        <td> <input type="text" name='t2-pos-11' placeholder="Player 11"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name='t2-num-12' placeholder="Player 12"
                                                class="table_input p-no-col" required></td>
                                        <td><input type="text" name='t2-name-12' placeholder="Player 12"
                                                class="table_input" required></td>
                                        <td> <input type="text" name='t2-pos-12' placeholder="Player 12"
                                                class="table_input p-pos-col" required> </td>
                                    </tr>

                                </tbody>
                            </table><br>
                        </section>
                    </div>
                </div>
                <br><br><br>
                <div class="link">
                    <input type="text" name="link" placeholder="match link">
                </div>
                <br><br>
                <input type="submit" name='upload' value='Upload' class="upload" style="background: #000;color: #fff;cursor: pointer;width: 50%;font-weight: bold;">
            </form>
        </div>
    </center>





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
    <!-- JS -->
    <script>
        function addImagePreview(inputId, containerId) {
            const imageInput = document.getElementById(inputId);
            const imageContainer = document.getElementById(containerId);

            imageInput.addEventListener('change', function (event) {
                const fileInput = event.target;
                const file = fileInput.files[0];

                if (file) {
                    const reader = new FileReader();
                    reader.addEventListener('load', () => {
                        const imageUrl = reader.result;
                        imageContainer.style.backgroundImage = `url(${imageUrl})`;
                    });
                    reader.readAsDataURL(file);
                }
            });
        }

        // Call the function for each image preview
        addImagePreview('league-image', 'lg-image');
        addImagePreview('image-1', 't1image');
        addImagePreview('image-2', 't2image');
    </script>
</body>

</html>