
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <script src="https://kit.fontawesome.com/42f7232704.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="styleProduct.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styleoforderpage.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
        <script src="Javascript/quantitypopUp.js" defer></script>
        <script src="Javascript/purchaseMsg.js" defer></script>

</head>
<body>
<?php
require_once('header.php');
?>
<div class="titleHeading">
<h1>Previous Orders</h1>
</div>
<div class="ordersContainerContainer">
    <?php
    require_once('includes/functions.inc.php');
    require_once('includes/dbConn.inc.php');
    
    displayOrders($_SESSION['userID'],$conn);
?>

    </div>

    <?php
require_once('footer.php');
?>


</body>

</html>