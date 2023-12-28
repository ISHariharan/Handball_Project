<?php

$token = $_GET["token"];

$token_hash = hash("sha256", $token);

$mysqli = require __DIR__ . "/database.php";

$sql = "SELECT * FROM user
        WHERE reset_token_hash = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("s", $token_hash);

$stmt->execute();

$result = $stmt->get_result();

$user = $result->fetch_assoc();

if ($user === null) {
    die("token not found");
}

if (strtotime($user["reset_token_expires_at"]) <= time()) {
    die("token has expired");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap">
    <script src="https://kit.fontawesome.com/4a665312bb.js" crossorigin="anonymous"></script>
    <title>handballarena.com</title>
    <style>
        .intro-container {
            display: block;
        }

        .radio-btn {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .radio-element {
            display: flex;
            align-items: center;
        }

        .radio-element label {
            padding-left: 0.5rem;
            font-size: 18px;
        }

    </style>
</head>
<body>
    <div class="container-1">
        <div class="form-box">
            <h1 id="title">
                Create Password
            </h1>
            <form action="password-set.php" method= "POST">
                <div class="input-group">
                    <input type="hidden" name="token" value="<?= htmlspecialchars($token) ?>">
                    <div class="input-field" id="namefield">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" placeholder="New Password" name='password-1' required>
                    </div>

                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="text" placeholder="Current Password" name='password-2' required>
                    </div>
                </div>
                
                <div class="btn-field">
                    <input type="submit" id="signupBtn" name='create-password' value="Create Password"> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
