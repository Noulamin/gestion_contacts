<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Update contact</title>
</head>

<style>
    body{

        background: grey;
        width: 100%;
        height: 100px;
    }
    .cont {
        width: 100%;
        transform: translateY(50px);
    }
    .contain {

    border-radius: 20px;
        height: 580px;
        width: ;
    }

    .href{
        font-size: 10px;
    }

    @media screen and (max-width: 576px) {
        
    }

</style>

</head>

<body>

    <?php

        $conn = new PDO("mysql:host=localhost;dbname=contact_db","root","");

        $id = $_GET['id'];

        $res = $conn -> query("SELECT * FROM contact where id = '$id'");

        $row = $res -> fetch(PDO::FETCH_ASSOC);

        if(isset($_POST['update'])){

            $Name = $_POST['Name'];
            $Email = $_POST['Email'];
            $phone = $_POST['phone'];
            $adress = $_POST['address'];

            $req = "UPDATE contact SET  name_ = '$Name', phone_ = '$phone', email_ ='$Email', address_ ='$adress' where id = '$id'";
            $conn  -> query($req);
            header('location: contact.php');
        }

    ?>

<main class="container-fluid mt-0 mt-auto ">
    <div class="pb-5 cont row-sm">
        <div class="container rounded w-25  p-3 bg-white col-8 col-md-6 col-lg-4  contain row-sm w-50 ">
            
        <form   method="POST"  class="formlair ps-3 pe-3 ">
            <h3 class=" fw-bold  chadow m-3  text-dark d-flex justify-content-center "> Enter contact's new infos to update it </h3>

            <div class="mb-3 row-sm ">
                <label class="form-label text-dark ">Name</label>
                <input type="text" class="form-control text-muted shadow-none" name="Name" value="<?php echo $row['name_']; ?>">
            </div>
            <div class="mb-3 row-sm ">
                <label class="form-label text-dark ">Email</label>
                <input type="email" class="form-control text-muted shadow-none " name="Email"  value="<?php echo $row['email_']; ?>">
            </div>
                <div class="mb-3 row-sm ">
                <label class="form-label text-dark">phone</label>
            <input type="tel" class="form-control text-muted shadow-none " name="phone"  value="<?php echo $row['phone_']; ?>">
            </div>
                <div class="mb-3 row-sm ">
                <label class="form-label text-dark ">address</label>
            <input type="text" class="form-control text-muted shadow-none " name="address" value="<?php echo $row['address_']; ?>">
            </div>
            
            <button class="btn btn-dark text-white w-100" name="update">update</button>
        
        </form>
</main>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous">
    </script>
</body>

</html>