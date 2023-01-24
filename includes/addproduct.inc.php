<?php
require_once('functions.inc.php');
require_once('dbConn.inc.php');
session_start();
    if($_SESSION['role']=='admin'&&isset($_POST['add']))
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $img = saveImg();
        $description = $_POST['description'];
        $stock = $_POST['stock'];
        $price = $_POST['price'];
        $category= $_POST['category'];
        $result = insertProductToDB($conn,$id,$name,$price,$stock,$description,$category,$img);
        if($result>0)
        {
            echo "done";
            header("location:../productDetails.php?id=$id");
        }



    }


?>