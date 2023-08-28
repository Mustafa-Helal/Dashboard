<?php
require_once'../../inc/conn.php';
if (isset($_POST['submit'])) {

    // Extract the form values
    $catID=trim($_POST['cat']);
    $title = trim($_POST['title']);
    $quantity = (int)$_POST['quantity'];
    $price = (float)$_POST['price'];
    $cat = trim($_POST['cat']);
    $desc = trim($_POST['desc']);
    $newFileName =trim(uniqid().'.'.pathinfo($_FILES['img']['name'],PATHINFO_EXTENSION));
    // Define the upload directory and create it if it doesn't exist
    $uploadDir = '../../img/products/';
    // Upload the image to the server
    move_uploaded_file($_FILES['img']['tmp_name'],$uploadDir.$newFileName);
          
        $insertQuery="insert into item (`name`,`price`,`quantity`,`desc`,`imgPath`,`catID`)
        values ('$title','$price','$quantity','$desc','$newFileName','$catID')";
        $insertRes=mysqli_query($conn,$insertQuery);
          
        // Redirect the user to the add product page
        header('Location:../view/addProduct.php');
        
      }
    
  
  ?>