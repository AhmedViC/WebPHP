
<!DOCTYPE html>
<html lang="en">
    <title> WOW Store </title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/42f7232704.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styleLogin.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap" rel="stylesheet">

    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>

<div CLASS="header">
    <div>
    <img src="LogoWOW.PNG">
    </div>
    <div>
   <nav>
    <ul class="navbar">
        <li><a href="HomePage.php" > Home Page </a></li>
      <li>    <div class="dropdown">
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
      </div></li>
        <li><a href=" " > About </a></li>
        <li><a href="ContactUs.php" > Contact </a></li>
        <li><a href="LoginPage.php" > Login/Register </a></li>
        <li><a href="CheckOut.php"><i class="fa-solid fa-cart-shopping"></i></a></li>


        

    </ul>
   </nav>
</div>
</div>

<?php
    if(isset($_GET['error']))
    {
        if($_GET['error']=='none')
        {
            echo '<div><h1>Signed Up Seccsufly!<h1></div>';
        }
        if($_GET['error']=='usedEmail')
        {
            echo '<div><h1>This email is already used!<h1></div>';
        }

    }

?>
<div class="login">


    
    <div class="data">
      
       
    <form method="post" action="includes/signUp.inc.php">
        <div>
            <h1>Sign Up</h1>
        </div>
        <div class="field">
        
            <input type="text" id="fname" name="fname" required>
            <label>First Name</label>
        </div>
        <div class="field">
        
            <input type="text" id="lname" name="lname" required>
            <label>Last Name</label>
        </div>
       <div class="field">
        
        <input type="email" id="email" name="email" placeholder="Email" required>
       
    </div>
        <div class="field">
            <input type="password" id="pass" name="pass" required>
            <label for="pass">Password</label>
            
           

        </div>
        <div class="field">
            <label>Birth Date</label>
            <input type="date" name="date" required style="text-align: center;">
           
            
           

        </div>
        <div class="field">
            <label>Phone Number</label>
            <input type="tel" id="phone" name="phone" required">
           
            
           

        </div>
        <div class="cityInput">
            <label for="city">Choose a City:</label>

            <select name="city" id="city">
                <option selected disabled>Choose one</option>
              <option value="788">Dammam</option>
              <option value="766">Khobar</option>
              <option value="755">Qatif</option>
            </select>

        </div>
        <div class="field">
            <label>District</label>
            <input type="text" id="district" name="district"  required">
           
            
           

        </div>
        <div class="loginbutton">
            <button type="submit" name="submit">Login</button>
        </div>

       
      

       
        
    </form>
    
</div>
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
            <h4>  online Shop </h4>
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