<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $conn = mysqli_connect('localhost', 'root', '', 'projecthb');

    $countervalue = $_POST['counter-value'];
    $sql = "INSERT INTO `check_db` (`data`) VALUES ('$countervalue')";
    $request = mysqli_query($conn, $sql);

    if ($request) {
        echo "Successful";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
$conn->close();
?>