<?php
session_start();
?>

<?php
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sign-in'])){
        $conn = mysqli_connect('localhost','root','','projecthb') or die("Error Occured: " .mysqli_connect_error());
        if(isset($_POST['email']) && isset($_POST['pwd'])){
            $email = $_POST['email'];
            $password = $_POST['pwd'];

            $sql = "select * from user_details where email='$email' and password = '$password'";
            $request = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($request);
            $row1 = mysqli_fetch_array($request);
            if($row == 1 && $row1['type'] == 'user'){
                $_SESSION['username'] = $row1['name'];
                ?>
                <script>window.location.href="../HTML/user.php";</script>
                <?php
            }
            else if($row == 1 && $row1['type'] == 'host'){
                $_SESSION['username'] = $row1['name'];
                ?>
                <script>window.location.href="../HOST/host.php";</script>
                <?php
            }
        }
    }
?>
