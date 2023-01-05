<!DOCTYPE html>
<html lang="en">
<title> WOW Store </title>
<?php
require_once('includes/dbConn.inc.php');
require_once('includes/functions.inc.php');
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link
        href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
        rel="stylesheet">
</head>

<body>

    <div CLASS="header">
        <div>
            <img src="LogoWOW.PNG">
        </div>
        <div>
            <nav>
                <ul class="navbar">
                    <li><a href="#"> Home Page </a></li>
                    <li>
                        <div class="dropdown">
                            <button class="dropbtn">Products</button>
                            <div class="dropdown-content">

                                <a href="#"> <span class="material-symbols-outlined">
                                        smartphone
                                    </span>Smart Phones </a>

                                <a href="#"> <span class="material-symbols-outlined">
                                        laptop_windows
                                    </span>Laptops </a>
                                <a href="#"><span class="material-symbols-outlined">
                                        devices_fold</span>Accessories</a>
                                <a> <span class="material-symbols-outlined">
                                        desktop_windows
                                    </span> Desktops</a>

                            </div>
                        </div>
                    </li>
                    
                    <li><a href="ContactUs.php"> Contact Us </a></li>
                    <li><a href="LoginPage.php"> Login/Register </a></li>
                    <li><a href="CheckOut.php"><i class="fa-solid fa-cart-shopping"></i></a></li>




                </ul>
            </nav>
        </div>
    </div>





    <!--------------------ADV-------------------->
    <div class="rows">
        <div class="col-2">
            <h1>Check Out The Major Disscounts<br> On Our Smartphones !!</h1>
            <p>Apple and Samsung has just realesed the best phones of year,<br> don't miss the opportunity to buy one
                right now !
            </p>
            <a href="" class="btn">Check out Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="SamsungApple.png" width="300px">
        </div>
    </div>


    <!--products GRID
    each item ends with 3 divs-->
    <div class="flexGrid">
        <div class="productsGridContainer">
         <?php
    retriveProducts($conn);
         ?>
        </div>
    </div>
    <!------------------Footer------------->
    <div class="footer">
        <div class="contaner">
            <div class="row">

                <div class="footer-col">
                    <h4> Company </h4>
                    <ul>

                        <li> <a href="# ">About us</a></li>
                        <li> <a href="# ">Our service</a></li>
                        <li> <a href="# ">Privacy policy</a></li>
                        <li> <a href="# ">Affilate program</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4> Get help </h4>
                    <ul>

                        <li> <a href="# ">FAQ</a></li>
                        <li> <a href="# ">Shipping</a></li>
                        <li> <a href="# ">Returns</a></li>
                        <li> <a href="# ">Order Status</a></li>
                        <li> <a href="# ">Payment option</a></li>
                    </ul>
                </div>


                <div class="footer-col">
                    <h4> online Shop </h4>
                    <ul>

                        <li> <a href="# ">Watch</a></li>
                        <li> <a href="# ">bag</a></li>
                        <li> <a href="# "></a></li>
                        <li> <a href="# "></a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4> Follow us</h4>
                    <div class="social-links">
                        <a href="# "><i class="fab fa-facebook-f"></i></a>
                        <a href="# "><i class="fab fa-twitter"></i></a>
                        <a href="# "><i class="fab fa-instagram"></i></a>

                    </div>
                </div>

            </div>
        </div>
    </div>






</body>