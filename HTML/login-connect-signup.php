<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sign-up'])){
        $conn = mysqli_connect('localhost','root','','projecthb') or die("Error Occured: " .mysqli_connect_error());
        if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pwd']) && isset($_POST['type'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['pwd'];
            $type = $_POST['type'];
            $sql = "INSERT INTO `user_details` (`name`,`email`,`password`,`type`)  VALUES ('$name','$email','$password','$type')";
            $query = mysqli_query($conn, $sql);
            if($query){
                ?>
                <script>window.location.href="login-signin.php";</script>
                <?php
            }
            else{
                echo "UnSuccessful";               
            }
        }
    }
?>