<?php
    session_start();
    $conn = mysqli_connect('localhost','root','','projecthb');

    /*images*/
    $league_img = $_SESSION['$league_img'];
    $team1_img = $_SESSION['team1_img'];
    $team2_img = $_SESSION['team2_img'];
    
    /* team details */
    $league_name = isset($_SESSION['league-name']) ? $_SESSION['league-name'] : '';
    $match_no = isset($_SESSION['match_no']) ? $_SESSION['match_no'] : '';
    $team1_name = isset($_SESSION['team-1']) ? $_SESSION['team-1'] : '';
    $team2_name = isset($_SESSION['team-2']) ? $_SESSION['team-2'] : '';
    $_SESSION['match_no'] = $match_no;
    /* Score details */
    $team1_score = $_POST["team1-score"];
    $team2_score = $_POST["team2-score"];
    
    /* Team 1 goal keeper details */
    $t1_gk1_num = $_SESSION["gk1_player_num1"];
    $t1_gk1_name = $_SESSION["gk1_player_name1"];
    $t1_gk1_saved = $_POST["t1-gk1-saved"];
    $t1_gk1_attempts = $_POST["t1-gk1-attempts"];

    $t1_gk2_num = $_SESSION["gk1_player_num2"];
    $t1_gk2_name = $_SESSION["gk1_player_name2"];
    $t1_gk2_saved = $_POST["t1-gk2-saved"];
    $t1_gk2_attempts = $_POST["t1-gk2-attempts"];

    $t1_gk3_num = $_SESSION["gk1_player_num3"];
    $t1_gk3_name = $_SESSION["gk1_player_name3"];
    $t1_gk3_saved = $_POST["t1-gk3-saved"];
    $t1_gk3_attempts = $_POST["t1-gk3-attempts"];

    /* Team 1 player details */
    $t1_p1_num = $_SESSION["t1_player_num1"];
    $t1_p1_name = $_SESSION["t1_player_name1"];
    $t1_p1_pos = $_SESSION["t1_player_pos1"];
    $t1_p1_goals = $_POST["t1-p1-goals"];
    $t1_p1_attempts = $_POST["t1-p1-attempts"];

    $t1_p2_num = $_SESSION["t1_player_num2"];
    $t1_p2_name = $_SESSION["t1_player_name2"];
    $t1_p2_pos = $_SESSION["t1_player_pos2"];
    $t1_p2_goals = $_POST["t1-p2-goals"];
    $t1_p2_attempts = $_POST["t1-p2-attempts"];

    $t1_p3_num = $_SESSION["t1_player_num3"];
    $t1_p3_name = $_SESSION["t1_player_name3"];
    $t1_p3_pos = $_SESSION["t1_player_pos3"];
    $t1_p3_goals = $_POST["t1-p3-goals"];
    $t1_p3_attempts = $_POST["t1-p3-attempts"];

    $t1_p4_num = $_SESSION["t1_player_num4"];
    $t1_p4_name = $_SESSION["t1_player_name4"];
    $t1_p4_pos = $_SESSION["t1_player_pos4"];
    $t1_p4_goals = $_POST["t1-p4-goals"];
    $t1_p4_attempts = $_POST["t1-p4-attempts"];

    $t1_p5_num = $_SESSION["t1_player_num5"];
    $t1_p5_name = $_SESSION["t1_player_name5"];
    $t1_p5_pos = $_SESSION["t1_player_pos5"];
    $t1_p5_goals = $_POST["t1-p5-goals"];
    $t1_p5_attempts = $_POST["t1-p5-attempts"];

    $t1_p6_num = $_SESSION["t1_player_num6"];
    $t1_p6_name = $_SESSION["t1_player_name6"];
    $t1_p6_pos = $_SESSION["t1_player_pos6"];
    $t1_p6_goals = $_POST["t1-p6-goals"];
    $t1_p6_attempts = $_POST["t1-p6-attempts"];

    $t1_p7_num = $_SESSION["t1_player_num7"];
    $t1_p7_name = $_SESSION["t1_player_name7"];
    $t1_p7_pos = $_SESSION["t1_player_pos7"];
    $t1_p7_goals = $_POST["t1-p7-goals"];
    $t1_p7_attempts = $_POST["t1-p7-attempts"];

    $t1_p8_num = $_SESSION["t1_player_num8"];
    $t1_p8_name = $_SESSION["t1_player_name8"];
    $t1_p8_pos = $_SESSION["t1_player_pos8"];
    $t1_p8_goals = $_POST["t1-p8-goals"];
    $t1_p8_attempts = $_POST["t1-p8-attempts"];

    $t1_p9_num = $_SESSION["t1_player_num9"];
    $t1_p9_name = $_SESSION["t1_player_name9"];
    $t1_p9_pos = $_SESSION["t1_player_pos9"];
    $t1_p9_goals = $_POST["t1-p9-goals"];
    $t1_p9_attempts = $_POST["t1-p9-attempts"];

    $t1_p10_num = $_SESSION["t1_player_num10"];
    $t1_p10_name = $_SESSION["t1_player_name10"];
    $t1_p10_pos = $_SESSION["t1_player_pos10"];
    $t1_p10_goals = $_POST["t1-p10-goals"];
    $t1_p10_attempts = $_POST["t1-p10-attempts"];

    $t1_p11_num = $_SESSION["t1_player_num11"];
    $t1_p11_name = $_SESSION["t1_player_name11"];
    $t1_p11_pos = $_SESSION["t1_player_pos11"];
    $t1_p11_goals = $_POST["t1-p11-goals"];
    $t1_p11_attempts = $_POST["t1-p11-attempts"];

    $t1_p12_num = $_SESSION["t1_player_num12"];
    $t1_p12_name = $_SESSION["t1_player_name12"];
    $t1_p12_pos = $_SESSION["t1_player_pos12"];
    $t1_p12_goals = $_POST["t1-p12-goals"];
    $t1_p12_attempts = $_POST["t1-p12-attempts"];

    /* Team 2 goal keeper details */
    $t2_gk1_num = $_SESSION["gk2_player_num1"];
    $t2_gk1_name = $_SESSION["gk2_player_name1"];
    $t2_gk1_saved = $_POST["t2-gk1-saved"];
    $t2_gk1_attempts = $_POST["t2-gk1-attempts"];

    $t2_gk2_num = $_SESSION["gk2_player_num2"];
    $t2_gk2_name = $_SESSION["gk2_player_name2"];
    $t2_gk2_saved = $_POST["t2-gk2-saved"];
    $t2_gk2_attempts = $_POST["t2-gk2-attempts"];

    $t2_gk3_num = $_SESSION["gk2_player_num3"];
    $t2_gk3_name = $_SESSION["gk2_player_name3"];
    $t2_gk3_saved = $_POST["t2-gk3-saved"];
    $t2_gk3_attempts = $_POST["t2-gk3-attempts"];

    /* Team 2 player details */
    $t2_p1_num = $_SESSION["t2_player_num1"];
    $t2_p1_name = $_SESSION["t2_player_name1"];
    $t2_p1_pos = $_SESSION["t2_player_pos1"];
    $t2_p1_goals = $_POST["t2-p1-goals"];
    $t2_p1_attempts = $_POST["t2-p1-attempts"];

    $t2_p2_num = $_SESSION["t2_player_num2"];
    $t2_p2_name = $_SESSION["t2_player_name2"];
    $t2_p2_pos = $_SESSION["t2_player_pos2"];
    $t2_p2_goals = $_POST["t2-p2-goals"];
    $t2_p2_attempts = $_POST["t2-p2-attempts"];

    $t2_p3_num = $_SESSION["t2_player_num3"];
    $t2_p3_name = $_SESSION["t2_player_name3"];
    $t2_p3_pos = $_SESSION["t2_player_pos3"];
    $t2_p3_goals = $_POST["t2-p3-goals"];
    $t2_p3_attempts = $_POST["t2-p3-attempts"];

    $t2_p4_num = $_SESSION["t2_player_num4"];
    $t2_p4_name = $_SESSION["t2_player_name4"];
    $t2_p4_pos = $_SESSION["t2_player_pos4"];
    $t2_p4_goals = $_POST["t2-p4-goals"];
    $t2_p4_attempts = $_POST["t2-p4-attempts"];

    $t2_p5_num = $_SESSION["t2_player_num5"];
    $t2_p5_name = $_SESSION["t2_player_name5"];
    $t2_p5_pos = $_SESSION["t2_player_pos5"];
    $t2_p5_goals = $_POST["t2-p5-goals"];
    $t2_p5_attempts = $_POST["t2-p5-attempts"];

    $t2_p6_num = $_SESSION["t2_player_num6"];
    $t2_p6_name = $_SESSION["t2_player_name6"];
    $t2_p6_pos = $_SESSION["t2_player_pos6"];
    $t2_p6_goals = $_POST["t2-p6-goals"];
    $t2_p6_attempts = $_POST["t2-p6-attempts"];

    $t2_p7_num = $_SESSION["t2_player_num7"];
    $t2_p7_name = $_SESSION["t2_player_name7"];
    $t2_p7_pos = $_SESSION["t2_player_pos7"];
    $t2_p7_goals = $_POST["t2-p7-goals"];
    $t2_p7_attempts = $_POST["t2-p7-attempts"];

    $t2_p8_num = $_SESSION["t2_player_num8"];
    $t2_p8_name = $_SESSION["t2_player_name8"];
    $t2_p8_pos = $_SESSION["t2_player_pos8"];
    $t2_p8_goals = $_POST["t2-p8-goals"];
    $t2_p8_attempts = $_POST["t2-p8-attempts"];

    $t2_p9_num = $_SESSION["t2_player_num9"];
    $t2_p9_name = $_SESSION["t2_player_name9"];
    $t2_p9_pos = $_SESSION["t2_player_pos9"];
    $t2_p9_goals = $_POST["t2-p9-goals"];
    $t2_p9_attempts = $_POST["t2-p9-attempts"];

    $t2_p10_num = $_SESSION["t2_player_num10"];
    $t2_p10_name = $_SESSION["t2_player_name10"];
    $t2_p10_pos = $_SESSION["t2_player_pos10"];
    $t2_p10_goals = $_POST["t2-p10-goals"];
    $t2_p10_attempts = $_POST["t2-p10-attempts"];

    $t2_p11_num = $_SESSION["t2_player_num11"];
    $t2_p11_name = $_SESSION["t2_player_name11"];
    $t2_p11_pos = $_SESSION["t2_player_pos11"];
    $t2_p11_goals = $_POST["t2-p11-goals"];
    $t2_p11_attempts = $_POST["t2-p11-attempts"];

    $t2_p12_num = $_SESSION["t2_player_num12"];
    $t2_p12_name = $_SESSION["t2_player_name12"];
    $t2_p12_pos = $_SESSION["t2_player_pos12"];
    $t2_p12_goals = $_POST["t2-p12-goals"];
    $t2_p12_attempts = $_POST["t2-p12-attempts"];

    $t1_p1_goals = (int)$t1_p1_goals;
    $t1_p2_goals = (int)$t1_p2_goals;
    $t1_p3_goals = (int)$t1_p3_goals;
    $t1_p4_goals = (int)$t1_p4_goals;
    $t1_p5_goals = (int)$t1_p5_goals;
    $t1_p6_goals = (int)$t1_p6_goals;
    $t1_p7_goals = (int)$t1_p7_goals;
    $t1_p8_goals = (int)$t1_p8_goals;
    $t1_p9_goals = (int)$t1_p9_goals;
    $t1_p10_goals = (int)$t1_p10_goals;
    $t1_p11_goals = (int)$t1_p11_goals;
    $t1_p12_goals = (int)$t1_p12_goals;

    $t1_total_goals = $t1_p1_goals + $t1_p2_goals + $t1_p3_goals + $t1_p4_goals + $t1_p5_goals + $t1_p6_goals + $t1_p7_goals + $t1_p8_goals + $t1_p9_goals + $t1_p10_goals + $t1_p11_goals + $t1_p12_goals;
    $t1_total_attempts = (int)$t1_p1_attempts + (int)$t1_p2_attempts + (int)$t1_p3_attempts + (int)$t1_p4_attempts + (int)$t1_p5_attempts + (int)$t1_p6_attempts + (int)$t1_p7_attempts + (int)$t1_p8_attempts + (int)$t1_p9_attempts + (int)$t1_p10_attempts + (int)$t1_p11_attempts + (int)$t1_p12_attempts; 

    $t2_total_goals = (int)$t2_p1_goals + (int)$t2_p2_goals + (int)$t2_p3_goals + (int)$t2_p4_goals + (int)$t2_p5_goals + (int)$t2_p6_goals + (int)$t2_p7_goals + (int)$t2_p8_goals + (int)$t2_p9_goals + (int)$t2_p10_goals + (int)$t2_p11_goals + (int)$t2_p12_goals;
    $t2_total_attempts = (int)$t2_p1_attempts + (int)$t2_p2_attempts + (int)$t2_p3_attempts + (int)$t2_p4_attempts + (int)$t2_p5_attempts + (int)$t2_p6_attempts + (int)$t2_p7_attempts + (int)$t2_p8_attempts + (int)$t2_p9_attempts + (int)$t2_p10_attempts + (int)$t2_p11_attempts + (int)$t2_p12_attempts; 

    $t1_total_defence = $t2_total_attempts - $t2_total_goals;
    $t2_total_defence = $t1_total_attempts - $t1_total_goals;

    /*In Total attack*/
    $t1_attack = (float) $t1_total_goals/$t1_total_attempts;
    $t1_attack = $t1_attack*100;
    $t2_attack = (float) $t2_total_goals/$t2_total_attempts;
    $t2_attack = $t2_attack*100;

    /**In total defence */
    $t1_defence = (float) $t1_total_defence/$t2_total_attempts;
    $t2_defence = (float) $t2_total_defence/$t1_total_attempts;

    /**In total possession */
    $total1 = $t1_total_attempts + $t2_total_attempts;
    $t1_possession = (float) $t1_total_attempts/$total1;
    $t1_possession = $t1_possession*100;
    $t2_possession = (float) $t2_total_attempts/$total1;
    $t2_possession = $t2_possession*100;

    /*Turnovers */
    $t1_saves = (int)$t1_gk1_saved + (int)$t1_gk2_saved + (int)$t1_gk3_saved;
    $t2_saves = (int)$t2_gk1_saved + (int)$t2_gk2_saved + (int)$t2_gk3_saved;

    /*Penalties Saved */
    (int)$t1_penalties = (int)$t1_saves/10;
    (int)$t2_penalties = (int)$t2_saves/10;

    /*username */
    $hostname = $_SESSION['username'];

    $sql = "INSERT INTO `match_history` (`match_no`, `team1_name`, `goals1`, `team2_name`, `goals2`,`gk1_t1_num`,`gk1_t1_name`,`gk1_t1_saves`,`gk1_t1_attempts`,`gk2_t1_num`,`gk2_t1_name`,`gk2_t1_saves`,`gk2_t1_attempts`,`gk3_t1_num`,`gk3_t1_name`,`gk3_t1_saves`,`gk3_t1_attempts`,`p1_t1_num`,`p1_t1_name`,`p1_t1_pos`,`p1_t1_goals`,`p1_t1_attempts`,`p2_t1_num`,`p2_t1_name`,`p2_t1_pos`,`p2_t1_goals`,`p2_t1_attempts`,`p3_t1_num`,`p3_t1_name`,`p3_t1_pos`,`p3_t1_goals`,`p3_t1_attempts`,`p4_t1_num`,`p4_t1_name`,`p4_t1_pos`,`p4_t1_goals`,`p4_t1_attempts`,`p5_t1_num`,`p5_t1_name`,`p5_t1_pos`,`p5_t1_goals`,`p5_t1_attempts`,`p6_t1_num`,`p6_t1_name`,`p6_t1_pos`,`p6_t1_goals`,`p6_t1_attempts`,`p7_t1_num`,
    `p7_t1_name`,`p7_t1_pos`,`p7_t1_goals`,`p7_t1_attempts`, `p8_t1_num`,`p8_t1_name`, `p8_t1_pos`, `p8_t1_goals`, `p8_t1_attempts`,`p9_t1_num`, `p9_t1_name`, `p9_t1_pos`, `p9_t1_goals`, `p9_t1_attempts`, `p10_t1_num`, `p10_t1_name`, `p10_t1_pos`, `p10_t1_goals`, `p10_t1_attempts`, `p11_t1_num`, `p11_t1_name`, `p11_t1_pos`, `p11_t1_goals`, `p11_t1_attempts`, `p12_t1_num`, `p12_t1_name`, `p12_t1_pos`, `p12_t1_goals`, `p12_t1_attempts`, `gk1_t2_num`,`gk1_t2_name`,`gk1_t2_saves`,`gk1_t2_attempts`,`gk2_t2_num`,`gk2_t2_name`,`gk2_t2_saves`,`gk2_t2_attempts`,`gk3_t2_num`,`gk3_t2_name`,`gk3_t2_saves`,`gk3_t2_attempts`,
    `p1_t2_num`,`p1_t2_name`,`p1_t2_pos`,`p1_t2_goals`,`p1_t2_attempts`,`p2_t2_num`,`p2_t2_name`,`p2_t2_pos`,`p2_t2_goals`,`p2_t2_attempts`,`p3_t2_num`,`p3_t2_name`,`p3_t2_pos`,`p3_t2_goals`,`p3_t2_attempts`,`p4_t2_num`,`p4_t2_name`,`p4_t2_pos`,`p4_t2_goals`,`p4_t2_attempts`,`p5_t2_num`,`p5_t2_name`,`p5_t2_pos`,`p5_t2_goals`,`p5_t2_attempts`,`p6_t2_num`,`p6_t2_name`,`p6_t2_pos`,`p6_t2_goals`,`p6_t2_attempts`,`p7_t2_num`,`p7_t2_name`,`p7_t2_pos`,`p7_t2_goals`,`p7_t2_attempts`, `p8_t2_num`,`p8_t2_name`, `p8_t2_pos`, `p8_t2_goals`, `p8_t2_attempts`,`p9_t2_num` ,`p9_t2_name`,`p9_t2_pos` ,`p9_t2_goals`, `p9_t2_attempts`,`p10_t2_num` ,`p10_t2_name`, `p10_t2_pos` ,`p10_t2_goals`, 
    `p10_t2_attempts`, `p11_t2_num` ,`p11_t2_name`, `p11_t2_pos` ,`p11_t2_goals`, `p11_t2_attempts`,`p12_t2_num` ,`p12_t2_name`,`p12_t2_pos` ,`p12_t2_goals`, `p12_t2_attempts`, `league_name`, `attacks1`, `attacks2`, `possession1`, `possession2`, `turnover1`, `turnover2`, `penalties1`, `penalties2`,`host`,`league_image`,`team1_img`,`team2_img`) VALUES ('$match_no','$team1_name','$team1_score','$team2_name','$team2_score','$t1_gk1_num','$t1_gk1_name','$t1_gk1_saved','$t1_gk1_attempts','$t1_gk2_num','$t1_gk2_name','$t1_gk2_saved','$t1_gk2_attempts','$t1_gk3_num','$t1_gk3_name','$t1_gk3_saved','$t1_gk3_attempts','$t1_p1_num','$t1_p1_name','$t1_p1_pos','$t1_p1_goals','$t1_p1_attempts','$t1_p2_num','$t1_p2_name','$t1_p2_pos','$t1_p2_goals','$t1_p2_attempts','$t1_p3_num','$t1_p3_name','$t1_p3_pos','$t1_p3_goals','$t1_p3_attempts','$t1_p4_num',
    '$t1_p4_name','$t1_p4_pos','$t1_p4_goals','$t1_p4_attempts','$t1_p5_num','$t1_p5_name','$t1_p5_pos','$t1_p5_goals','$t1_p5_attempts','$t1_p6_num','$t1_p6_name','$t1_p6_pos','$t1_p6_goals','$t1_p6_attempts','$t1_p7_num','$t1_p7_name','$t1_p7_pos','$t1_p7_goals','$t1_p7_attempts','$t1_p8_num','$t1_p8_name','$t1_p8_pos','$t1_p8_goals','$t1_p8_attempts','$t1_p9_num','$t1_p9_name','$t1_p9_pos','$t1_p9_goals','$t1_p9_attempts','$t1_p10_num','$t1_p10_name','$t1_p10_pos','$t1_p10_goals','$t1_p10_attempts','$t1_p11_num','$t1_p11_name','$t1_p11_pos','$t1_p11_goals','$t1_p11_attempts','$t1_p12_num','$t1_p12_name','$t1_p12_pos','$t1_p12_goals',
    '$t1_p12_attempts','$t2_gk1_num','$t2_gk1_name','$t2_gk1_saved','$t2_gk1_attempts','$t2_gk2_num','$t2_gk2_name','$t2_gk2_saved','$t2_gk2_attempts','$t2_gk3_num','$t2_gk3_name','$t2_gk3_saved','$t2_gk3_attempts','$t2_p1_num','$t2_p1_name','$t2_p1_pos','$t2_p1_goals','$t2_p1_attempts','$t2_p2_num','$t2_p2_name','$t2_p2_pos','$t2_p2_goals','$t2_p2_attempts','$t2_p3_num','$t2_p3_name','$t2_p3_pos','$t2_p3_goals','$t2_p3_attempts','$t2_p4_num','$t2_p4_name','$t2_p4_pos','$t2_p4_goals','$t2_p4_attempts','$t2_p5_num','$t2_p5_name','$t2_p5_pos','$t2_p5_goals','$t2_p5_attempts','$t2_p6_num','$t2_p6_name','$t2_p6_pos','$t2_p6_goals','$t2_p6_attempts',
    '$t2_p7_num','$t2_p7_name','$t2_p7_pos','$t2_p7_goals','$t2_p7_attempts','$t2_p8_num','$t2_p8_name','$t2_p8_pos','$t2_p8_goals','$t2_p8_attempts', '$t2_p9_num' ,'$t2_p9_name', '$t2_p9_pos' , '$t2_p9_goals','$t2_p9_attempts', '$t2_p10_num' , '$t2_p10_name', '$t2_p10_pos' , '$t2_p10_goals','$t2_p10_attempts', '$t2_p11_num' , '$t2_p11_name', '$t2_p11_pos' ,'$t2_p11_goals','$t2_p11_attempts', '$t2_p12_num' ,'$t2_p12_name', '$t2_p12_pos' ,'$t2_p12_goals','$t2_p12_attempts','$league_name', '$t1_attack', '$t2_attack', '$t1_possession', '$t2_possession', '$t1_saves', '$t2_saves', '$t1_penalties', '$t2_penalties','$hostname','$league_img','$team1_img','$team2_img')";
    $result = mysqli_query($conn, $sql);
    if($result){
        header("Location: dis_analysis.php");
    }else{
        echo "error". mysqli_error($conn);
    }

