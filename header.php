<?php

session_start();
?>
<div CLASS="header">
        <div>
            <img src="LogoWOW.PNG">
        </div>
        <div>
            <nav>
                <ul class="navbar">
                    <li><a href="HomePage.php"> Home Page </a></li>
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
        echo '
        <li>
        <div class="dropdown">
            <button class="dropbtn">Account</button>
            <div class="dropdown-content">

                <a href="#"> <span class="material-symbols-outlined">
                       
                    </span> Profile </a>
                    <a href="includes/logout.inc.php"> <span class="material-symbols-outlined">
                        
                    </span>Orders </a>

                <a href="includes/logout.inc.php"> <span class="material-symbols-outlined">
                        
                    </span>Log Out </a>
                  


            </div>
        </div>
    </li>';
    echo ' <li><a href="ContactUs.php"> Contact Us </a></li>';
        echo '<li><a href="CheckOutpage.php"><i class="fa-solid fa-cart-shopping"></i></a></li>';
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
