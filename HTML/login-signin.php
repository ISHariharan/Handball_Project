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
        li{
            color: white;
        }

    </style>
</head>
<body>
    <div class="container-1">
        <div class="form-box">
            <h1 id="title">
                Sign In
            </h1>
            <form action="login-connect-signin.php" method= "POST">
                <div class="input-group">
                    

                    <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" placeholder="Email" name='email' required>
                    </div>

                    <div class="input-field">
                        <i class="fa-regular fa-lock"></i>
                        <input type="password" placeholder="Password" name='pwd' required>
                    </div>
                    <p>
                        Forgot Password <a href="forgot-password.html">Click Here!</a> <br>
                        <b>Click here</b> to Sign Up : <a href = "login-signup.html">Sign Up</a>
                    </p>
                </div>
                <div class="btn-field">
                    <input type="submit" id="signupBtn" name='sign-in' value="Sign In"> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>
