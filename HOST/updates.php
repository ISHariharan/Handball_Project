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
            <form action="update-db.php" method="POST" enctype="multipart/form-data">

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
                <br>
                <div>
                    <input type="text" name='host' id="refree-name" placeholder="Hosted By" required>
                </div>
                <br><br>
                <div class="input" style="margin:auto 0;">
                        <input type="text" name='from' id="refree-name" placeholder="Starting Date - yyyy-mm-dd" required>
                        <input type="text" name='to' id="refree-name" placeholder="Ending Date -  yyyy-mm-dd" required>
                </div>
                <br>
                <div class="form-sub-cont-1">
                    <div class="head-title">Enter Your Contact</div>
                </div>
                <br><br>
                <div class="input" style="margin:auto 0;">
                        <input type="text" name='ph' id="refree-name" placeholder="Phone-number" required>
                        <input type="text" name='email' id="refree-name" placeholder="Email" required>
                </div>
                <br>

               
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