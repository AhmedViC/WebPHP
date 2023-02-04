<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
?>
<div CLASS="header">
        <div>
            <img src="LogoWOW.PNG">
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
                    <a href="orderspage.php">
                    
                        
                   Orders </a>';
              }
              else{
                echo '
                <a href="addProductPage.php">
                
                    
               add product </a>';


              }
              echo'

                <a href="includes/logout.inc.php"> Log Out </a>
                  


            </div>
        </div>
    </li>';
    if($_SESSION['role']=='customer')
    {
    echo ' <li><a href="ContactUs.php"> Contact Us </a></li>';
        echo '<li><a href="CheckOutpage.php"><i class="fa-solid fa-cart-shopping"></i></a>';
        if(isset($_SESSION['shoppingcart'])){
            echo '<li>'.count($_SESSION['shoppingcart']).'</li></a>';

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
