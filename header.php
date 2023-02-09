<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
require_once('includes/shoppingcart.fun.inc.php');
?>
<div CLASS="header">
        <div>
            <img title="logo" src="LogoWOW.PNG">
        </div>
        <div>
            <?php
            


?>
        </h2></div>
        <div>
            <nav>
                <ul class="navbar">
                    <li><a href="      <?php
               if(isset($_SESSION['role'])&&$_SESSION['role']=='admin'){

                echo 'adminpage.php';
               }
               else{
                echo 'homepage.php';
               }


?>"> Home Page </a></li>
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
                    
                  
                    <?php 
                 

    if(isset($_SESSION['fname']))
    {
        echo'
        <li>
        <div class="dropdown">
            <button class="dropbtn">'.$_SESSION['fname'].'</button>
        
            <div class="dropdown-content">

              ';
              if($_SESSION['role']!='admin')
              {
              echo '
                    <a title="display orders" href="orderspage.php">
                    
                        
                   Orders </a>';
              }
              else{
                echo '
                <a title="add products" href="addProductPage.php">
                
                    
               add product </a>';


              }
              echo'

                <a title="log out" href="includes/logout.inc.php"> Log Out </a>
                  


            </div>
        </div>
    </li>';
    if($_SESSION['role']=='customer')
    {
    echo ' <li><a href="ContactUs.php"> Contact Us </a></li>';
        echo '<li><a href="CheckOutpage.php"><i class="fa-solid fa-cart-shopping"></i></a>';
        if(isset($_SESSION['shoppingcart'])){
            echo '<li><a href="">'.printTotalItems().'</a></li>';

        }
    

    }
}
    else{
        echo '<li><a href="loginpage.php"> Login/Register </a></li>';
        echo ' <li><a href="ContactUs.php"> Contact Us </a></li>';

    }

?>
 
                
                 




                </ul>
            </nav>
        </div>
    </div>
