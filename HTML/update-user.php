<?php
session_start();
// Rest of your code...
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/update-matches.css">
    <title>handballarena.com</title>
    <style>
        .team-logo img {
            width: 100px;
            height: 100px;
        }
        .league-image{
            height: 40px;
            width: 40px;
        }
        .container {
            /* Container styles */
            display: flex;
            flex-direction: column;
            max-width: 95%; /* Set the maximum width you want */
            margin: 0 auto; /* This centers the container horizontally */
            padding: 20px; /* Add padding if desired */
        }

        .table__body {
            position: relative;
            margin-top: 20px; /* Adjust the margin as needed */
        }
        h2{
            text-align: center;
            font-weight: bolder;
        }
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh; /* Adjust this to your needs */
        }

        .upload {
            background: #000;
            color: #fff;
            cursor: pointer;
            width: 50%;
            font-weight: bold;
        }
    </style>
</head>
<body>
    

<!-- Navigation Bar -->


<?php

    $conn = mysqli_connect('localhost', 'root', '', 'projecthb');
    
    $_SESSION['alert_message'] = "Match no you entered is not found. Try again with correct number";

    $details = "SELECT * FROM updates WHERE lfrom >= CURDATE() AND lto >= CURDATE()" ;
    $res = mysqli_query($conn, $details);
    
    if (!$res) {
        die("Error: " . mysqli_error($conn));
    }
   
    if(mysqli_num_rows($res) > 0){
        while($dels = $res->fetch_assoc()){ ?>
            <form>
                <div class="container">
                    <div class="match">
                        <div class="match-content">
                            <div class="column">
                                <div class="team team--home">
                                    <div class="team-logo">
                                        <img src="../HOST/images/<?=$dels['league_img'] ?>" alt="Image Not Found" class="image-1">
                                    </div>
                                    <h2 class="team-name">
                                        <?php echo $dels['league_name']; ?>
                                    </h2>
                                </div>
                            </div>

                            <!-- Match details section -->
                            <div class="column">
                                <div class="match-details">
                                    <div class="match-score">
                                        <span class="match-score-number match-score-number--leading" id="team-1-score">
                                            <?php echo $dels['lfrom']; ?>
                                        </span>
                                        <span class="match-score-divider">
                                            to
                                        </span>
                                        <span class="match-score-number" id="team-2-score">
                                            <?php echo $dels['lto']; ?>
                                        </span>
                                    </div>

                                    <div class="match-referee">
                                        Referee 1: <?php echo $dels['refree1']; ?>
                                        &nbsp;&nbsp;
                                        Referee 2: <?php echo $dels['refree2']; ?>
                                    </div>

                                    <input type="submit" class="match-bet-place" style="color: white; background-color: black;" value="updates">
                                </div>
                            </div>

                            <div class="column">
                                <div class="team team--away">
                                    <div class="team-logo">
                                        <h2 class="team-name"> 
                                            <p>Hosted By</p>
                                            <?php echo $dels['host']; ?>
                                        </h2>
                                    </div>
                                    <p>Contact:  <?php echo $dels['ph']; ?></p>
                                    <p>Email: <?php echo $dels['email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        <?php }
    }
    else{
        header("Location: search_matches.php");
        exit();
    }


?>

</body>
</html>
