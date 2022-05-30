<?php
    session_start();
   // header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');

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
    <link rel="stylesheet" href="style\login.css">
    <title>Contact</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-3 fs-4 text-white">
        <a href="" class="text-white m-0">
            Contacts list
        </a>
        <a href="" class="Login_text m-0">
            Login
        </a>
    </header>

    <div class="d-flex justify-content-center">
        <form method="POST" action="processing.php" onsubmit="return check_sign_in()" class="Container_ p-2 my-5">
            <p class="text-center fs-3">
                Authenticate
            </p>
            <p class="my-1">
                Username
            </p>
            <input class="w-100 rounded" placeholder="Username" type="text" id="name" name="name_">
            <p class="my-1">
                Password
            </p>
            <input class="w-100 rounded outline-none" placeholder="Password" type="password" id="password" name="password_">
            <button class="w-100 mt-3 rounded" type="submit" name="signin">Login</button>
            
            <p class="text-danger text-center m-0" id="warning">
                <?php
                    if(isset($_SESSION["message_error"]))
                    {
                        if($_SESSION["message_error"] != null)
                        {
                            echo $_SESSION["message_error"];
                            $_SESSION["message_error"] = null;
                        }
                    }
                ?>
            </p>
            <p>
                No account? <a href="signup.php">Sign up </a>here.
            </p>
        </form>
    </div>
    <script src="scripts\processing.js"></script>
</body>
</html>