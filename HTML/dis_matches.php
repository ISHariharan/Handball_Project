<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/dis_matches.css">
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
            max-width: 70%; /* Set the maximum width you want */
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
        li{
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
        <!-- code here -->
        <div class="match">
            <div class="match-content">
                <div class="column">
                    <div class="team team--home">
                        <div class="team-logo">
                                <img src="../OTHERS/Hustlers.png" alt="Hustlers">
                        </div>
                        <h2 class="team-name">
                            Hustlers
                        </h2>
                    </div>
                </div>
                <?php 
                    $match_no = isset($_SESSION['match_no']) ? $_SESSION['match_no'] : ''; 
                    $refree_name_1 = isset($_SESSION['refree-1']) ? $_SESSION['refree-1'] : '';
                    $refree_name_2 = isset($_SESSION['refree-2']) ? $_SESSION['refree-2'] : '';

                    /* SESSION */
                    $_SESSION['match_no'] = $match_no;

                ?>
                 <div class="column">
                    <div class="match-details">
                        <div class="match-date">
                            Match-Number: 12
                        </div>
                        <div class="match-score">
                            <span class="match-score-number match-score-number--leading" id="team-1-score">
                                0
                            </span>
                            <span class="match-score-divider">
                                :
                            </span>
                            <span class="match-score-number" id="team-2-score">
                                0
                            </span>
                        </div>
                        <div class="match-time-lapsed" style="color: black;">
                            72'
                        </div>
                        <div class="match-referee">
                            Referee 1: Hari 
                            &nbsp;&nbsp;
                            Referee 2: Shadhani
                        </div>
                        <input type="submit" class="match-bet-place" style="color: white; background-color: black;" value="View More">
                    </div>
                </div>
                <div class="column">
                    <div class="team team--away">
                        <div class="team-logo">
                            <img src="../OTHERS/Hunks.png" alt="Hunks">
                        </div>
                        <h2 class="team-name"> 
                        Hunks
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>