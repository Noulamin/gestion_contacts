<?php
    session_start();

    require("user_object.php");
    //header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');    

    function Sign_in()
    {
        $username_ = $_POST["name_"];
        $password_ = $_POST["password_"];

        $con = new Object_();
        $connect = $con->connect("contact_db");
        var_dump($connect);

        try {
            $data = $connect -> query("SELECT * FROM users;");

            $user_found = "";

            while($row = $data->fetch(PDO::FETCH_ASSOC)) {
                
                if($row["username_"] == $username_)
                {
                    if($row["password_"] == $password_)
                    {
                        $data = new Object_();
                        $data -> user_name = $username_;
                        $data -> password = $password_;
                        $data -> is_active = true;
                        
                        $_SESSION["user_id"] = $row["id"];
                        
                        $_SESSION["user_name"] = $row["username_"];
                        $_SESSION["sign_up_date"] = $row["sign_up_date"];
                        //date_default_timezone_set('');
                        $_SESSION["last_signed"] = date("Y-m-d h:i:sa");

                        $_SESSION["is_active"] = true;
                        $user_found = $row["username_"];
                        break;
                    }
                }
            }
                if($user_found != "")
                {
                    header("Location: profile.php");
                }
                else
                {
                    $_SESSION["message_error"] = "wrong identity.";
                    header("Location: login.php");
                }
        }
        catch (Exception $error)
        {
            $_SESSION["message_error"] = "sign in : $error.";
            header("Location: login.php");
        }
    }

    function Sign_up()
    {
        $con = new Object_();
        $connect = $con->connect("contact_db");
        $username_ = $_POST["name"];
        $password_ = $_POST["password"];
        
        $connect -> query("INSERT INTO `users`(`username_`, `password_`)
            VALUES ('$username_','$password_');
        ");

        $_SESSION["message_succes"] = "account successfuly created.";
        header("Location: signup.php");
    }

    function add_contact()
    {
        $con = new Object_();
        $connect = $con->connect("contact_db");

        $name_ = $_POST["name_"];
        $phone_ = $_POST["phone_"];
        $email_ = $_POST["email_"];
        $address_ = $_POST["address_"];
        $user_id = $_SESSION["user_id"];

        $connect -> query("INSERT INTO `contact`(`name_`, `phone_`, `email_`, `address_`,`user_id`)
            VALUES ('$name_','$phone_','$email_','$address_','$user_id');
        ");
        header("Location: contact.php");
    }

    if(array_key_exists("contact", $_POST))
    {
        add_contact();
    }

    if(array_key_exists("signup", $_POST))
    {
        Sign_up();
    }

    if(array_key_exists("signin", $_POST))
    {
        Sign_in();
    }
?>