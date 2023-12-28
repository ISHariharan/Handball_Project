<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View.photo</title>
    <style>
        #image-1{
            height: 100px;
            width: 100px;
        }
        #image-2{
            height: 100px;
            width: 100px;
        }
    </style>
</head>
<body>
    <a href="create.php">home</a>
    <?php
        include "db_conn.php";
        $team_name_1 = $_SESSION['team-1'];
        $team_name_2 = $_SESSION['team-2'];
        $sql_1 = "select * from img_details where team_name = '$team_name_1'";
        $res_1 = mysqli_query($conn, $sql_1);

        $sql_2 = "select * from img_details where team_name = '$team_name_2'";
        $res_2 = mysqli_query($conn, $sql_2);

        if(mysqli_num_rows($res_1) > 0){
            $image_1 = mysqli_fetch_assoc($res_1);
        }

        if(mysqli_num_rows($res_2) > 0){
            $image_2 = mysqli_fetch_assoc($res_2);
        }
    ?>

    <div>
        <?php if(isset($image_1)) { ?>
            <img src="images/<?= $image_1['url'] ?>" alt="" class="image-1">
        <?php } ?>

        <?php if(isset($image_2)) { ?>
            <img src="images/<?= $image_2['url'] ?>" alt="" class="image-2">
        <?php } ?>
    </div>
</body>
</html>
