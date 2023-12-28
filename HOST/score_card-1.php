<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/score_card.css">
    <script src="script.js"></script>
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
    <?php 
    //SESSIONS FOR THE NEXT ANALYZE PAGE 
    ?>
    
    <?php
        include "db_conn.php";
        $team_name_1 = $_SESSION['team-1'];
        $team_name_2 = $_SESSION['team-2'];
        $league_name = $_SESSION['league-name'];

        /* Team 1 */
        $_SESSION['team-1'] = $team_name_1;
        $_SESSION['team-2'] = $team_name_2;
        $_SESSION['league-name'] = $league_name;

        /*images*/
        $league_img = $_SESSION['$league_img'];
        $team1_img = $_SESSION['team1_img'];
        $team2_img = $_SESSION['team2_img'];

        /*Session images */
        $_SESSION['$league_img'] = $league_img;
        $_SESSION['team1_img'] = $team1_img;
        $_SESSION['team2_img'] = $team2_img;

        $sql_league = "select * from league_details where league_name = '$league_name'";
        $res_league = mysqli_query($conn, $sql_league);

        $sql_1 = "select * from img_details where team_name = '$team_name_1'";
        $res_1 = mysqli_query($conn, $sql_1);

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
    <div class="container">
        <!-- code here -->
        <div class="match">
            <div class="match-header">
                <div class="match-status" style="color: white; background-color: black;">Live</div>
                <div class="match-tournament">
                    <?php if(isset($image_league)) { ?>
                        <img src="images/<?= $image_league['league_img'] ?>" alt="" class="league-image">
                    <?php } ?>&nbsp;
                    <?php echo $league_name; ?>
                </div>
                
                <div class="match-actions">
                    <button class="btn-icon"><i class="material-icons-outlined">grade</i></button>
                    <button class="btn-icon"><i class="material-icons-outlined">add_alert</i></button>
                </div>
            </div>
            <div class="match-content">
                <div class="column">
                    <div class="team team--home">
                        <div class="team-logo">
                            <?php if(isset($image_1)) { ?>
                                <img src="images/<?= $image_1['url'] ?>" alt="Image Not Found" class="image-1">
                            <?php } ?>
                        </div>
                        <h2 class="team-name">
                            <?php echo $team_name_1; ?>
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
                            Match-Number: <?php echo $match_no; ?>
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
                            Referee 1: <?php echo $refree_name_1; ?> 
                            &nbsp;&nbsp;
                            Referee 2: <?php echo $refree_name_2; ?>
                        </div>
                        <div class="match-bet-options">
                            <input type="button" class="match-bet-option" onclick="team_1(1)" value="+">
                            <input type="button" class="match-bet-option" onclick="team_1(-1)" value="-">
                            <input type="button" class="match-bet-option" onclick="team_2(1)" value="+">
                            <input type="button" class="match-bet-option" onclick="team_2(-1)" value="-">
                        </div>
                        <button class="match-bet-place" style="color: white; background-color: black;">Score Card</button>
                    </div>
                </div>
                <div class="column">
                    <div class="team team--away">
                        <div class="team-logo">
                            <?php if(isset($image_2)) { ?>
                                <img src="images/<?= $image_2['url'] ?>" alt="Image Not Found" class="image-2">
                            <?php } ?>
                        </div>
                        <h2 class="team-name"> 
                        <?php echo $team_name_2; ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    &nbsp;
          
    <!-- Goal Keeper Details team 1 -->
    <?php 
        $gk1_player_num1 = isset($_SESSION['gk1_player_num1']) ? $_SESSION['gk1_player_num1'] : '';
        $gk1_player_name1 = isset($_SESSION['gk1_player_name1']) ? $_SESSION['gk1_player_name1'] : '';
    
        $gk1_player_num2 = isset($_SESSION['gk1_player_num2']) ? $_SESSION['gk1_player_num2'] : '';
        $gk1_player_name2 = isset($_SESSION['gk1_player_name2']) ? $_SESSION['gk1_player_name2'] : '';
        
        $gk1_player_num3 = isset($_SESSION['gk1_player_num3']) ? $_SESSION['gk1_player_num3'] : '';
        $gk1_player_name3 = isset($_SESSION['gk1_player_name3']) ? $_SESSION['gk1_player_name3'] : '';
        /* GoalKeeper Sessions */
        $_SESSION['gk1_player_num1'] = $gk1_player_num1;
        $_SESSION['gk1_player_name1'] = $gk1_player_name1;
        $_SESSION['gk1_player_num2'] = $gk1_player_num2;
        $_SESSION['gk1_player_name2'] = $gk1_player_name2;
        $_SESSION['gk1_player_num3'] = $gk1_player_num3;
        $_SESSION['gk1_player_name3'] = $gk1_player_name3;
    ?>

    <!--Table to display the players of the team-->
    <h2>
    <?php echo $team_name_1; ?> Goal Keepers 
    </h2>
    <!--Goal Keepers list-->
    
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Goalkeeper Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Position <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Goals Saved <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Attempts To Save <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $gk1_player_num1; ?></td>
                        <td><?php echo $gk1_player_name1; ?></td>
                        <td><?php echo 'GK'; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_1(1)" class="match-bet-option">
                                <span id="totalclicks-1"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_1(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_gk1(1)" class="match-bet-option">
                                <span id="total-attempts-gk1-1"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_gk1(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td> <?php echo $gk1_player_num2; ?> </td>
                        <td> <?php echo $gk1_player_name2; ?> </td>
                        <td> <?php echo 'GK'; ?> </td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_2(1)" class="match-bet-option">
                                <span id="totalclicks-2"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_2(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_gk2(1)" class="match-bet-option">
                                <span id="total-attempts-gk1-2"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_gk2(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td> <?php echo $gk1_player_num3; ?> </td>
                        <td> <?php echo $gk1_player_name3; ?> </td>
                        <td> <?php echo 'GK'; ?> </td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_3(1)" class="match-bet-option">
                                <span id="totalclicks-3"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_3(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_gk3(1)" class="match-bet-option">
                                <span id="total-attempts-gk1-3"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_gk3(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
        <!--Team 1 player list-->
        <?php
            //player 1
            $t1_player_num1 = isset($_SESSION['t1_player_num1']) ? $_SESSION['t1_player_num1'] : '';
            $t1_player_name1 = isset($_SESSION['t1_player_name1']) ? $_SESSION['t1_player_name1'] : '';
            $t1_player_pos1 = isset($_SESSION['t1_player_pos1']) ? $_SESSION['t1_player_pos1'] : '';
            //player 2
            $t1_player_num2 = isset($_SESSION['t1_player_num2']) ? $_SESSION['t1_player_num2'] : '';
            $t1_player_name2 = isset($_SESSION['t1_player_name2']) ? $_SESSION['t1_player_name2'] : '';
            $t1_player_pos2 = isset($_SESSION['t1_player_pos2']) ? $_SESSION['t1_player_pos2'] : '';
            //player 3
            $t1_player_num3 = isset($_SESSION['t1_player_num3']) ? $_SESSION['t1_player_num3'] : '';
            $t1_player_name3 = isset($_SESSION['t1_player_name3']) ? $_SESSION['t1_player_name3'] : '';
            $t1_player_pos3 = isset($_SESSION['t1_player_pos3']) ? $_SESSION['t1_player_pos3'] : '';
            //player 4
            $t1_player_num4 = isset($_SESSION['t1_player_num4']) ? $_SESSION['t1_player_num4'] : '';
            $t1_player_name4 = isset($_SESSION['t1_player_name4']) ? $_SESSION['t1_player_name4'] : '';
            $t1_player_pos4 = isset($_SESSION['t1_player_pos4']) ? $_SESSION['t1_player_pos4'] : '';
            //player 5
            $t1_player_num5 = isset($_SESSION['t1_player_num5']) ? $_SESSION['t1_player_num5'] : '';
            $t1_player_name5 = isset($_SESSION['t1_player_name5']) ? $_SESSION['t1_player_name5'] : '';
            $t1_player_pos5 = isset($_SESSION['t1_player_pos5']) ? $_SESSION['t1_player_pos5'] : '';
            //player 6
            $t1_player_num6 = isset($_SESSION['t1_player_num6']) ? $_SESSION['t1_player_num6'] : '';
            $t1_player_name6 = isset($_SESSION['t1_player_name6']) ? $_SESSION['t1_player_name6'] : '';
            $t1_player_pos6 = isset($_SESSION['t1_player_pos6']) ? $_SESSION['t1_player_pos6'] : '';
            //player 7
            $t1_player_num7 = isset($_SESSION['t1_player_num7']) ? $_SESSION['t1_player_num7'] : '';
            $t1_player_name7 = isset($_SESSION['t1_player_name7']) ? $_SESSION['t1_player_name7'] : '';
            $t1_player_pos7 = isset($_SESSION['t1_player_pos7']) ? $_SESSION['t1_player_pos7'] : '';
            //player 8
            $t1_player_num8 = isset($_SESSION['t1_player_num8']) ? $_SESSION['t1_player_num8'] : '';
            $t1_player_name8 = isset($_SESSION['t1_player_name8']) ? $_SESSION['t1_player_name8'] : '';
            $t1_player_pos8 = isset($_SESSION['t1_player_pos8']) ? $_SESSION['t1_player_pos8'] : '';
            //player 9
            $t1_player_num9 = isset($_SESSION['t1_player_num9']) ? $_SESSION['t1_player_num9'] : '';
            $t1_player_name9 = isset($_SESSION['t1_player_name9']) ? $_SESSION['t1_player_name9'] : '';
            $t1_player_pos9 = isset($_SESSION['t1_player_pos9']) ? $_SESSION['t1_player_pos9'] : '';
            //player 10
            $t1_player_num10 = isset($_SESSION['t1_player_num10']) ? $_SESSION['t1_player_num10'] : '';
            $t1_player_name10 = isset($_SESSION['t1_player_name10']) ? $_SESSION['t1_player_name10'] : '';
            $t1_player_pos10 = isset($_SESSION['t1_player_pos10']) ? $_SESSION['t1_player_pos10'] : '';
            //player 11
            $t1_player_num11 = isset($_SESSION['t1_player_num11']) ? $_SESSION['t1_player_num11'] : '';
            $t1_player_name11 = isset($_SESSION['t1_player_name11']) ? $_SESSION['t1_player_name11'] : '';
            $t1_player_pos11 = isset($_SESSION['t1_player_pos11']) ? $_SESSION['t1_player_pos11'] : '';
            //player 12
            $t1_player_num12 = isset($_SESSION['t1_player_num12']) ? $_SESSION['t1_player_num12'] : '';
            $t1_player_name12 = isset($_SESSION['t1_player_name12']) ? $_SESSION['t1_player_name12'] : '';
            $t1_player_pos12 = isset($_SESSION['t1_player_pos12']) ? $_SESSION['t1_player_pos12'] : '';

            /* Team 1 Player Sessions */
            $_SESSION['t1_player_num1'] = $t1_player_num1;
            $_SESSION['t1_player_name1'] = $t1_player_name1;
            $_SESSION['t1_player_pos1'] = $t1_player_pos1;
            $_SESSION['t1_player_num2'] = $t1_player_num2;
            $_SESSION['t1_player_name2'] = $t1_player_name2;
            $_SESSION['t1_player_pos2'] = $t1_player_pos2;
            $_SESSION['t1_player_num3'] = $t1_player_num3;
            $_SESSION['t1_player_name3'] = $t1_player_name3;
            $_SESSION['t1_player_pos3'] = $t1_player_pos3;
            $_SESSION['t1_player_num4'] = $t1_player_num4;
            $_SESSION['t1_player_name4'] = $t1_player_name4;
            $_SESSION['t1_player_pos4'] = $t1_player_pos4;
            $_SESSION['t1_player_num5'] = $t1_player_num5;
            $_SESSION['t1_player_name5'] = $t1_player_name5;
            $_SESSION['t1_player_pos5'] = $t1_player_pos5;
            $_SESSION['t1_player_num6'] = $t1_player_num6;
            $_SESSION['t1_player_name6'] = $t1_player_name6;
            $_SESSION['t1_player_pos6'] = $t1_player_pos6;
            $_SESSION['t1_player_num7'] = $t1_player_num7;
            $_SESSION['t1_player_name7'] = $t1_player_name7;
            $_SESSION['t1_player_pos7'] = $t1_player_pos7;
            $_SESSION['t1_player_num8'] = $t1_player_num8;
            $_SESSION['t1_player_name8'] = $t1_player_name8;
            $_SESSION['t1_player_pos8'] = $t1_player_pos8;
            $_SESSION['t1_player_num9'] = $t1_player_num9;
            $_SESSION['t1_player_name9'] = $t1_player_name9;
            $_SESSION['t1_player_pos9'] = $t1_player_pos9;
            $_SESSION['t1_player_num10'] = $t1_player_num10;
            $_SESSION['t1_player_name10'] = $t1_player_name10;
            $_SESSION['t1_player_pos10'] = $t1_player_pos10;
            $_SESSION['t1_player_num11'] = $t1_player_num11;
            $_SESSION['t1_player_name11'] = $t1_player_name11;
            $_SESSION['t1_player_pos11'] = $t1_player_pos11;
            $_SESSION['t1_player_num12'] = $t1_player_num12;
            $_SESSION['t1_player_name12'] = $t1_player_name12;
            $_SESSION['t1_player_pos12'] = $t1_player_pos12;
        ?>
        <!--Team 1 Name list-->
        <h2>
            <?php echo $team_name_1; ?> Name List
        </h2>
    
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Player Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Position <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Goals Scored <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Attempts <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $t1_player_num1; ?></td>
                        <td><?php echo $t1_player_name1; ?></td>
                        <td><?php echo $t1_player_pos1; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_4(1)" class="match-bet-option">
                                <span id="totalclicks-4"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_4(-1)" class="match-bet-option">
                        </td>
                        <td> 
                            <input type="button" value="+" onclick="t1_total_atm_p1(1)" class="match-bet-option">
                            <span id="total-attempts-4"> 0 </span>
                            <input type="button" value="-" onclick="t1_total_atm_p1(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num2; ?></td>
                        <td><?php echo $t1_player_name2; ?></td>
                        <td><?php echo $t1_player_pos2; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_5(1)" class="match-bet-option">
                                <span id="totalclicks-5"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_5(-1)" class="match-bet-option">
                        </td>
                        <td>
                            <input type="button" value="+" onclick="t1_total_atm_p2(1)" class="match-bet-option">
                            <span id="total-attempts-5"> 0 </span>
                            <input type="button" value="-" onclick="t1_total_atm_p2(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num3; ?></td>
                        <td><?php echo $t1_player_name3; ?></td>
                        <td><?php echo $t1_player_pos3; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_6(1)" class="match-bet-option">
                                <span id="totalclicks-6"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_6(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p3(1)" class="match-bet-option">
                                <span id="total-attempts-6"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p3(-1)" class="match-bet-option">
                         
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num4; ?></td>
                        <td><?php echo $t1_player_name4; ?></td>
                        <td><?php echo $t1_player_pos4; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_7(1)" class="match-bet-option">
                                <span id="totalclicks-7"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_7(-1)" class="match-bet-option">
                        </td>
                        <td>
                            
                                <input type="button" value="+" onclick="t1_total_atm_p4(1)" class="match-bet-option">
                                <span id="total-attempts-7"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p4(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num5; ?></td>
                        <td><?php echo $t1_player_name5; ?></td>
                        <td><?php echo $t1_player_pos5; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_8(1)" class="match-bet-option">
                                <span id="totalclicks-8"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_8(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p5(1)" class="match-bet-option">
                                <span id="total-attempts-8"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p5(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num6; ?></td>
                        <td><?php echo $t1_player_name6; ?></td>
                        <td><?php echo $t1_player_pos6; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_9(1)" class="match-bet-option">
                                <span id="totalclicks-9"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_9(-1)" class="match-bet-option">
                        </td>
                        <td>
                          
                                <input type="button" value="+" onclick="t1_total_atm_p6(1)" class="match-bet-option">
                                <span id="total-attempts-9"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p6(-1)" class="match-bet-option">
                            
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num7; ?></td>
                        <td><?php echo $t1_player_name7; ?></td>
                        <td><?php echo $t1_player_pos7; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_10(1)" class="match-bet-option">
                                <span id="totalclicks-10"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_10(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p7(1)" class="match-bet-option">
                                <span id="total-attempts-10"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p7(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num8; ?></td>
                        <td><?php echo $t1_player_name8; ?></td>
                        <td><?php echo $t1_player_pos8; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_11(1)" class="match-bet-option">
                                <span id="totalclicks-11"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_11(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p8(1)" class="match-bet-option">
                                <span id="total-attempts-11"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p8(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num9; ?></td>
                        <td><?php echo $t1_player_name9; ?></td>
                        <td><?php echo $t1_player_pos9; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_12(1)" class="match-bet-option">
                                <span id="totalclicks-12"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_12(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p9(1)" class="match-bet-option">
                                <span id="total-attempts-12"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p9(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num10; ?></td>
                        <td><?php echo $t1_player_name10; ?></td>
                        <td><?php echo $t1_player_pos10; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_13(1)" class="match-bet-option">
                                <span id="totalclicks-13"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_13(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p10(1)" class="match-bet-option">
                                <span id="total-attempts-13"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p10(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num11; ?></td>
                        <td><?php echo $t1_player_name11; ?></td>
                        <td><?php echo $t1_player_pos11; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_14(1)" class="match-bet-option">
                                <span id="totalclicks-14"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_14(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p11(1)" class="match-bet-option">
                                <span id="total-attempts-14"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p11(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t1_player_num12; ?></td>
                        <td><?php echo $t1_player_name12; ?></td>
                        <td><?php echo $t1_player_pos12; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_15(1)" class="match-bet-option">
                                <span id="totalclicks-15"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_15(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t1_total_atm_p12(1)" class="match-bet-option">
                                <span id="total-attempts-15"> 0 </span>
                                <input type="button" value="-" onclick="t1_total_atm_p12(-1)" class="match-bet-option">
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
    
        <!--Team 2 player list-->
        <?php
            //player 1
            $t2_player_num1 = isset($_SESSION['t2_player_num1']) ? $_SESSION['t2_player_num1'] : '';
            $t2_player_name1 = isset($_SESSION['t2_player_name1']) ? $_SESSION['t2_player_name1'] : '';
            $t2_player_pos1 = isset($_SESSION['t2_player_pos1']) ? $_SESSION['t2_player_pos1'] : '';
            //player 2
            $t2_player_num2 = isset($_SESSION['t2_player_num2']) ? $_SESSION['t2_player_num2'] : '';
            $t2_player_name2 = isset($_SESSION['t2_player_name2']) ? $_SESSION['t2_player_name2'] : '';
            $t2_player_pos2 = isset($_SESSION['t2_player_pos2']) ? $_SESSION['t2_player_pos2'] : '';
            //player 3
            $t2_player_num3 = isset($_SESSION['t2_player_num3']) ? $_SESSION['t2_player_num3'] : '';
            $t2_player_name3 = isset($_SESSION['t2_player_name3']) ? $_SESSION['t2_player_name3'] : '';
            $t2_player_pos3 = isset($_SESSION['t2_player_pos3']) ? $_SESSION['t2_player_pos3'] : '';
            //player 4
            $t2_player_num4 = isset($_SESSION['t2_player_num4']) ? $_SESSION['t2_player_num4'] : '';
            $t2_player_name4 = isset($_SESSION['t2_player_name4']) ? $_SESSION['t2_player_name4'] : '';
            $t2_player_pos4 = isset($_SESSION['t2_player_pos4']) ? $_SESSION['t2_player_pos4'] : '';
            //player 5
            $t2_player_num5 = isset($_SESSION['t2_player_num5']) ? $_SESSION['t2_player_num5'] : '';
            $t2_player_name5 = isset($_SESSION['t2_player_name5']) ? $_SESSION['t2_player_name5'] : '';
            $t2_player_pos5 = isset($_SESSION['t2_player_pos5']) ? $_SESSION['t2_player_pos5'] : '';
            //player 6
            $t2_player_num6 = isset($_SESSION['t2_player_num6']) ? $_SESSION['t2_player_num6'] : '';
            $t2_player_name6 = isset($_SESSION['t2_player_name6']) ? $_SESSION['t2_player_name6'] : '';
            $t2_player_pos6 = isset($_SESSION['t2_player_pos6']) ? $_SESSION['t2_player_pos6'] : '';
            //player 7
            $t2_player_num7 = isset($_SESSION['t2_player_num7']) ? $_SESSION['t2_player_num7'] : '';
            $t2_player_name7 = isset($_SESSION['t2_player_name7']) ? $_SESSION['t2_player_name7'] : '';
            $t2_player_pos7 = isset($_SESSION['t2_player_pos7']) ? $_SESSION['t2_player_pos7'] : '';
            //player 8
            $t2_player_num8 = isset($_SESSION['t2_player_num8']) ? $_SESSION['t2_player_num8'] : '';
            $t2_player_name8 = isset($_SESSION['t2_player_name8']) ? $_SESSION['t2_player_name8'] : '';
            $t2_player_pos8 = isset($_SESSION['t2_player_pos8']) ? $_SESSION['t2_player_pos8'] : '';
            //player 9
            $t2_player_num9 = isset($_SESSION['t2_player_num9']) ? $_SESSION['t2_player_num9'] : '';
            $t2_player_name9 = isset($_SESSION['t2_player_name9']) ? $_SESSION['t2_player_name9'] : '';
            $t2_player_pos9 = isset($_SESSION['t2_player_pos9']) ? $_SESSION['t2_player_pos9'] : '';
            //player 10
            $t2_player_num10 = isset($_SESSION['t2_player_num10']) ? $_SESSION['t2_player_num10'] : '';
            $t2_player_name10 = isset($_SESSION['t2_player_name10']) ? $_SESSION['t2_player_name10'] : '';
            $t2_player_pos10 = isset($_SESSION['t2_player_pos10']) ? $_SESSION['t2_player_pos10'] : '';
            //player 11
            $t2_player_num11 = isset($_SESSION['t2_player_num11']) ? $_SESSION['t2_player_num11'] : '';
            $t2_player_name11 = isset($_SESSION['t2_player_name11']) ? $_SESSION['t2_player_name11'] : '';
            $t2_player_pos11 = isset($_SESSION['t2_player_pos11']) ? $_SESSION['t2_player_pos11'] : '';
            //player 12
            $t2_player_num12 = isset($_SESSION['t2_player_num12']) ? $_SESSION['t2_player_num12'] : '';
            $t2_player_name12 = isset($_SESSION['t2_player_name12']) ? $_SESSION['t2_player_name12'] : '';
            $t2_player_pos12 = isset($_SESSION['t2_player_pos12']) ? $_SESSION['t2_player_pos12'] : '';

            /* Team 2 Player Sessions */
            $_SESSION['t2_player_num1'] = $t2_player_num1;
            $_SESSION['t2_player_name1'] = $t2_player_name1;
            $_SESSION['t2_player_pos1'] = $t2_player_pos1;
            $_SESSION['t2_player_num2'] = $t2_player_num2;
            $_SESSION['t2_player_name2'] = $t2_player_name2;
            $_SESSION['t2_player_pos2'] = $t2_player_pos2;
            $_SESSION['t2_player_num3'] = $t2_player_num3;
            $_SESSION['t2_player_name3'] = $t2_player_name3;
            $_SESSION['t2_player_pos3'] = $t2_player_pos3;
            $_SESSION['t2_player_num4'] = $t2_player_num4;
            $_SESSION['t2_player_name4'] = $t2_player_name4;
            $_SESSION['t2_player_pos4'] = $t2_player_pos4;
            $_SESSION['t2_player_num5'] = $t2_player_num5;
            $_SESSION['t2_player_name5'] = $t2_player_name5;
            $_SESSION['t2_player_pos5'] = $t2_player_pos5;
            $_SESSION['t2_player_num6'] = $t2_player_num6;
            $_SESSION['t2_player_name6'] = $t2_player_name6;
            $_SESSION['t2_player_pos6'] = $t2_player_pos6;
            $_SESSION['t2_player_num7'] = $t2_player_num7;
            $_SESSION['t2_player_name7'] = $t2_player_name7;
            $_SESSION['t2_player_pos7'] = $t2_player_pos7;
            $_SESSION['t2_player_num8'] = $t2_player_num8;
            $_SESSION['t2_player_name8'] = $t2_player_name8;
            $_SESSION['t2_player_pos8'] = $t2_player_pos8;
            $_SESSION['t2_player_num9'] = $t2_player_num9;
            $_SESSION['t2_player_name9'] = $t2_player_name9;
            $_SESSION['t2_player_pos9'] = $t2_player_pos9;
            $_SESSION['t2_player_num10'] = $t2_player_num10;
            $_SESSION['t2_player_name10'] = $t2_player_name10;
            $_SESSION['t2_player_pos10'] = $t2_player_pos10;
            $_SESSION['t2_player_num11'] = $t2_player_num11;
            $_SESSION['t2_player_name11'] = $t2_player_name11;
            $_SESSION['t2_player_pos11'] = $t2_player_pos11;
            $_SESSION['t2_player_num12'] = $t2_player_num12;
            $_SESSION['t2_player_name12'] = $t2_player_name12;
            $_SESSION['t2_player_pos12'] = $t2_player_pos12;
        ?>

        <!-- Goal Keeper Details team 2-->
    <?php 
        $gk2_player_num1 = isset($_SESSION['gk2_player_num1']) ? $_SESSION['gk2_player_num1'] : '';
        $gk2_player_name1 = isset($_SESSION['gk2_player_name1']) ? $_SESSION['gk2_player_name1'] : '';

        $gk2_player_num2 = isset($_SESSION['gk2_player_num2']) ? $_SESSION['gk2_player_num2'] : '';
        $gk2_player_name2 = isset($_SESSION['gk2_player_name2']) ? $_SESSION['gk2_player_name2'] : '';
        
        $gk2_player_num3 = isset($_SESSION['gk2_player_num3']) ? $_SESSION['gk2_player_num3'] : '';
        $gk2_player_name3 = isset($_SESSION['gk2_player_name3']) ? $_SESSION['gk2_player_name3'] : '';

        /* Goalkeeper Team 2 */
        $_SESSION['gk2_player_num1'] = $gk2_player_num1;
        $_SESSION['gk2_player_name1'] = $gk2_player_name1;
        $_SESSION['gk2_player_num2'] = $gk2_player_num2;
        $_SESSION['gk2_player_name2'] = $gk2_player_name2;
        $_SESSION['gk2_player_num3'] = $gk2_player_num3;
        $_SESSION['gk2_player_name3'] = $gk2_player_name3;
    ?>
        <!--Team 2 Name list-->
    <h2>
        <?php echo $team_name_2; ?> Goal Keepers 
    </h2>
    <!--Goal Keepers list-->
    
        
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Goalkeeper Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> GoalKeeper Position <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Goals Saved <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Attempts To Save <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $gk2_player_num1; ?></td>
                        <td><?php echo $gk2_player_name1; ?></td>
                        <td><?php echo 'GK'; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_16(1)" class="match-bet-option">
                                <span id="totalclicks-16"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_16(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_gk1(1)" class="match-bet-option">
                                <span id="total-attempts-gk2-1"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_gk1(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $gk2_player_num2; ?></td>
                        <td><?php echo $gk2_player_name2; ?></td>
                        <td> <?php echo 'GK'; ?> </td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_17(1)" class="match-bet-option">
                                <span id="totalclicks-17"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_17(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_gk2(1)" class="match-bet-option">
                                <span id="total-attempts-gk2-2"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_gk2(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $gk2_player_num3; ?></td>
                        <td><?php echo $gk2_player_name3; ?></td>
                        <td> <?php echo 'GK'; ?> </td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_18(1)" class="match-bet-option">
                                <span id="totalclicks-18"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_18(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_gk3(1)" class="match-bet-option">
                                <span id="total-attempts-gk2-3"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_gk3(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </section>
        <h2>
            <?php echo $team_name_2; ?> Name List
        </h2>                        
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Player Number <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Name <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Player Position <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Goals Scored <span class="icon-arrow">&UpArrow;</span></th>
                        <th> Total Attempts <span class="icon-arrow">&UpArrow;</span></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $t2_player_num1; ?></td>
                        <td><?php echo $t2_player_name1; ?></td>
                        <td><?php echo $t2_player_pos1; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_19(1)" class="match-bet-option">
                                <span id="totalclicks-19"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_19(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p1(1)" class="match-bet-option">
                                <span id="total-attempts-19"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p1(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num2; ?></td>
                        <td><?php echo $t2_player_name2; ?></td>
                        <td><?php echo $t2_player_pos2; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_20(1)" class="match-bet-option">
                                <span id="totalclicks-20"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_20(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p2(1)" class="match-bet-option">
                                <span id="total-attempts-20"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p2(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num3; ?></td>
                        <td><?php echo $t2_player_name3; ?></td>
                        <td><?php echo $t2_player_pos3; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_21(1)" class="match-bet-option">
                                <span id="totalclicks-21"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_21(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p3(1)" class="match-bet-option">
                                <span id="total-attempts-21"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p3(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num4; ?></td>
                        <td><?php echo $t2_player_name4; ?></td>
                        <td><?php echo $t2_player_pos4; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_22(1)" class="match-bet-option">
                                <span id="totalclicks-22"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_22(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p4(1)" class="match-bet-option">
                                <span id="total-attempts-22"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p4(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num5; ?></td>
                        <td><?php echo $t2_player_name5; ?></td>
                        <td><?php echo $t2_player_pos5; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_23(1)" class="match-bet-option">
                                <span id="totalclicks-23"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_23(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p5(1)" class="match-bet-option">
                                <span id="total-attempts-23"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p5(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num6; ?></td>
                        <td><?php echo $t2_player_name6; ?></td>
                        <td><?php echo $t2_player_pos6; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_24(1)" class="match-bet-option">
                                <span id="totalclicks-24"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_24(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p6(1)" class="match-bet-option">
                                <span id="total-attempts-24"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p6(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num7; ?></td>
                        <td><?php echo $t2_player_name7; ?></td>
                        <td><?php echo $t2_player_pos7; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_25(1)" class="match-bet-option">
                                <span id="totalclicks-25"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_25(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p7(1)" class="match-bet-option">
                                <span id="total-attempts-25"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p7(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num8; ?></td>
                        <td><?php echo $t2_player_name8; ?></td>
                        <td><?php echo $t2_player_pos8; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_26(1)" class="match-bet-option">
                                <span id="totalclicks-26"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_26(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p8(1)" class="match-bet-option">
                                <span id="total-attempts-26"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p8(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num9; ?></td>
                        <td><?php echo $t2_player_name9; ?></td>
                        <td><?php echo $t2_player_pos9; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_27(1)" class="match-bet-option">
                                <span id="totalclicks-27"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_27(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p9(1)" class="match-bet-option">
                                <span id="total-attempts-27"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p9(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num10; ?></td>
                        <td><?php echo $t2_player_name10; ?></td>
                        <td><?php echo $t2_player_pos10; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_28(1)" class="match-bet-option">
                                <span id="totalclicks-28"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_28(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p10(1)" class="match-bet-option">
                                <span id="total-attempts-28"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p10(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num11; ?></td>
                        <td><?php echo $t2_player_name11; ?></td>
                        <td><?php echo $t2_player_pos11; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_29(1)" class="match-bet-option">
                                <span id="totalclicks-29"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_29(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p11(1)" class="match-bet-option">
                                <span id="total-attempts-29"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p11(-1)" class="match-bet-option">
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $t2_player_num12; ?></td>
                        <td><?php echo $t2_player_name12; ?></td>
                        <td><?php echo $t2_player_pos12; ?></td>
                        <td> 
                                <input type="button" value="+" onclick="totalclick_30(1)" class="match-bet-option">
                                <span id="totalclicks-30"> 0 </span>
                                <input type="button" value="-" onclick="totalclick_30(-1)" class="match-bet-option">
                        </td>
                        <td>
                                <input type="button" value="+" onclick="t2_total_atm_p12(1)" class="match-bet-option">
                                <span id="total-attempts-30"> 0 </span>
                                <input type="button" value="-" onclick="t2_total_atm_p12(-1)" class="match-bet-option">
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>

        <form action="analyze.php" method="POST">
            <!--
                Team Scores
            -->
            <input type="hidden" name="team1-score" id="team1-score">
            <input type="hidden" name="team2-score" id="team2-score">
        
            <!--
                Team 1 GoalKeeper Name 
            -->
            <input type="hidden" name="t1-gk1-saved" id="t1-gk1-saved">
            <input type="hidden" name="t1-gk1-attempts" id="t1-gk1-attempts">
            <input type="hidden" name="t1-gk2-saved" id="t1-gk2-saved">
            <input type="hidden" name="t1-gk2-attempts" id="t1-gk2-attempts">
            <input type="hidden" name="t1-gk3-saved" id="t1-gk3-saved">
            <input type="hidden" name="t1-gk3-attempts" id="t1-gk3-attempts">

            <!--
                Team 1 Player Name
            -->
            <input type="hidden" name="t1-p1-goals" id="t1-p1-goals">
            <input type="hidden" name="t1-p1-attempts" id="t1-p1-attempts">
            <input type="hidden" name="t1-p2-goals" id="t1-p2-goals">
            <input type="hidden" name="t1-p2-attempts" id="t1-p2-attempts">
            <input type="hidden" name="t1-p3-goals" id="t1-p3-goals">
            <input type="hidden" name="t1-p3-attempts" id="t1-p3-attempts">
            <input type="hidden" name="t1-p4-goals" id="t1-p4-goals">
            <input type="hidden" name="t1-p4-attempts" id="t1-p4-attempts">
            <input type="hidden" name="t1-p5-goals" id="t1-p5-goals">
            <input type="hidden" name="t1-p5-attempts" id="t1-p5-attempts">
            <input type="hidden" name="t1-p6-goals" id="t1-p6-goals">
            <input type="hidden" name="t1-p6-attempts" id="t1-p6-attempts">
            <input type="hidden" name="t1-p7-goals" id="t1-p7-goals">
            <input type="hidden" name="t1-p7-attempts" id="t1-p7-attempts">
            <input type="hidden" name="t1-p8-goals" id="t1-p8-goals">
            <input type="hidden" name="t1-p8-attempts" id="t1-p8-attempts">
            <input type="hidden" name="t1-p9-goals" id="t1-p9-goals">
            <input type="hidden" name="t1-p9-attempts" id="t1-p9-attempts">
            <input type="hidden" name="t1-p10-goals" id="t1-p10-goals">
            <input type="hidden" name="t1-p10-attempts" id="t1-p10-attempts">
            <input type="hidden" name="t1-p11-goals" id="t1-p11-goals">
            <input type="hidden" name="t1-p11-attempts" id="t1-p11-attempts">
            <input type="hidden" name="t1-p12-goals" id="t1-p12-goals">
            <input type="hidden" name="t1-p12-attempts" id="t1-p12-attempts">

            <!--
                Team 2 GoalKeeper Name
            -->
            <input type="hidden" name="t2-gk1-saved" id="t2-gk1-saved">
            <input type="hidden" name="t2-gk1-attempts" id="t2-gk1-attempts">
            <input type="hidden" name="t2-gk2-saved" id="t2-gk2-saved">
            <input type="hidden" name="t2-gk2-attempts" id="t2-gk2-attempts">
            <input type="hidden" name="t2-gk3-saved" id="t2-gk3-saved">
            <input type="hidden" name="t2-gk3-attempts" id="t2-gk3-attempts">

            <!--
                Team 2 Player Name 
            -->
            <input type="hidden" name="t2-p1-goals" id="t2-p1-goals">
            <input type="hidden" name="t2-p1-attempts" id="t2-p1-attempts">
            <input type="hidden" name="t2-p2-goals" id="t2-p2-goals">
            <input type="hidden" name="t2-p2-attempts" id="t2-p2-attempts">
            <input type="hidden" name="t2-p3-goals" id="t2-p3-goals">
            <input type="hidden" name="t2-p3-attempts" id="t2-p3-attempts">
            <input type="hidden" name="t2-p4-goals" id="t2-p4-goals">
            <input type="hidden" name="t2-p4-attempts" id="t2-p4-attempts">
            <input type="hidden" name="t2-p5-goals" id="t2-p5-goals">
            <input type="hidden" name="t2-p5-attempts" id="t2-p5-attempts">
            <input type="hidden" name="t2-p6-goals" id="t2-p6-goals">
            <input type="hidden" name="t2-p6-attempts" id="t2-p6-attempts">
            <input type="hidden" name="t2-p7-goals" id="t2-p7-goals">
            <input type="hidden" name="t2-p7-attempts" id="t2-p7-attempts">
            <input type="hidden" name="t2-p8-goals" id="t2-p8-goals">
            <input type="hidden" name="t2-p8-attempts" id="t2-p8-attempts">
            <input type="hidden" name="t2-p9-goals" id="t2-p9-goals">
            <input type="hidden" name="t2-p9-attempts" id="t2-p9-attempts">
            <input type="hidden" name="t2-p10-goals" id="t2-p10-goals">
            <input type="hidden" name="t2-p10-attempts" id="t2-p10-attempts">
            <input type="hidden" name="t2-p11-goals" id="t2-p11-goals">
            <input type="hidden" name="t2-p11-attempts" id="t2-p11-attempts">
            <input type="hidden" name="t2-p12-goals" id="t2-p12-goals">
            <input type="hidden" name="t2-p12-attempts" id="t2-p12-attempts">
            <div class="center">
                <input type="submit" name='upload' value='Upload' class="upload" style="background: #000;color: #fff;cursor: pointer;width: 50%;font-weight: bold;">
            </div>
        </form>
        

        <script>
            //TEAM SCORE
            function team_1(click){
                let score = document.getElementById('team-1-score');
                let sum = parseInt(score.innerText) + click;
                score.innerText = sum;
                if(sum < 0){
                    score.innerText = 0;
                }
                var team1_score = document.getElementById("team1-score");
                team1_score.value = sum;
            }

            function team_2(click){
                let score = document.getElementById('team-2-score');
                let sum = parseInt(score.innerText) + click;
                score.innerText = sum;
                if(sum < 0){
                    score.innerText = 0;
                }
                var team2_score = document.getElementById("team2-score");
                team2_score.value = sum;
            }

            function totalclick_1(click){
                const totalclick = document.getElementById('totalclicks-1');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk1_saved = document.getElementById("t1-gk1-saved");
                t1_gk1_saved.value = sumvalue;
            }
            function totalclick_2(click){
                const totalclick = document.getElementById('totalclicks-2');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk2_saved = document.getElementById("t1-gk2-saved");
                t1_gk2_saved.value = sumvalue;
            }
            function totalclick_3(click){
                const totalclick = document.getElementById('totalclicks-3');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk3_saved = document.getElementById("t1-gk3-saved");
                t1_gk3_saved.value = sumvalue;
            }
            function totalclick_4(click){
                const totalclick = document.getElementById('totalclicks-4');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p1_goals = document.getElementById("t1-p1-goals");
                t1_p1_goals.value = sumvalue;
                
            }
            function totalclick_5(click){
                const totalclick = document.getElementById('totalclicks-5');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p2_goals = document.getElementById("t1-p2-goals");
                t1_p2_goals.value = sumvalue;
                
            }
            function totalclick_6(click){
                const totalclick = document.getElementById('totalclicks-6');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p3_goals = document.getElementById("t1-p3-goals");
                t1_p3_goals.value = sumvalue;
               
            }
            function totalclick_7(click){
                const totalclick = document.getElementById('totalclicks-7');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p4_goals = document.getElementById("t1-p4-goals");
                t1_p4_goals.value = sumvalue;
                
            }
            function totalclick_8(click){
                const totalclick = document.getElementById('totalclicks-8');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p5_goals = document.getElementById("t1-p5-goals");
                t1_p5_goals.value = sumvalue;
                
            }
            function totalclick_9(click){
                const totalclick = document.getElementById('totalclicks-9');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p6_goals = document.getElementById("t1-p6-goals");
                t1_p6_goals.value = sumvalue;
                
            }
            function totalclick_10(click){
                const totalclick = document.getElementById('totalclicks-10');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p7_goals = document.getElementById("t1-p7-goals");
                t1_p7_goals.value = sumvalue;
                
            }
            function totalclick_11(click){
                const totalclick = document.getElementById('totalclicks-11');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p8_goals = document.getElementById("t1-p8-goals");
                t1_p8_goals.value = sumvalue;
               
            }
            function totalclick_12(click){
                const totalclick = document.getElementById('totalclicks-12');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p9_goals = document.getElementById("t1-p9-goals");
                t1_p9_goals.value = sumvalue;
                
            }
            function totalclick_13(click){
                const totalclick = document.getElementById('totalclicks-13');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p10_goals = document.getElementById("t1-p10-goals");
                t1_p10_goals.value = sumvalue;
                
            }
            function totalclick_14(click){
                const totalclick = document.getElementById('totalclicks-14');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p11_goals = document.getElementById("t1-p11-goals");
                t1_p11_goals.value = sumvalue;
                
            }
            function totalclick_15(click){
                const totalclick = document.getElementById('totalclicks-15');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p12_goals = document.getElementById("t1-p12-goals");
                t1_p12_goals.value = sumvalue;
                
            }
            function totalclick_16(click){
                const totalclick = document.getElementById('totalclicks-16');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk1_saved = document.getElementById("t2-gk1-saved");
                t2_gk1_saved.value = sumvalue;
            }
            function totalclick_17(click){
                const totalclick = document.getElementById('totalclicks-17');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk2_saved = document.getElementById("t2-gk2-saved");
                t2_gk2_saved.value = sumvalue;
            }
            function totalclick_18(click){
                const totalclick = document.getElementById('totalclicks-18');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk3_saved = document.getElementById("t2-gk3-saved");
                t2_gk3_saved.value = sumvalue;
            }
            function totalclick_19(click){
                const totalclick = document.getElementById('totalclicks-19');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p1_goals = document.getElementById("t2-p1-goals");
                t2_p1_goals.value = sumvalue;
                
            }
            function totalclick_20(click){
                const totalclick = document.getElementById('totalclicks-20');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p2_goals = document.getElementById("t2-p2-goals");
                t2_p2_goals.value = sumvalue;
                
            }
            function totalclick_21(click){
                const totalclick = document.getElementById('totalclicks-21');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p3_goals = document.getElementById("t2-p3-goals");
                t2_p3_goals.value = sumvalue;
                
            }
            function totalclick_22(click){
                const totalclick = document.getElementById('totalclicks-22');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p4_goals = document.getElementById("t2-p4-goals");
                t2_p4_goals.value = sumvalue;
                
            }
            function totalclick_23(click){
                const totalclick = document.getElementById('totalclicks-23');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p5_goals = document.getElementById("t2-p5-goals");
                t2_p5_goals.value = sumvalue;
                
            }
            function totalclick_24(click){
                const totalclick = document.getElementById('totalclicks-24');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p6_goals = document.getElementById("t2-p6-goals");
                t2_p6_goals.value = sumvalue;
                
            }
            function totalclick_25(click){
                const totalclick = document.getElementById('totalclicks-25');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p7_goals = document.getElementById("t2-p7-goals");
                t2_p7_goals.value = sumvalue;
                
            }
            function totalclick_26(click){
                const totalclick = document.getElementById('totalclicks-26');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p8_goals = document.getElementById("t2-p8-goals");
                t2_p8_goals.value = sumvalue;
                
            }
            function totalclick_27(click){
                const totalclick = document.getElementById('totalclicks-27');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p9_goals = document.getElementById("t2-p9-goals");
                t2_p9_goals.value = sumvalue;
                
            }
            function totalclick_28(click){
                const totalclick = document.getElementById('totalclicks-28');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p10_goals = document.getElementById("t2-p10-goals");
                t2_p10_goals.value = sumvalue;
                
            }
            function totalclick_29(click){
                const totalclick = document.getElementById('totalclicks-29');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p11_goals = document.getElementById("t2-p11-goals");
                t2_p11_goals.value = sumvalue;
                
            }
            function totalclick_30(click){
                const totalclick = document.getElementById('totalclicks-30');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p12_goals = document.getElementById("t2-p12-goals");
                t2_p12_goals.value = sumvalue;
                
            }
            
            /*Goal Keepers total attempts */
            function t1_total_atm_gk1(click){
                const totalclick = document.getElementById('total-attempts-gk1-1');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk1_attempts = document.getElementById("t1-gk1-attempts");
                t1_gk1_attempts.value = sumvalue;
            }
            function t1_total_atm_gk2(click){
                const totalclick = document.getElementById('total-attempts-gk1-2');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk2_attempts = document.getElementById("t1-gk2-attempts");
                t1_gk2_attempts.value = sumvalue;
            }
            function t1_total_atm_gk3(click){
                const totalclick = document.getElementById('total-attempts-gk1-3');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_gk3_attempts = document.getElementById("t1-gk3-attempts");
                t1_gk3_attempts.value = sumvalue;
            }
            /*Goal keepers total attempts*/
            function t2_total_atm_gk1(click){
                const totalclick = document.getElementById('total-attempts-gk2-1');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk1_attempts = document.getElementById("t2-gk1-attempts");
                t2_gk1_attempts.value = sumvalue;
            }
            function t2_total_atm_gk2(click){
                const totalclick = document.getElementById('total-attempts-gk2-2');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk2_attempts = document.getElementById("t2-gk2-attempts");
                t2_gk2_attempts.value = sumvalue;
            }
            function t2_total_atm_gk3(click){
                const totalclick = document.getElementById('total-attempts-gk2-3');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_gk3_attempts = document.getElementById("t2-gk3-attempts");
                t2_gk3_attempts.value = sumvalue;
            }

            /*Players total attempts */
            function t1_total_atm_p1(click){
                const totalclick = document.getElementById('total-attempts-4');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p1_attempts = document.getElementById("t1-p1-attempts");
                t1_p1_attempts.value = sumvalue;

            }
            function t1_total_atm_p2(click){
                const totalclick = document.getElementById('total-attempts-5');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p2_attempts = document.getElementById("t1-p2-attempts");
                t1_p2_attempts.value = sumvalue;
            }
            function t1_total_atm_p3(click){
                const totalclick = document.getElementById('total-attempts-6');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p3_attempts = document.getElementById("t1-p3-attempts");
                t1_p3_attempts.value = sumvalue;
            }
            function t1_total_atm_p4(click){
                const totalclick = document.getElementById('total-attempts-7');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p4_attempts = document.getElementById("t1-p4-attempts");
                t1_p4_attempts.value = sumvalue;
            }
            function t1_total_atm_p5(click){
                const totalclick = document.getElementById('total-attempts-8');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p5_attempts = document.getElementById("t1-p5-attempts");
                t1_p5_attempts.value = sumvalue;
            }
            function t1_total_atm_p6(click){
                const totalclick = document.getElementById('total-attempts-9');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p6_attempts = document.getElementById("t1-p6-attempts");
                t1_p6_attempts.value = sumvalue;
            }
            function t1_total_atm_p7(click){
                const totalclick = document.getElementById('total-attempts-10');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p7_attempts = document.getElementById("t1-p7-attempts");
                t1_p7_attempts.value = sumvalue;
            }
            function t1_total_atm_p8(click){
                const totalclick = document.getElementById('total-attempts-11');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p8_attempts = document.getElementById("t1-p8-attempts");
                t1_p8_attempts.value = sumvalue;
            }
            function t1_total_atm_p9(click){
                const totalclick = document.getElementById('total-attempts-12');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p9_attempts = document.getElementById("t1-p9-attempts");
                t1_p9_attempts.value = sumvalue;
            }
            function t1_total_atm_p10(click){
                const totalclick = document.getElementById('total-attempts-13');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p10_attempts = document.getElementById("t1-p10-attempts");
                t1_p10_attempts.value = sumvalue;
            }
            function t1_total_atm_p11(click){
                const totalclick = document.getElementById('total-attempts-14');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p11_attempts = document.getElementById("t1-p11-attempts");
                t1_p11_attempts.value = sumvalue;
            }
            function t1_total_atm_p12(click){
                const totalclick = document.getElementById('total-attempts-15');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t1_p12_attempts = document.getElementById("t1-p12-attempts");
                t1_p12_attempts.value = sumvalue;
            }

            function t2_total_atm_p1(click){
                const totalclick = document.getElementById('total-attempts-19');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p1_attempts = document.getElementById("t2-p1-attempts");
                t2_p1_attempts.value = sumvalue;
            }
            function t2_total_atm_p2(click){
                const totalclick = document.getElementById('total-attempts-20');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p2_attempts = document.getElementById("t2-p2-attempts");
                t2_p2_attempts.value = sumvalue;
            }
            function t2_total_atm_p3(click){
                const totalclick = document.getElementById('total-attempts-21');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p3_attempts = document.getElementById("t2-p3-attempts");
                t2_p3_attempts.value = sumvalue;
            }
            function t2_total_atm_p4(click){
                const totalclick = document.getElementById('total-attempts-22');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p4_attempts = document.getElementById("t2-p4-attempts");
                t2_p4_attempts.value = sumvalue;
            }
            function t2_total_atm_p5(click){
                const totalclick = document.getElementById('total-attempts-23');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p5_attempts = document.getElementById("t2-p5-attempts");
                t2_p5_attempts.value = sumvalue;
            }
            function t2_total_atm_p6(click){
                const totalclick = document.getElementById('total-attempts-24');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p6_attempts = document.getElementById("t2-p6-attempts");
                t2_p6_attempts.value = sumvalue;
            }
            function t2_total_atm_p7(click){
                const totalclick = document.getElementById('total-attempts-25');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p7_attempts = document.getElementById("t2-p7-attempts");
                t2_p7_attempts.value = sumvalue;
            }
            function t2_total_atm_p8(click){
                const totalclick = document.getElementById('total-attempts-26');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p8_attempts = document.getElementById("t2-p8-attempts");
                t2_p8_attempts.value = sumvalue;
            }
            function t2_total_atm_p9(click){
                const totalclick = document.getElementById('total-attempts-27');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p9_attempts = document.getElementById("t2-p9-attempts");
                t2_p9_attempts.value = sumvalue;
            }
            function t2_total_atm_p10(click){
                const totalclick = document.getElementById('total-attempts-28');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p10_attempts = document.getElementById("t2-p10-attempts");
                t2_p10_attempts.value = sumvalue;
            }
            function t2_total_atm_p11(click){
                const totalclick = document.getElementById('total-attempts-29');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p11_attempts = document.getElementById("t2-p11-attempts");
                t2_p11_attempts.value = sumvalue;
            }
            function t2_total_atm_p12(click){
                const totalclick = document.getElementById('total-attempts-30');
                const sumvalue = parseInt(totalclick.innerText) + click; 
                totalclick.innerText = sumvalue;
                if(sumvalue < 0){
                    totalclick.innerText = 0;
                }
                var t2_p12_attempts = document.getElementById("t2-p12-attempts");
                t2_p12_attempts.value = sumvalue;
            }
        </script>
</body>
</html>