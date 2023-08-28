<?php

require_once'../../inc/conn.php';
if (isset($_POST['submit'])) {

    // Extract the form values
    $name = trim($_POST['name']);
    $insertQuery="insert into category (`name`) values('$name')";
    $insertRes=mysqli_query($conn,$insertQuery);
    header('Location:../view/addCategory.php');
}