<?php
    require_once('dbConn.inc.php');
    require_once('functions.inc.php');
    require_once('shoppingcart.fun.inc.php');
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    session_start();
   
    if(isset($_SESSION['fname'])&&isset($_POST['submit'])&&!empty($_SESSION['shoppingcart']))
    {
        $nameOncard=$_POST['cardname'];
        $cardnum=$_POST['cardnumber'];
        $expMonth=$_POST['expmonth'];
        $expYear=$_POST['expyear'];
        $cvv = $_POST['cvv'];
        $fullname = $_POST['firstname'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $purchaseDate = date('Y-m-d');
        $totalPrice=getTotalPrice();
        $customerID=$_SESSION['userID'];
        $zip = $_POST['zip'];
        
        
        echo $customerID.'<br>';

        $OrderKey = insertOrder($conn,$customerID);
   
 
        insertAllItems($_SESSION['shoppingcart'],$conn,$OrderKey);
        insertPaymentDetails($conn,$OrderKey,$nameOncard,$cardnum,$expMonth,$cvv,$expYear);
        insertBillingDetails($conn,$OrderKey,$fullname,$email,$address,$city,$zip);
        insertBill($conn,$OrderKey,$purchaseDate,$totalPrice,$email,$customerID);
        echo 'done!!';
        saveorderInCookie($OrderKey);
        unset($_SESSION['shoppingcart']);

        // header("location: ../orderThankYou.php");



        
      
    }

    else{
        echo $_COOKIE[2];
   displayOrders($_SESSION['userID'],$conn);

        
    }


?>