?>

<!--<script>
    var attack1 = $t1_p1_goals + $t1_p2_goals + $t1_p3_goals + $t1_p4_goals + $t1_p5_goals + $t1_p6_goals + $t1_p7_goals + $t1_p8_goals + $t1_p9_goals + $t1_p10_goals + $t1_p11_goals + $t1_p12_goals;
    var attack2 = $t2_p1_goals + $t2_p2_goals + $t2_p3_goals + $t2_p4_goals + $t2_p5_goals + $t2_p6_goals + $t2_p7_goals + $t2_p8_goals + $t2_p9_goals + $t2_p10_goals + $t2_p11_goals + $t2_p12_goals;
    var attempts1 = $t1_p1_attempts + $t1_p2_attempts + $t1_p3_attempts + $t1_p4_attempts + $t1_p5_attempts + $t1_p6_attempts + $t1_p7_attempts + $t1_p8_attempts + $t1_p9_attempts + $t1_p10_attempts + $t1_p11_attempts + $t1_p12_attempts ;
    var attempts2 = $t2_p1_attempts + $t2_p2_attempts + $t2_p3_attempts + $t2_p4_attempts + $t2_p5_attempts + $t2_p6_attempts + $t2_p7_attempts + $t2_p8_attempts + $t2_p9_attempts + $t2_p10_attempts + $t2_p11_attempts + $t2_p12_attempts ;
    var saves1 = $t1_gk1_saved + $t1_gk2_saved + $t1_gk3_saved ;
    var saves2 = $t2_gk1_saved + $t2_gk2_saved + $t2_gk3_saved ;
    var sav_attempts1 = $t1_gk1_attempts + $t1_gk2_attempts + $t1_gk3_attempts;
    var sav_attempts2 = $t2_gk1_attempts + $t2_gk2_attempts + $t2_gk2_attempts;
    var total_attempts = attempts1 + attempts2;
    /* Team 1 attack percentage */
    var attack1_percentage = attack1/attempts1;
    attack1_percentage =attack1_percentage*100;

    /* Team 2 attack percentage */
    var attack2_percentage = attack2/attempts2;
    attack2_percentage =attack2_percentage*100;

    /* Possession team 1 */
    var possession_team1 = attempts1/total_attempts;
    possession_team1 = possession_team1*100;

    /* Possession team 2 */
    var possession_team2 = attempts2/total_attempts;
    possession_team2 = possession_team2*100;
</script>-->
