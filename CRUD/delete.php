<?php
    include "connection.php";
    $id = $_GET['id'];

    $q = "delete from CRUD where id = $id";
    mysqli_query($con, $q);
   
    header("location: display.php");
?>