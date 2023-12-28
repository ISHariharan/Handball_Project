<?php

    if(isset($_POST['img-up-1']) && isset($_FILES['image']) && isset($_POST['name-team-1'])){
        include "db_conn.php";
        /*echo "<pre>";
        print_r($_FILES['image']);
        echo "</pre>";*/

        $img_name = $_FILES['image']['name'];
        $img_size = $_FILES['image']['size'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $error = $_FILES['image']['error'];
        $team_name = $_POST['name-team-1'];
        
        if($error == 0){
            if($img_size > 125000){
                $em = "Sorry, your file is too large";
                header("Location: upload.php?error=$em");
            }
            else{
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
                $allowed_exs = array("jpg","jpeg","png");
                if(in_array($img_ex_lc, $allowed_exs)){
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = 'images/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
                    //INSERT INTO DATABASE
                    $sql = "INSERT INTO `img_details` (`url`,`team_name`) VALUES ('$new_img_name','$team_name')";
                    $result = mysqli_query($conn, $sql);
                    if($result){ 
                        header("Location: view.php");
                    }
                    else{
                        echo "Error";
                    }
                }
            }
        }
        else{
            $em = "Unknown error occurred!";
            ?>
            <script>window.location.href= "upload.php?error=$em";</script>
            <?php
        }
    }
?>