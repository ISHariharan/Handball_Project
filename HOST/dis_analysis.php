<?php
session_start();
?>
<html>
    <head>
        <title>
            handballarena.com
        </title>
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link rel="stylesheet" href="../CSS/score_card.css">
        <link rel="stylesheet" href="../CSS/analysis.css">
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
            
            .players-team1{
                display: inline-block;
                width: 230px; /* Adjust as needed */
                border: 1px solid #ccc;
                padding: 10px;
                margin: 10px;
            }

            .player-name {
                margin: 0;
            }
        </style>
    </head>
    <body>
        <?php
             include "db_conn.php";
             $match_no = $_SESSION['match_no'];
             $match = "select * from match_history where match_no = '$match_no'";
             $match_res = mysqli_query($conn, $match);

             if(mysqli_num_rows($match_res) > 0){
                $details = mysqli_fetch_assoc($match_res);
             }

             $league_name = $details['league_name'];
             $team_name_1 = $details['team1_name'];
             $team_name_2 = $details['team2_name'];
     
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

             /*Team Scores*/
             $team1_score = $details['goals1'];
             $team2_score = $details['goals2'];

             /*team 1 goalkeeper list*/
             $t1_gk1_num = $details['gk1_t1_num'];
             $t1_gk1_name = $details['gk1_t1_name'];
             $t1_gk1_saves = $details['gk1_t1_saves'];
             $t1_gk1_attempts = $details['gk1_t1_attempts'];

             $t1_gk2_num = $details['gk2_t1_num'];
             $t1_gk2_name = $details['gk2_t1_name'];
             $t1_gk2_saves = $details['gk2_t1_saves'];
             $t1_gk2_attempts = $details['gk2_t1_attempts'];

             $t1_gk3_num = $details['gk3_t1_num'];
             $t1_gk3_name = $details['gk3_t1_name'];
             $t1_gk3_saves = $details['gk3_t1_saves'];
             $t1_gk3_attempts = $details['gk3_t1_attempts'];


             /*team 1 players list */
             $t1_player1_num = $details['p1_t1_num'];
             $t1_player1_name = $details['p1_t1_name'];
             $t1_player1_pos = $details['p1_t1_pos'];
             $t1_player1_goals = $details['p1_t1_goals'];
             $t1_player1_attempts = $details['p1_t1_attempts'];

             $t1_player2_num = $details['p2_t1_num'];
             $t1_player2_name = $details['p2_t1_name'];
             $t1_player2_pos = $details['p2_t1_pos'];
             $t1_player2_goals = $details['p2_t1_goals'];
             $t1_player2_attempts = $details['p2_t1_attempts'];

             $t1_player3_num = $details['p3_t1_num'];
             $t1_player3_name = $details['p3_t1_name'];
             $t1_player3_pos = $details['p3_t1_pos'];
             $t1_player3_goals = $details['p3_t1_goals'];
             $t1_player3_attempts = $details['p3_t1_attempts'];

             $t1_player4_num = $details['p4_t1_num'];
             $t1_player4_name = $details['p4_t1_name'];
             $t1_player4_pos = $details['p4_t1_pos'];
             $t1_player4_goals = $details['p4_t1_goals'];
             $t1_player4_attempts = $details['p4_t1_attempts'];

             $t1_player5_num = $details['p5_t1_num'];
             $t1_player5_name = $details['p5_t1_name'];
             $t1_player5_pos = $details['p5_t1_pos'];
             $t1_player5_goals = $details['p5_t1_goals'];
             $t1_player5_attempts = $details['p5_t1_attempts'];

             $t1_player6_num = $details['p6_t1_num'];
             $t1_player6_name = $details['p6_t1_name'];
             $t1_player6_pos = $details['p6_t1_pos'];
             $t1_player6_goals = $details['p6_t1_goals'];
             $t1_player6_attempts = $details['p6_t1_attempts'];


             $t1_player7_num = $details['p7_t1_num'];
             $t1_player7_name = $details['p7_t1_name'];
             $t1_player7_pos = $details['p7_t1_pos'];
             $t1_player7_goals = $details['p7_t1_goals'];
             $t1_player7_attempts = $details['p7_t1_attempts'];

             $t1_player8_num = $details['p8_t1_num'];
             $t1_player8_name = $details['p8_t1_name'];
             $t1_player8_pos = $details['p8_t1_pos'];
             $t1_player8_goals = $details['p8_t1_goals'];
             $t1_player8_attempts = $details['p8_t1_attempts'];

             $t1_player9_num = $details['p9_t1_num'];
             $t1_player9_name = $details['p9_t1_name'];
             $t1_player9_pos = $details['p9_t1_pos'];
             $t1_player9_goals = $details['p9_t1_goals'];
             $t1_player9_attempts = $details['p9_t1_attempts'];

             $t1_player10_num = $details['p10_t1_num'];
             $t1_player10_name = $details['p10_t1_name'];
             $t1_player10_pos = $details['p10_t1_pos'];
             $t1_player10_goals = $details['p10_t1_goals'];
             $t1_player10_attempts = $details['p10_t1_attempts'];

             $t1_player11_num = $details['p11_t1_num'];
             $t1_player11_name = $details['p11_t1_name'];
             $t1_player11_pos = $details['p11_t1_pos'];
             $t1_player11_goals = $details['p11_t1_goals'];
             $t1_player11_attempts = $details['p11_t1_attempts'];

             $t1_player12_num = $details['p12_t1_num'];
             $t1_player12_name = $details['p12_t1_name'];
             $t1_player12_pos = $details['p12_t1_pos'];
             $t1_player12_goals = $details['p12_t1_goals'];
             $t1_player12_attempts = $details['p12_t1_attempts'];
             

            /*team 2 goalkeeper list*/
            $t2_gk1_num = $details['gk1_t2_num'];
            $t2_gk1_name = $details['gk1_t2_name'];
            $t2_gk1_saves = $details['gk1_t2_saves'];
            $t2_gk1_attempts = $details['gk1_t2_attempts'];

            $t2_gk2_num = $details['gk2_t2_num'];
            $t2_gk2_name = $details['gk2_t2_name'];
            $t2_gk2_saves = $details['gk2_t2_saves'];
            $t2_gk2_attempts = $details['gk2_t2_attempts'];

            $t2_gk3_num = $details['gk3_t2_num'];
            $t2_gk3_name = $details['gk3_t2_name'];
            $t2_gk3_saves = $details['gk3_t2_saves'];
            $t2_gk3_attempts = $details['gk3_t2_attempts'];

            /*team 2 players list */
            $t2_player1_num = $details['p1_t2_num'];
            $t2_player1_name = $details['p1_t2_name'];
            $t2_player1_pos = $details['p1_t2_pos'];
            $t2_player1_goals = $details['p1_t2_goals'];
            $t2_player1_attempts = $details['p1_t2_attempts'];

            $t2_player2_num = $details['p2_t2_num'];
            $t2_player2_name = $details['p2_t2_name'];
            $t2_player2_pos = $details['p2_t2_pos'];
            $t2_player2_goals = $details['p2_t2_goals'];
            $t2_player2_attempts = $details['p2_t2_attempts'];

            $t2_player3_num = $details['p3_t2_num'];
            $t2_player3_name = $details['p3_t2_name'];
            $t2_player3_pos = $details['p3_t2_pos'];
            $t2_player3_goals = $details['p3_t2_goals'];
            $t2_player3_attempts = $details['p3_t2_attempts'];

            $t2_player4_num = $details['p4_t2_num'];
            $t2_player4_name = $details['p4_t2_name'];
            $t2_player4_pos = $details['p4_t2_pos'];
            $t2_player4_goals = $details['p4_t2_goals'];
            $t2_player4_attempts = $details['p4_t2_attempts'];

            $t2_player5_num = $details['p5_t2_num'];
            $t2_player5_name = $details['p5_t2_name'];
            $t2_player5_pos = $details['p5_t2_pos'];
            $t2_player5_goals = $details['p5_t2_goals'];
            $t2_player5_attempts = $details['p5_t2_attempts'];

            $t2_player6_num = $details['p6_t2_num'];
            $t2_player6_name = $details['p6_t2_name'];
            $t2_player6_pos = $details['p6_t2_pos'];
            $t2_player6_goals = $details['p6_t2_goals'];
            $t2_player6_attempts = $details['p6_t2_attempts'];


            $t2_player7_num = $details['p7_t2_num'];
            $t2_player7_name = $details['p7_t2_name'];
            $t2_player7_pos = $details['p7_t2_pos'];
            $t2_player7_goals = $details['p7_t2_goals'];
            $t2_player7_attempts = $details['p7_t2_attempts'];

            $t2_player8_num = $details['p8_t2_num'];
            $t2_player8_name = $details['p8_t2_name'];
            $t2_player8_pos = $details['p8_t2_pos'];
            $t2_player8_goals = $details['p8_t2_goals'];
            $t2_player8_attempts = $details['p8_t2_attempts'];

            $t2_player9_num = $details['p9_t2_num'];
            $t2_player9_name = $details['p9_t2_name'];
            $t2_player9_pos = $details['p9_t2_pos'];
            $t2_player9_goals = $details['p9_t2_goals'];
            $t2_player9_attempts = $details['p9_t2_attempts'];

            $t2_player10_num = $details['p10_t2_num'];
            $t2_player10_name = $details['p10_t2_name'];
            $t2_player10_pos = $details['p10_t2_pos'];
            $t2_player10_goals = $details['p10_t2_goals'];
            $t2_player10_attempts = $details['p10_t2_attempts'];

            $t2_player11_num = $details['p11_t2_num'];
            $t2_player11_name = $details['p11_t2_name'];
            $t2_player11_pos = $details['p11_t2_pos'];
            $t2_player11_goals = $details['p11_t2_goals'];
            $t2_player11_attempts = $details['p11_t2_attempts'];

            $t2_player12_num = $details['p12_t2_num'];
            $t2_player12_name = $details['p12_t2_name'];
            $t2_player12_pos = $details['p12_t2_pos'];
            $t2_player12_goals = $details['p12_t2_goals'];
            $t2_player12_attempts = $details['p12_t2_attempts'];

            /*totals */
            $attacks1 = $details['attacks1'];
            $attacks2 = $details['attacks2'];

            $possession1 = $details['possession1'];
            $possession2 = $details['possession2'];

            $turnover1 = $details['turnover1'];
            $turnover2 = $details['turnover2'];

            $penalties1 = $details['penalties1'];
            $penalties2 = $details['penalties2'];
     
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
                                <img src="images/<?= $image_1['url'] ?>" alt="" class="image-1">
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
                                <?php echo $team1_score;?>
                            </span>
                            <span class="match-score-divider">
                                :
                            </span>
                            <span class="match-score-number" id="team-2-score">
                                <?php echo $team2_score;?>
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
                                <img src="images/<?= $image_2['url'] ?>" alt="" class="image-2">
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

    <div class="match-output">
        <table>
            <tr>
                <th></th>
                <th>Results</th>
                <th></th>
            </tr>
            <tr>
                <?php
                    $attack1_format = number_format($attacks1,2);
                    $attack2_format = number_format($attacks2,2);
                ?>
                <td><?php echo $attack1_format; ?></td>
                <td>Attack %</td>
                <td><?php echo $attack2_format; ?></td>
            </tr>
            <tr>
                <?php
                    $possession1_format = number_format($possession1,2);
                    $possession2_format = number_format($possession2,2 );
                ?>
                <td><?php echo $possession1_format; ?></td>
                <td>Possession %</td>
                <td><?php echo $possession2_format; ?></td>
            </tr>
            <tr>
                <?php
                    $turnover1_format = number_format($turnover1,2 );
                    $turnover2_format = number_format($turnover2,2);
                ?> 
                <td><?php echo $turnover1_format; ?></td>
                <td>TurnOver</td>
                <td><?php echo $turnover2_format; ?></td>
            </tr>
            <tr>
                <?php
                    $penalties1_format = number_format($penalties1,2);
                    $penalties2_format = number_format($penalties2,2);
                ?>
                <td><?php echo $penalties1_format; ?></td>
                <td>Penalties Saved</td>
                <td><?php echo $penalties2_format; ?></td>
            </tr>
        </table>
    </div>

    <div class="t1-players">
        <h1>
            Team 1: 
        </h1>
        <div class="team1">
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_gk1_num;?>
                    </p>
                    <p class="player-name">
                    <?php echo $t1_gk1_name;?>(GK) <br>
                        saves  : <?php echo $t1_gk1_saves;?> <br>
                        attempts : <?php echo $t1_gk1_attempts;?> <br>
                        <?php 
                            $s1= (float) $t1_gk1_saves/$t1_gk1_attempts;
                            $s1 = $s1*100;
                            $s1_format = number_format($s1,2);
                        ?>
                        saves %  : <?php echo $s1_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_gk2_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_gk2_name;?>(GK) <br>
                        saves  : <?php echo $t1_gk2_saves;?> <br>
                        attempts : <?php echo $t1_gk2_attempts;?> <br>
                        <?php 
                            $s2= (float) $t1_gk2_saves/$t1_gk2_attempts;
                            $s2 = $s2*100;
                            $s2_format = number_format($s2,2);
                        ?>
                        saves %  : <?php echo $s2_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_gk3_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_gk3_name; ?>(GK) <br>
                        saves : <?php echo $t1_gk3_saves; ?> <br>
                        attempts : <?php echo $t1_gk3_attempts; ?> <br>
                        <?php 
                            $s3= (float) $t1_gk3_saves/$t1_gk3_attempts;
                            $s3 = $s3*100;
                            $s3_format = number_format($s3,2);
                        ?>
                        saves %  : <?php echo $s3_format ; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player1_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player1_name; ?>(<?php echo $t1_player1_pos; ?>) <br>
                        goals  : <?php echo $t1_player1_goals?> <br>
                        attempts : <?php echo $t1_player1_attempts;?> <br>
                        <?php 
                            $at1 = (float) $t1_player1_goals/$t1_player1_attempts;
                            $at1 = $at1*100;
                            $at1_format = number_format($at1,2);
                        ?>
                        attack %  : <?php echo $at1_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player2_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player2_name;?>(<?php echo $t1_player2_pos; ?>)<br>
                        goals  : <?php echo $t1_player2_goals; ?> <br>
                        attempts : <?php echo $t1_player2_attempts;?> <br>
                        <?php 
                            $at2 = (float) $t1_player2_goals/$t1_player2_attempts;
                            $at2 = $at2*100;
                            $at2_format = number_format($at2, 2);
                        ?>
                        Attack%  : <?php echo $at2_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player3_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player3_name;?>(<?php echo $t1_player3_pos;?>) <br>
                        goals  : <?php echo $t1_player3_goals;?> <br>
                        attempts : <?php echo $t1_player3_attempts;?> <br>
                        <?php 
                            $at3 = (float) $t1_player3_goals/$t1_player3_attempts;
                            $at3 = $at3*100;
                            $at3_format = number_format($at3, 2);
                        ?>
                        Attack%  : <?php echo $at3_format ;  ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player4_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player4_name;?>(<?php echo $t1_player4_pos;?>) <br>
                        goals  : <?php echo $t1_player4_goals;?> <br>
                        attempts : <?php echo $t1_player4_attempts;?> <br>
                        <?php 
                            $at4 = (float) $t1_player4_goals/$t1_player4_attempts;
                            $at4 = $at4*100;
                            $at4_format = number_format($at4, 2);
                        ?>
                        Attack%  : <?php echo $at4_format; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player5_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player5_name;?>(<?php echo $t1_player5_pos;?>) <br>
                        goals  : <?php echo $t1_player5_goals;?> <br>
                        attempts : <?php echo $t1_player5_attempts;?> <br>
                        <?php 
                            $at5 = (float) $t1_player5_goals/$t1_player5_attempts;
                            $at5 = $at5*100;
                            $at5_format = number_format($at5, 2);
                        ?>
                        Attack%  : <?php echo $at5_format; ?>% <br>
                    </p>     
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player6_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player6_name;?>(<?php echo $t1_player6_pos;?>) <br>
                        goals  : <?php echo $t1_player6_goals;?> <br>
                        attempts : <?php echo $t1_player6_attempts;?> <br>
                        <?php 
                            $at6 = (float) $t1_player6_goals/$t1_player6_attempts;
                            $at6 = $at6*100;
                            $at6_format = number_format($at6, 2);
                        ?>
                        Attack%  : <?php echo $at6_format; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player7_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player7_name;?>(<?php echo $t1_player7_pos;?>) <br>
                        goals  : <?php echo $t1_player7_goals;?> <br>
                        attempts : <?php echo $t1_player7_attempts;?> <br>
                        <?php 
                            $at7 = (float) $t1_player7_goals/$t1_player7_attempts;
                            $at7 = $at7*100;
                            $at7_format = number_format($at7, 2);
                        ?>
                        Attack%  : <?php echo $at7_format ; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player8_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player8_name;?>(<?php echo $t1_player8_pos;?>) <br>
                        goals  : <?php echo $t1_player8_goals;?> <br>
                        attempts : <?php echo $t1_player8_attempts;?> <br>
                        <?php 
                            $at8 = (float) $t1_player8_goals/$t1_player8_attempts;
                            $at8 = $at8*100;
                            $at8_format = number_format($at8, 2);
                        ?>
                        Attack%  : <?php  echo $at8_format; ?>%<br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class = "player-number">
                        <?php echo $t1_player9_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player9_name;?>(<?php echo $t1_player9_pos;?>) <br>
                        goals  : <?php echo $t1_player9_goals;?> <br>
                        attempts : <?php echo $t1_player9_attempts;?> <br>
                        <?php 
                            $at9 = (float) $t1_player9_goals/$t1_player9_attempts;
                            $at9 = $at9*100;
                            $at9_format = number_format($at9, 2);
                        ?>
                        Attack%  : <?php echo $at9_format ;  ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player10_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player10_name;?>(<?php echo $t1_player10_pos;?>) <br>
                        goals  : <?php echo $t1_player10_goals;?> <br>
                        attempts : <?php echo $t1_player10_attempts;?> <br>
                        <?php 
                            $at10 = (float) $t1_player10_goals/$t1_player10_attempts;
                            $at10 = $at10*100;
                            $at10_format = number_format($at10, 2);
                        ?>
                        Attack%  : <?php echo $at10_format ;  ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player11_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player11_name;?>(<?php echo $t1_player11_pos;?>) <br>
                        goals  : <?php echo $t1_player11_goals;?> <br>
                        attempts : <?php echo $t1_player11_attempts;?> <br>
                        <?php 
                            $at11 = (float) $t1_player11_goals/$t1_player11_attempts;
                            $at11 = $at11*100;
                            $at11_format = number_format($at11, 2);
                        ?>
                        Attack%  : <?php echo $at11_format; ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t1_player12_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t1_player12_name;?>(<?php echo $t1_player12_pos;?>) <br>
                        goals  : <?php echo $t1_player12_goals;?> <br>
                        attempts : <?php echo $t1_player12_attempts;?> <br>
                        <?php 
                            $at12 = (float) $t1_player12_goals/$t1_player12_attempts;
                            $at12 = $at12*100;
                            $at12_format = number_format($at12, 2);
                        ?>
                        Attack%  : <?php echo $at12_format; ?>% <br>
                    </p> 
            </div>
        </div>
    </div>

    <div class="t1-players">
        <h1>
            Team 1: 
        </h1>
        <div class="team1">
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_gk1_num;?>
                    </p>
                    <p class="player-name">
                    <?php echo $t2_gk1_name;?>(GK) <br>
                        saves  : <?php echo $t2_gk1_saves;?> <br>
                        attempts : <?php echo $t2_gk1_attempts;?> <br>
                        <?php 
                            $s4= (float) $t2_gk1_saves/$t2_gk1_attempts;
                            $s4 = $s4*100;
                            $s4_format = number_format($s4, 2);
                        ?>
                        saves %  : <?php echo $s4_format; ?>%<br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_gk2_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_gk2_name;?>(GK) <br>
                        saves  : <?php echo $t2_gk2_saves;?> <br>
                        attempts : <?php echo $t2_gk2_attempts;?> <br>
                        <?php 
                            $s5= (float) $t2_gk2_saves/$t2_gk2_attempts;
                            $s5 = $s5*100;
                            $s5_format = number_format($s5, 2);
                        ?>
                        saves %  : <?php echo $s5_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_gk3_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_gk3_name; ?>(GK) <br>
                        saves : <?php echo $t2_gk3_saves; ?> <br>
                        attempts : <?php echo $t2_gk3_attempts; ?> <br>
                        <?php 
                            $s6= (float) $t2_gk3_saves/$t2_gk3_attempts;
                            $s6 = $s6*100;
                            $s6_format = number_format($s6, 2);
                        ?>
                        saves %  : <?php echo $s6_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player1_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player1_name; ?>(<?php echo $t2_player1_pos; ?>) <br>
                        goals  : <?php echo $t2_player1_goals?> <br>
                        attempts : <?php echo $t2_player1_attempts;?> <br>
                        <?php 
                            $at13 = (float) $t2_player1_goals/$t2_player1_attempts;
                            $at13 = $at13*100;
                            $at13_format = number_format($at13, 2);
                        ?>
                        attack %  : <?php echo $at13_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player2_num;?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player2_name;?>(<?php echo $t2_player2_pos; ?>)<br>
                        goals  : <?php echo $t2_player2_goals; ?> <br>
                        attempts : <?php echo $t2_player2_attempts;?> <br>
                        <?php 
                            $at14 = (float) $t2_player2_goals/$t2_player2_attempts;
                            $at14 = $at14*100;
                            $at14_format = number_format($at14, 2);
                        ?>
                        Attack%  : <?php echo $at14_format; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player3_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player3_name;?>(<?php echo $t2_player3_pos;?>) <br>
                        goals  : <?php echo $t2_player3_goals;?> <br>
                        attempts : <?php echo $t2_player3_attempts;?> <br>
                        <?php 
                            $at15 = (float) $t2_player3_goals/$t2_player3_attempts;
                            $at15 = $at15*100;
                            $at15_format = number_format($at15, 2);
                        ?>
                        Attack%  : <?php echo $at15_format ; ?>% <br>
                    </p>  
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player4_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player4_name;?>(<?php echo $t2_player4_pos;?>) <br>
                        goals  : <?php echo $t2_player4_goals;?> <br>
                        attempts : <?php echo $t2_player4_attempts;?> <br>
                        <?php 
                            $at16 = (float) $t2_player4_goals/$t2_player4_attempts;
                            $at16 = $at16*100;
                            $at16_format = number_format($at16, 2);
                        ?>
                        Attack%  : <?php echo $at16_format; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player5_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player5_name;?>(<?php echo $t2_player5_pos;?>) <br>
                        goals  : <?php echo $t2_player5_goals;?> <br>
                        attempts : <?php echo $t2_player5_attempts;?> <br>
                        <?php 
                            $at17 = (float) $t2_player5_goals/$t2_player5_attempts;
                            $at17 = $at17*100;
                            $at17_format = number_format($at17, 2);
                        ?>
                        Attack%  : <?php echo $at17_format; ?>% <br>
                    </p>     
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player6_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player6_name;?>(<?php echo $t2_player6_pos;?>) <br>
                        goals  : <?php echo $t2_player6_goals;?> <br>
                        attempts : <?php echo $t2_player6_attempts;?> <br>
                        <?php 
                            $at18 = (float) $t2_player6_goals/$t2_player6_attempts;
                            $at18 = $at18*100;
                            $at18_format = number_format($at18, 2);
                        ?>
                        Attack%  : <?php echo $at18_format; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player7_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player7_name;?>(<?php echo $t2_player7_pos;?>) <br>
                        goals  : <?php echo $t2_player7_goals;?> <br>
                        attempts : <?php echo $t2_player7_attempts;?> <br>
                        <?php 
                            $at19 = (float) $t2_player7_goals/$t2_player7_attempts;
                            $at19 = $at19*100;
                            $at19_format = number_format($at19, 2);
                        ?>
                        Attack%  : <?php echo $at19_format; ?>% <br>
                    </p>   
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player8_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player8_name;?>(<?php echo $t2_player8_pos;?>) <br>
                        goals  : <?php echo $t2_player8_goals;?> <br>
                        attempts : <?php echo $t2_player8_attempts;?> <br>
                        <?php 
                            $at20 = (float) $t2_player8_goals/$t2_player8_attempts;
                            $at20 = $at20*100;
                            $at20_format = number_format($at20, 2);
                        ?>
                        Attack%  : <?php echo $at20_format; ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player9_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player9_name;?>(<?php echo $t2_player9_pos;?>) <br>
                        goals  : <?php echo $t2_player9_goals;?> <br>
                        attempts : <?php echo $t2_player9_attempts;?> <br>
                        <?php 
                            $at21 = (float) $t2_player9_goals/$t2_player9_attempts;
                            $at21 = $at21*100;
                            $at21_format = number_format($at21, 2);
                        ?>
                        Attack%  : <?php echo $at21_format; ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player10_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player10_name;?>(<?php echo $t2_player10_pos;?>) <br>
                        goals  : <?php echo $t2_player10_goals;?> <br>
                        attempts : <?php echo $t2_player10_attempts;?> <br>
                        <?php 
                            $at22 = (float) $t2_player10_goals/$t2_player10_attempts;
                            $at22 = $at22*100;
                            $at22_format = number_format($at22, 2);
                        ?>
                        Attack%  : <?php echo $at22_format; ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player11_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player11_name;?>(<?php echo $t2_player11_pos;?>) <br>
                        goals  : <?php echo $t2_player11_goals;?> <br>
                        attempts : <?php echo $t2_player11_attempts;?> <br>
                        <?php 
                            $at23 = (float) $t2_player11_goals/$t2_player11_attempts;
                            $at23 = $at23*100;
                            $at23_format = number_format($at23, 2);
                        ?>
                        Attack%  : <?php echo $at23_format; ?>% <br>
                    </p> 
            </div>
            <div class="players-team1">
                    <p class="player-number">
                        <?php echo $t2_player12_num; ?>
                    </p>
                    <p class="player-name">
                        <?php echo $t2_player12_name;?>(<?php echo $t2_player12_pos;?>) <br>
                        goals  : <?php echo $t2_player12_goals;?> <br>
                        attempts : <?php echo $t2_player12_attempts;?> <br>
                        <?php 
                            $at24 = (float) $t2_player12_goals/$t2_player12_attempts;
                            $at24 = $at24*100;
                            $at24_format = number_format($at24, 2);
                        ?>
                        Attack%  : <?php echo $at24_format; ?>% <br>
                    </p> 
            </div>
        </div>
    </div>
    </body>
</html>