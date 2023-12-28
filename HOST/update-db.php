<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $conn = mysqli_connect('localhost','root','','projecthb');
        
        $league_name = $_POST['league'];
        $refree_name1 = $_POST['refree-name-1'];
        $refree_name2 = $_POST['refree-name-2'];
        $start_date = $_POST['from'];
        $end_date = $_POST['to'];
        $host = $_POST['host'];
        $ph = $_POST['ph'];
        $email = $_POST['email'];
        echo $league_name;
        //league-image
        $img_name_league = $_FILES['league-image']['name'];
        $img_size_league = $_FILES['league-image']['size'];
        $img_type_league = $_FILES['league-image']['type'];
        $tmp_name_league = $_FILES['league-image']['tmp_name'];
        $img_error_league = $_FILES['league-image']['error'];

        //Upload league image
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
                    $sql = "INSERT INTO `updates` (`league_name`,`refree1`,`refree2`,`league_img`,`host`,`lfrom`,`lto`,`ph`,`email`) VALUES ('$league_name','$refree_name1','$refree_name2' , '$new_img_name','$host','$start_date','$end_date','$ph','$email')";
                    $result = mysqli_query($conn, $sql);
                }
                if($result){ 
                    header("Location: host.php");
                }
                else{
                    echo "Error";
                }
            }
        }
        
    
    }
?>