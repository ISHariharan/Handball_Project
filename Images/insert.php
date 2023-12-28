<?php
$conn = mysqli_connect('localhost', 'root', '', 'projecthb');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the data from the AJAX request
    $dataToInsert = $_POST['data'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO `check_db` (`data`) VALUES (?)");
    $stmt->bind_param("s", $dataToInsert);

    if ($stmt->execute()) {
        echo "Successful";
    } else {
        echo "Unsuccessful";
    }

    $stmt->close();
    $conn->close();
}
?>
