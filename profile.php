<?php
   // header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
    session_start();
    require("user_object.php");

    if(!isset($_SESSION["is_active"]))
    {
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\bootstrap.min.css">
    <link rel="stylesheet" href="style\profile.css">
    <title>Contact</title>
</head>
<body>
    <header class="d-flex justify-content-between align-items-center px-3 fs-4 text-white">
        <a href="" class="text-white m-0">
            Contacts list
        </a>

        <div>
            <a href="" class="Login_text liens">
                <?php
                    if(isset($_SESSION['user_name']))
                    {
                        echo $_SESSION['user_name'];
                    }
                ?>
            </a>
            <a href="contact.php" class="Login_text liens">
                Contact
            </a>
            <a href="logout.php" class="Login_text m-0">
                Logout
            </a>
        </div>
    </header>

    <div class="mx-5">
        <p class="my-5 fs-2">
            <?php
                if(isset($_SESSION['user_name']))
                {
                    echo 'Welcome, ' . $_SESSION['user_name'];
                }
            ?>
        </p>
        
        <p class="fs-4">
            Your profile :
        </p>
        
        <ul class="p-0">
            <li>
                User name: 
                <p class="p_list">
                    <?php
                        if(isset($_SESSION['user_name']))
                        {
                            echo $_SESSION['user_name'];
                        }
                    ?>
                </p>
            </li>
            <li>
                Signup date: 
                <p class="p_list">
                    <?php
                        if(isset($_SESSION['sign_up_date']))
                        {
                            echo $_SESSION['sign_up_date'];
                        }
                    ?>
                </p>
            </li>
            <li>
                Last login: 
                <p class="p_list">
                    <?php
                        if(isset($_SESSION['last_signed']))
                        {
                            echo $_SESSION['last_signed'];
                        }
                    ?>
                </p>
            </li>
        </ul> 
    </div>
</body>
</html>