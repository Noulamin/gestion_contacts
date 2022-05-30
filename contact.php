<?php
    // header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
    session_start();

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
    <link rel="stylesheet" href="style\contact.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            <a href="profile.php" class="Login_text liens">
                Profile
            </a>
            <a href="logout.php" class="Login_text m-0">
                Logout
            </a>
        </div>
        
    </header>

    <main class=" w-75 m-auto">

        <p class="my-5 fs-2">
            Contacts
        </p>
        
        <p class="fs-4">
            Contacts list:
        </p>

        <div class="table table-responsive" id="table">
            <table class="table table-responsive" >
                <tbody>
                    <?php
                        $conn = new PDO("mysql:host=localhost;dbname=contact_db","root","");

                        $user_id = $_SESSION["user_id"];

                        $result = $conn -> query("SELECT * FROM contact WHERE `user_id` = $user_id;");
                        $data = $result ->fetchAll(PDO::FETCH_ASSOC);
                        
                        if(count($data) == 0)
                        {
                            echo "No contacts.";
                        }

                        foreach($data as $data_) : 
                    ?>

                    <tr class="">
                        <td><?php echo $data_['name_'] ?></td>
                        <td><?php echo $data_['email_'] ?></td>
                        <td><?php echo $data_['phone_'] ?></td>
                        <td><?php echo $data_['address_'] ?></td>
                        <td class='py-3'>

                            <a href='update_contact.php? id=<?php echo $data_['id']; ?>' class='btn  btn-sm'>
                                Edit
                            </a>

                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modelsupp">Delete</button> </td>
                        </td>
                    </tr>
                    <div class="modal fade" id="modelsupp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Delete contact</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        do you really want to delete this contact ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">no</button>
                                        <a href='delete_contact.php? id=<?php echo $data_['id']; ?>']; ?><button type="button" class="btn btn-success">yes</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        
        <p class="fs-4">
            Add contact:
        </p>

        <form method="POST" action="processing.php" onsubmit="return check_contact()">
            <div class="row">
                <div class="col">
                    <p class="m-0">Name</p>
                    <input id="name" name="name_" class="form-control my-1 w-100" type="text" class="form-control" placeholder="Enter name" aria-label="Enter name">
                </div>
                <div class="col">
                    <p class="m-0">Phone</p>
                    <input id="phone" name="phone_" class="form-control my-1 w-100" type="tel" class="form-control" placeholder="Enter phone" aria-label="Enter phone">
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input id="email" name="email_" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter email">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                <textarea id="address" name="address_" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter address"></textarea>
            </div>
            
            <button type="submit" name="contact" class="btn btn-primary">Save</button>
            <p class="text-danger text-center m-0" id="warning"></p>
        </form>
    </main>
</body>
<script src="scripts/processing.js" ></script>
</html>