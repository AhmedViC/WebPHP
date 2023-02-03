<?php
require_once('functions.inc.php');
require_once('dbConn.inc.php');
session_start();

    if($_SESSION['role']=='admin'&&isset($_POST['add']))
    {
       
        $name = $_POST['name'];
        $img = saveImg();
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $category= $_POST['category'];
        $id = insertProductToDB($conn,$name,$price,$stock,$description,$category,$img);
        if($id>0)
        {
            echo "done";
            header("location:../productDetails.php?id=$id");
        }



    }


?>