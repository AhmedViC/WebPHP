<?php
require_once('dbConn.inc.php');
require_once('functions.inc.php');
session_start();

    if(isset($_SESSION['role'])&&$_SESSION['role']=='admin')
    {
        $productID=$_POST['producId'];
        $price=$_POST['productNewPrice'];
        $stock=$_POST['productNewStock'];
        $p_description=$_POST['p_description'];
        $pname = $_POST['NEWproductname'];
        if(updateProduct($conn,$productID,$pname,$stock,$price,$p_description)>0)
        {
          header("location: ../AdminPage.php?m=updatedSuccessfully");
        }
        else{
          header("location: ../AdminPage.php?m=updateFailed");
        }
        
    }
    else{
      header("location: ../homepage.php?error=notAllowed");
    }

   

?>