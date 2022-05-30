<?php
    session_start();
   // header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap.min.css">
    <link rel="stylesheet" href="style\login.css">
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

    <div class="d-flex justify-content-center">
        <form method="POST" action="processing.php" onsubmit="return check_sign_up()" class="Container_ p-2 my-5">
            <p class="text-center fs-3">
                Sign up
            </p>
            <p class="my-1">
                Username
            </p>
            <input class="w-100 rounded" placeholder="Username" name="name" id="name" type="text">
            <p class="my-1">
                Password
            </p>
            <input class="w-100 rounded outline-none" placeholder="Password" name="password" id="password" type="password">
            <p class="my-1">
                Password verify
            </p>
            <input class="w-100 rounded outline-none" placeholder="Password verify" name="c_password" id="c_password" type="password">

            <button class="w-100 my-3 rounded" type="submit" name="signup">Sign up</button>
            <p class="text-danger text-center m-0" id="warning"></p>
            <p class="text-success text-center m-0">
                <?php
                    if(isset($_SESSION["message_succes"]))
                    {
                        if($_SESSION["message_succes"] != null)
                        {
                            echo $_SESSION["message_succes"];
                            $_SESSION["message_succes"] = null;
                        }
                    }
                ?>
            </p>
            <p>
                Already have an account? <a href="login.php">Login </a>here.
            </p>
        </form>
    </div>
    <script src="scripts\processing.js"></script>
</body>
</html>