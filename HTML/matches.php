<?php
session_start();
// Rest of your code...
?>
<html>
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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["team-name-1"])){
    $conn = mysqli_connect('localhost', 'root', '', 'projecthb');
    $team1 = $_POST['team-name-1'];
    
    $_SESSION['alert_message'] = "Match no you entered is not found. Try again with correct number";

    $details = "select * from match_history where team1_name = '$team1' or team2_name = '$team1' or league_name = '$team1' " ;
    $res = mysqli_query($conn, $details);
    
    if (!$res) {
        die("Error: " . mysqli_error($conn));
    }
   
    if(mysqli_num_rows($res) > 0){
        while($dels = $res->fetch_assoc()){ ?>
            <?php  
                $league_name = $dels['league_name'];
                $sql_league = "select * from league_details where league_name = '$league_name'";
                $res_league = mysqli_query($conn, $sql_league);
                $team_name_1 = $dels['team1_name'];
                $sql_1 = "select * from img_details where team_name = '$team_name_1'";
                $res_1 = mysqli_query($conn, $sql_1);
                $team_name_2 = $dels['team2_name'];
                $sql_2 = "select * from img_details where team_name = '$team_name_2'";
                $res_2 = mysqli_query($conn, $sql_2);

                if(mysqli_num_rows($res_league) > 0){
                    $image_league = mysqli_fetch_assoc($res_league);
                }

                if(mysqli_num_rows($res_1) > 0){
                    $image_1 = mysqli_fetch_assoc($res_1);
                }

                if(mysqli_num_rows($res_2) > 0){
                    $image_2 = mysqli_fetch_assoc($res_2);
                }
                
            ?>
            <form action="user_match.php?mno=<?php echo $dels['match_no'];  ?>" method="POST">
                <div class="container">
                    <div class="match">
                        <div class="match-content">
                            <div class="column">
                                <div class="team team--home">
                                    <div class="team-logo">
                                        <?php if(isset($image_1)) { ?>
                                            <img src="../HOST/images/<?=$image_1['url'] ?>" alt="Image Not Found" class="image-1">
                                        <?php } ?>
                                    </div>
                                    <h2 class="team-name">
                                        <?php echo $dels['team1_name']; ?>
                                    </h2>
                                </div>
                            </div>

                            <!-- Match details section -->
                            <div class="column">
                                <div class="match-details">
                                    <?php $_SESSION['match_no'] = $dels['match_no']; ?>
                                    <div class="match-date">
                                        Match-Number: <?php echo $dels['match_no'];?>
                                    </div>
                                    <div class="match-score">
                                        <span class="match-score-number match-score-number--leading" id="team-1-score">
                                            <?php echo $dels['goals1']; ?>
                                        </span>
                                        <span class="match-score-divider">
                                            :
                                        </span>
                                        <span class="match-score-number" id="team-2-score">
                                            <?php echo $dels['goals2']; ?>
                                        </span>
                                    </div>

                                    <!-- Referee Name -->
                                    <?php
                                        $match_no = $dels['match_no'];
                                        $referee_query = "select * from refree_details where Match_no = '$match_no'";
                                        $res_referee = mysqli_query($conn, $referee_query);
                                        $row_referee = mysqli_fetch_assoc($res_referee);
                                    ?>

                                    <div class="match-referee">
                                        Referee 1: <?php echo $row_referee['Refree_name1']; ?>
                                        &nbsp;&nbsp;
                                        Referee 2: <?php echo $row_referee['Refree_name2']; ?>
                                    </div>

                                    <input type="submit" class="match-bet-place" style="color: white; background-color: black;" value="View More">
                                </div>
                            </div>

                            <div class="column">
                                <div class="team team--away">
                                    <div class="team-logo">
                                    <?php if(isset($image_2)) { ?>
                                        <img src="../HOST/images/<?= $image_2['url'] ?>" alt="Image Not Found" class="image-2">
                                    <?php } ?>
                                    </div>
                                    <h2 class="team-name"> 
                                        <?php echo $dels['team2_name']; ?>
                                    </h2>
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
}

?>

</body>
</html>
