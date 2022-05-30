<?php
    $conn = new PDO("mysql:host=localhost;dbname=contact_db","root","");
    $id = $_GET['id'];
    $conn -> query("DELETE FROM contact where id = '$id'");
    header('location: contact.php');
?>