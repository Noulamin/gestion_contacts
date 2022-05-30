<?php
    session_start();

    if(isset($_SESSION["is_active"]))
    {
        header("location: profile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap.min.css">
    <link rel="stylesheet" href="style\index.css">
    <title>Contact</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-3 fs-4 text-white">
        <a href="" class="text-white m-0">
            Contacts list
        </a>
        <a href="login.php" class="Login_text m-0">
            Login
        </a>
    </header>

    <div class="b_fixed">
        <div class="container_ rounded d-flex justify-content-start align-items-center">
            <div>
                <p class="hello_text mx-5 my-0">
                    Hello!
                </p>
                <br>
                <p class="fs-4 mx-5 my-0">
                   <a href="signup.php">Sign up </a> to start creating your contacts list.
                </p>
                <br>
                <p class="fs-4 mx-5 my-0">
                    Already have an account <a href="login.php">Login here</a>.
                </p>
            </div>
        </div>  
    </div>
</body>
</html>