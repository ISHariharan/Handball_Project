<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["valueToStore-1"]) && isset($_POST["valueToStore-2"])) {

    $conn = mysqli_connect('localhost', 'root', '', 'projecthb');

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the value from the hidden input field
    $valueToStore_1 = $_POST["valueToStore-1"];
    $valueToStore_2 = $_POST["valueToStore-2"];
    // Insert the value into the database
    $sql = "INSERT INTO `check_db` (`data`, `data1`) VALUES ('$valueToStore_1', '$valueToStore_2')";
    $request = mysqli_query($conn, $sql);

    if ($request) {
        echo "Value stored successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
