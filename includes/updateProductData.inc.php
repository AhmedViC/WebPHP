<?php
require_once('dbConn.inc.php');
require_once('functions.inc.php');
session_start();

    if(isset($_SESSION['role'])&&$_SESSION['role']=='admin')
    {
    
      if(isset($_POST['edit']))
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
    else if(isset($_POST['delete']))
    {
      echo isset($_POST['producId']);
      $productID=$_POST['producId'];
      echo "id".$productID;
      removeProduct($conn,$productID);
      header("location: ../AdminPage.php?m=deletedSuccessfully");
  

    }
  }
    else{
      header("location: ../homepage.php?error=notAllowed");
    }

   

?>