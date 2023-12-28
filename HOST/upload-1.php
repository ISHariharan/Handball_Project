<?php
session_start();
?>

<?php
    if(isset($_POST['upload']) && isset($_POST['name-team-1']) && isset($_POST['name-team-2']) && isset($_FILES['image-1']) && isset($_FILES['image-2']) && isset($_POST['league']) && isset($_FILES['league-image'])){
        include "db_conn.php";
        echo "<pre>";
        print_r($_FILES['league-image']);
        echo "</pre>";

        echo "<pre>";
        print_r($_FILES['image-1']);
        echo "</pre>";

        echo "<pre>";
        print_r($_FILES['image-2']);
        echo "</pre>";
        
        $conn = mysqli_connect('localhost', 'root', '', 'projecthb');
        /*//match_number
        $match_number = $_POST['match-number'];
        $_SESSION['match'] = $_POST['match-number'];*/

        //Refree Name 
        $refree_name_1 = $_POST['refree-name-1'];
        $refree_name_2 = $_POST['refree-name-2'];
        $_SESSION['refree-1'] = $_POST['refree-name-1'];
        $_SESSION['refree-2'] = $_POST['refree-name-2'];


        //league-image
        $img_name_league = $_FILES['league-image']['name'];
        $img_size_league = $_FILES['league-image']['size'];
        $img_type_league = $_FILES['league-image']['type'];
        $tmp_name_league = $_FILES['league-image']['tmp_name'];
        $img_error_league = $_FILES['league-image']['error'];

        //details of image 1
        $img_name_1 = $_FILES['image-1']['name'];
        $img_size_1 = $_FILES['image-1']['size'];
        $img_type_1 = $_FILES['image-1']['type'];
        $tmp_name_1 = $_FILES['image-1']['tmp_name'];
        $img_error_1 = $_FILES['image-1']['error'];

        //details of image 2
        $img_name_2 = $_FILES['image-2']['name'];
        $img_size_2 = $_FILES['image-2']['size'];
        $img_type_2 = $_FILES['image-2']['type'];
        $tmp_name_2 = $_FILES['image-2']['tmp_name'];
        $img_error_2 = $_FILES['image-2']['error'];
        //league name 
        $league_name = $_POST['league'];
        //team names
        $team_name_1 = $_POST['name-team-1'];
        $team_name_2 = $_POST['name-team-2'];
        //getting league name using senewssions 
        $_SESSION['league-name'] = $league_name;
        //getting name of the team using session
        $_SESSION['team-1'] = $team_name_1;
        $_SESSION['team-2'] = $team_name_2;
        

        //GoalKeeper List 
        //player number
        $gk1_player_num1 = $_POST['gk1-num-1'];
        $gk1_player_num2 = $_POST['gk1-num-2'];
        $gk1_player_num3 = $_POST['gk1-num-3'];
        $gk2_player_num1 = $_POST['gk2-num-1'];
        $gk2_player_num2 = $_POST['gk2-num-2'];
        $gk2_player_num3 = $_POST['gk2-num-3'];

        //player name
        $gk1_player_name1 = $_POST['gk1-name-1'];
        $gk1_player_name2 = $_POST['gk1-name-2'];
        $gk1_player_name3 = $_POST['gk1-name-3'];
        $gk2_player_name1 = $_POST['gk2-name-1'];
        $gk2_player_name2 = $_POST['gk2-name-2'];
        $gk2_player_name3 = $_POST['gk2-name-3'];

        //player postion 
        $gk = 'GK';

        //Sessions of goal keeper 
        $_SESSION['gk1_player_num1'] = $_POST['gk1-num-1'];
        $_SESSION['gk1_player_num2'] = $_POST['gk1-num-2'];
        $_SESSION['gk1_player_num3'] = $_POST['gk1-num-3'];
        $_SESSION['gk2_player_num1'] = $_POST['gk2-num-1'];
        $_SESSION['gk2_player_num2'] = $_POST['gk2-num-2'];
        $_SESSION['gk2_player_num3'] = $_POST['gk2-num-3'];
        $_SESSION['gk1_player_name1'] = $_POST['gk1-name-1'];
        $_SESSION['gk1_player_name2'] = $_POST['gk1-name-2'];
        $_SESSION['gk1_player_name3'] = $_POST['gk1-name-3'];
        $_SESSION['gk2_player_name1'] = $_POST['gk2-name-1'];
        $_SESSION['gk2_player_name2'] = $_POST['gk2-name-2'];
        $_SESSION['gk2_player_name3'] = $_POST['gk2-name-3'];
        $_SESSION['gk'] = 'GK';

        //players list - team 1
        //jersey number 
        $t1_player_num1 = $_POST['t1-num-1'];
        $t1_player_num2 = $_POST['t1-num-2'];
        $t1_player_num3 = $_POST['t1-num-3'];
        $t1_player_num4 = $_POST['t1-num-4'];
        $t1_player_num5 = $_POST['t1-num-5'];
        $t1_player_num6 = $_POST['t1-num-6'];
        $t1_player_num7 = $_POST['t1-num-7'];
        $t1_player_num8 = $_POST['t1-num-8'];
        $t1_player_num9 = $_POST['t1-num-9'];
        $t1_player_num10 = $_POST['t1-num-10'];
        $t1_player_num11 = $_POST['t1-num-11'];
        $t1_player_num12 = $_POST['t1-num-12'];
        $t1_player_num13 = $_POST['t1-num-13'];
        $t1_player_num14 = $_POST['t1-num-14'];

        //player name 
        $t1_player_name1 = $_POST['t1-name-1'];
        $t1_player_name2 = $_POST['t1-name-2'];
        $t1_player_name3 = $_POST['t1-name-3'];
        $t1_player_name4 = $_POST['t1-name-4'];
        $t1_player_name5 = $_POST['t1-name-5'];
        $t1_player_name6 = $_POST['t1-name-6'];
        $t1_player_name7 = $_POST['t1-name-7'];
        $t1_player_name8 = $_POST['t1-name-8'];
        $t1_player_name9 = $_POST['t1-name-9'];
        $t1_player_name10 = $_POST['t1-name-10'];
        $t1_player_name11 = $_POST['t1-name-11'];
        $t1_player_name12 = $_POST['t1-name-12'];
        $t1_player_name13 = $_POST['t1-name-13'];
        $t1_player_name14 = $_POST['t1-name-14'];

        //player position 
        $t1_player_pos1 = $_POST['t1-pos-1'];
        $t1_player_pos2 = $_POST['t1-pos-2'];
        $t1_player_pos3 = $_POST['t1-pos-3'];
        $t1_player_pos4 = $_POST['t1-pos-4'];
        $t1_player_pos5 = $_POST['t1-pos-5'];
        $t1_player_pos6 = $_POST['t1-pos-6'];
        $t1_player_pos7 = $_POST['t1-pos-7'];
        $t1_player_pos8 = $_POST['t1-pos-8'];
        $t1_player_pos9 = $_POST['t1-pos-9'];
        $t1_player_pos10 = $_POST['t1-pos-10'];
        $t1_player_pos11 = $_POST['t1-pos-11'];
        $t1_player_pos12 = $_POST['t1-pos-12'];
        $t1_player_pos13 = $_POST['t1-pos-13'];
        $t1_player_pos14 = $_POST['t1-pos-14'];

        //Session list of team 1(player number)
        $_SESSION['t1_player_num1'] = $_POST['t1-num-1'];
        $_SESSION['t1_player_num2'] = $_POST['t1-num-2'];
        $_SESSION['t1_player_num3'] = $_POST['t1-num-3'];
        $_SESSION['t1_player_num4'] = $_POST['t1-num-4'];
        $_SESSION['t1_player_num5'] = $_POST['t1-num-5'];
        $_SESSION['t1_player_num6'] = $_POST['t1-num-6'];
        $_SESSION['t1_player_num7'] = $_POST['t1-num-7'];
        $_SESSION['t1_player_num8'] = $_POST['t1-num-8'];
        $_SESSION['t1_player_num9'] = $_POST['t1-num-9'];
        $_SESSION['t1_player_num10'] = $_POST['t1-num-10'];
        $_SESSION['t1_player_num11'] = $_POST['t1-num-11'];
        $_SESSION['t1_player_num12'] = $_POST['t1-num-12'];
        $_SESSION['t1_player_num13'] = $_POST['t1-num-13'];
        $_SESSION['t1_player_num14'] = $_POST['t1-num-14'];

        //Session list of team 1(player name)
        $_SESSION['t1_player_name1'] = $_POST['t1-name-1'];
        $_SESSION['t1_player_name2'] = $_POST['t1-name-2'];
        $_SESSION['t1_player_name3'] = $_POST['t1-name-3'];
        $_SESSION['t1_player_name4'] = $_POST['t1-name-4'];
        $_SESSION['t1_player_name5'] = $_POST['t1-name-5'];
        $_SESSION['t1_player_name6'] = $_POST['t1-name-6'];
        $_SESSION['t1_player_name7'] = $_POST['t1-name-7'];
        $_SESSION['t1_player_name8'] = $_POST['t1-name-8'];
        $_SESSION['t1_player_name9'] = $_POST['t1-name-9'];
        $_SESSION['t1_player_name10'] = $_POST['t1-name-10'];
        $_SESSION['t1_player_name11'] = $_POST['t1-name-11'];
        $_SESSION['t1_player_name12'] = $_POST['t1-name-12'];
        $_SESSION['t1_player_name13'] = $_POST['t1-name-13'];
        $_SESSION['t1_player_name14'] = $_POST['t1-name-14'];

        //session list of team 1(player position)
        $_SESSION['t1_player_pos1'] = $_POST['t1-pos-1'];
        $_SESSION['t1_player_pos2'] = $_POST['t1-pos-2'];
        $_SESSION['t1_player_pos3'] = $_POST['t1-pos-3'];
        $_SESSION['t1_player_pos4'] = $_POST['t1-pos-4'];
        $_SESSION['t1_player_pos5'] = $_POST['t1-pos-5'];
        $_SESSION['t1_player_pos6'] = $_POST['t1-pos-6'];
        $_SESSION['t1_player_pos7'] = $_POST['t1-pos-7'];
        $_SESSION['t1_player_pos8'] = $_POST['t1-pos-8'];
        $_SESSION['t1_player_pos9'] = $_POST['t1-pos-9'];
        $_SESSION['t1_player_pos10'] = $_POST['t1-pos-10'];
        $_SESSION['t1_player_pos11'] = $_POST['t1-pos-11'];
        $_SESSION['t1_player_pos12'] = $_POST['t1-pos-12'];
        $_SESSION['t1_player_pos13'] = $_POST['t1-pos-13'];
        $_SESSION['t1_player_pos14'] = $_POST['t1-pos-14'];


        //player list-team2
        //players list - team 1
        $t2_player_num1 = $_POST['t2-num-1'];
        $t2_player_num2 = $_POST['t2-num-2'];
        $t2_player_num3 = $_POST['t2-num-3'];
        $t2_player_num4 = $_POST['t2-num-4'];
        $t2_player_num5 = $_POST['t2-num-5'];
        $t2_player_num6 = $_POST['t2-num-6'];
        $t2_player_num7 = $_POST['t2-num-7'];
        $t2_player_num8 = $_POST['t2-num-8'];
        $t2_player_num9 = $_POST['t2-num-9'];
        $t2_player_num10 = $_POST['t2-num-10'];
        $t2_player_num11 = $_POST['t2-num-11'];
        $t2_player_num12 = $_POST['t2-num-12'];
        $t2_player_num13 = $_POST['t2-num-13'];
        $t2_player_num14 = $_POST['t2-num-14'];

        //player name 
        $t2_player_name1 = $_POST['t2-name-1'];
        $t2_player_name2 = $_POST['t2-name-2'];
        $t2_player_name3 = $_POST['t2-name-3'];
        $t2_player_name4 = $_POST['t2-name-4'];
        $t2_player_name5 = $_POST['t2-name-5'];
        $t2_player_name6 = $_POST['t2-name-6'];
        $t2_player_name7 = $_POST['t2-name-7'];
        $t2_player_name8 = $_POST['t2-name-8'];
        $t2_player_name9 = $_POST['t2-name-9'];
        $t2_player_name10 = $_POST['t2-name-10'];
        $t2_player_name11 = $_POST['t2-name-11'];
        $t2_player_name12 = $_POST['t2-name-12'];
        $t2_player_name13 = $_POST['t2-name-13'];
        $t2_player_name14 = $_POST['t2-name-14'];

        //player position
         //player name 
         $t2_player_pos1 = $_POST['t2-pos-1'];
         $t2_player_pos2 = $_POST['t2-pos-2'];
         $t2_player_pos3 = $_POST['t2-pos-3'];
         $t2_player_pos4 = $_POST['t2-pos-4'];
         $t2_player_pos5 = $_POST['t2-pos-5'];
         $t2_player_pos6 = $_POST['t2-pos-6'];
         $t2_player_pos7 = $_POST['t2-pos-7'];
         $t2_player_pos8 = $_POST['t2-pos-8'];
         $t2_player_pos9 = $_POST['t2-pos-9'];
         $t2_player_pos10 = $_POST['t2-pos-10'];
         $t2_player_pos11 = $_POST['t2-pos-11'];
         $t2_player_pos12 = $_POST['t2-pos-12'];
         $t2_player_pos13 = $_POST['t2-pos-13'];
         $t2_player_pos14 = $_POST['t2-pos-14'];


         //Session list of team 2(player number)
        $_SESSION['t2_player_num1'] = $_POST['t2-num-1'];
        $_SESSION['t2_player_num2'] = $_POST['t2-num-2'];
        $_SESSION['t2_player_num3'] = $_POST['t2-num-3'];
        $_SESSION['t2_player_num4'] = $_POST['t2-num-4'];
        $_SESSION['t2_player_num5'] = $_POST['t2-num-5'];
        $_SESSION['t2_player_num6'] = $_POST['t2-num-6'];
        $_SESSION['t2_player_num7'] = $_POST['t2-num-7'];
        $_SESSION['t2_player_num8'] = $_POST['t2-num-8'];
        $_SESSION['t2_player_num9'] = $_POST['t2-num-9'];
        $_SESSION['t2_player_num10'] = $_POST['t2-num-10'];
        $_SESSION['t2_player_num11'] = $_POST['t2-num-11'];
        $_SESSION['t2_player_num12'] = $_POST['t2-num-12'];
        $_SESSION['t2_player_num13'] = $_POST['t2-num-13'];
        $_SESSION['t2_player_num14'] = $_POST['t2-num-14'];


        //Session list of team 2(player name)
        $_SESSION['t2_player_name1'] = $_POST['t2-name-1'];
        $_SESSION['t2_player_name2'] = $_POST['t2-name-2'];
        $_SESSION['t2_player_name3'] = $_POST['t2-name-3'];
        $_SESSION['t2_player_name4'] = $_POST['t2-name-4'];
        $_SESSION['t2_player_name5'] = $_POST['t2-name-5'];
        $_SESSION['t2_player_name6'] = $_POST['t2-name-6'];
        $_SESSION['t2_player_name7'] = $_POST['t2-name-7'];
        $_SESSION['t2_player_name8'] = $_POST['t2-name-8'];
        $_SESSION['t2_player_name9'] = $_POST['t2-name-9'];
        $_SESSION['t2_player_name10'] = $_POST['t2-name-10'];
        $_SESSION['t2_player_name11'] = $_POST['t2-name-11'];
        $_SESSION['t2_player_name12'] = $_POST['t2-name-12'];
        $_SESSION['t2_player_name13'] = $_POST['t2-name-13'];
        $_SESSION['t2_player_name14'] = $_POST['t2-name-14'];

        //session list of team 2(player position)
        $_SESSION['t2_player_pos1'] = $_POST['t2-pos-1'];
        $_SESSION['t2_player_pos2'] = $_POST['t2-pos-2'];
        $_SESSION['t2_player_pos3'] = $_POST['t2-pos-3'];
        $_SESSION['t2_player_pos4'] = $_POST['t2-pos-4'];
        $_SESSION['t2_player_pos5'] = $_POST['t2-pos-5'];
        $_SESSION['t2_player_pos6'] = $_POST['t2-pos-6'];
        $_SESSION['t2_player_pos7'] = $_POST['t2-pos-7'];
        $_SESSION['t2_player_pos8'] = $_POST['t2-pos-8'];
        $_SESSION['t2_player_pos9'] = $_POST['t2-pos-9'];
        $_SESSION['t2_player_pos10'] = $_POST['t2-pos-10'];
        $_SESSION['t2_player_pos11'] = $_POST['t2-pos-11'];
        $_SESSION['t2_player_pos12'] = $_POST['t2-pos-12'];
        $_SESSION['t2_player_pos13'] = $_POST['t2-pos-13'];
        $_SESSION['t2_player_pos14'] = $_POST['t2-pos-14'];

        /*link*/
        $match_link = $_POST['link'];

        /*username*/
        $username = $_SESSION['username'];

        /* Match Details */
        $sql = "INSERT INTO `match_details` (`team_1`, `team_2`, `league_name`) VALUES ('$team_name_1','$team_name_2','$league_name')";
        $request = mysqli_query($conn, $sql);

        /* fetching match id */
        $sql1 = "select * from match_details where team_1 = '$team_name_1' and team_2 = '$team_name_2' and league_name = '$league_name'";
        $request1 = mysqli_query($conn, $sql1);
        $row = mysqli_fetch_array($request1);
        $match_id = $row['match_id'];
        $_SESSION['match_no'] = $match_id;

        /*Insert into refree table*/
        $sql = "INSERT INTO `refree_details` (`match_no`,`Refree_name1`,`Refree_name2`) VALUES ('$match_id','$refree_name_1','$refree_name_2')";
        $result = mysqli_query($conn, $sql);

        //UPLOAD DETAILS OF THE players 
        $sql = "INSERT INTO `player_details` (`Player_Name`, `Player_No`, `Player_pos`, `Match_id`, `team_name`) VALUES ('$gk1_player_name1', '$gk1_player_num1', 'GK', '$match_id', '$team_name_1'), ('$gk1_player_name2', '$gk1_player_num2', 'GK', '$match_id', '$team_name_1'), ('$gk1_player_name3', '$gk1_player_num3', 'GK', '$match_id', '$team_name_1'), ('$gk2_player_name1', '$gk2_player_num1', 'GK', '$match_id', '$team_name_1'), ('$gk2_player_name2', '$gk2_player_num2', 'GK', '$match_id', '$team_name_1'), ('$gk2_player_name3', '$gk2_player_num3', 'GK', '$match_id', '$team_name_1'), ('$t1_player_name1', '$t1_player_num1', '$t1_player_pos1', '$match_id', '$team_name_1'), ('$t1_player_name2', '$t1_player_num2', '$t1_player_pos2', '$match_id', '$team_name_1'), ('$t1_player_name3', '$t1_player_num3', '$t1_player_pos3', '$match_id', '$team_name_1'), ('$t1_player_name4', '$t1_player_num4', '$t1_player_pos4', '$match_id', '$team_name_1'), ('$t1_player_name5', '$t1_player_num5', '$t1_player_pos5', '$match_id', '$team_name_1'), ('$t1_player_name6', '$t1_player_num6', '$t1_player_pos6', '$match_id', '$team_name_1'), ('$t1_player_name7', '$t1_player_num7', '$t1_player_pos7', '$match_id', '$team_name_1'), ('$t1_player_name8', '$t1_player_num8', '$t1_player_pos8', '$match_id', '$team_name_1'), ('$t1_player_name9', '$t1_player_num9', '$t1_player_pos9', '$match_id', '$team_name_1'), ('$t1_player_name10', '$t1_player_num10', '$t1_player_pos10', '$match_id', '$team_name_1'), ('$t1_player_name11', '$t1_player_num11', '$t1_player_pos11', '$match_id', '$team_name_1'), ('$t1_player_name12', '$t1_player_num12', '$t1_player_pos12', '$match_id', '$team_name_1'), ('$t2_player_name1', '$t2_player_num1', '$t2_player_pos1', '$match_id', '$team_name_2'), ('$t2_player_name2', '$t2_player_num2', '$t2_player_pos2', '$match_id', '$team_name_2'), ('$t2_player_name3', '$t2_player_num3', '$t2_player_pos3', '$match_id', '$team_name_2'), ('$t2_player_name4', '$t2_player_num4', '$t2_player_pos4', '$match_id', '$team_name_2'), ('$t2_player_name5', '$t2_player_num5', '$t2_player_pos5', '$match_id', '$team_name_2'), ('$t2_player_name6', '$t2_player_num6', '$t2_player_pos6', '$match_id', '$team_name_2'), ('$t2_player_name7', '$t2_player_num7', '$t2_player_pos7', '$match_id', '$team_name_2'), ('$t2_player_name8', '$t2_player_num8', '$t2_player_pos8', '$match_id', '$team_name_2'), ('$t2_player_name9', '$t2_player_num9', '$t2_player_pos9', '$match_id', '$team_name_2'), ('$t2_player_name10', '$t2_player_num10', '$t2_player_pos10', '$match_id', '$team_name_2'), ('$t2_player_name11', '$t2_player_num11', '$t2_player_pos11', '$match_id', '$team_name_2'), ('$t2_player_name12', '$t2_player_num12', '$t2_player_pos12', '$match_id', '$team_name_2')";
        $result = mysqli_query($conn, $sql);

        $link = "INSERT INTO `stream_link` (`match_no`, `link`) VALUES ('$match_id','$match_link');";
        $l1 = mysqli_query($conn, $link);
        
        //Upload leagueimage
        if($img_error_league == 0){
            if($img_size_league > 1000000){
                $em = "Sorry, your file is too large";
                header("Location: upload.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name_league, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'images/'.$new_img_name;
                    move_uploaded_file($tmp_name_league, $img_upload_path);
                    //INSERT INTO DATABASE
                    $sql = "INSERT INTO `league_details` (`league_name`,`league_img`) VALUES ('$league_name','$new_img_name')";
                    $result = mysqli_query($conn, $sql);
                }
            }
        }

        $_SESSION['league_image'] = $new_img_name;

        

        //upload image 1
        if($img_error_1 == 0){
            if($img_size_1 > 1000000){
                $em = "Sorry, your file is too large";
                header("Location: upload.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name_1, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'images/'.$new_img_name;
                    move_uploaded_file($tmp_name_1, $img_upload_path);
                    //INSERT INTO DATABASE
                    $sql = "INSERT INTO `img_details` (`url`,`team_name`) VALUES ('$new_img_name','$team_name_1')";
                    $result = mysqli_query($conn, $sql);
                }
            }
        }

        $_SESSION['team1_img'] = $new_img_name;

        //upload image 2
        if($img_error_2 == 0){
            if($img_size_2 > 1000000){
                $em = "Sorry, your file is too large";
                header("Location: upload.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name_2, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'images/'.$new_img_name;
                    move_uploaded_file($tmp_name_2, $img_upload_path);
                    //INSERT INTO DATABASE
                    $sql = "INSERT INTO `img_details` (`url`,`team_name`) VALUES ('$new_img_name','$team_name_2')";
                    $result = mysqli_query($conn, $sql);
                    if($result){ 
                        header("Location: score_card-1.php");
                    }
                    else{
                        echo "Error";
                    }
                }
            }
        }

        $_SESSION['team2_img'] = $new_img_name;


        
    }
?>
