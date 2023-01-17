<!DOCTYPE html>
<html lang="en">
<head>
    <title> Contact Us</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/42f7232704.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="ContactUs.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="WOW1.png" sizes="32x32" type="image/png">
    <link rel="stylesheet" href="styleProduct.css">

    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Exo:wght@300&family=Roboto:ital,wght@0,300;1,300;1,400&family=Source+Code+Pro&display=swap" rel="stylesheet">


</head>
<!------------------Header------------->
<?php
include_once('header.php');

?>

<!------------------ContactUsPage------------->

<section id="ContactUs-Section">
<div class="container">
    <h2>Contact Us</h2>
    <p> Please fill the form below to contact you </p>
    <div class="Contact-form">
   



    <!------------FIRST GRID------------------->
    <div id="iz">
        <i class="fa fa-map-marker"></i> <span class="Form-info">Iau Dammam</span> 
        <i class="fa fa-phone"></i> <span class="Form-info">+9660123456789</span> 
        <i class="fa fa-envelope"></i> <span class="Form-info">wowstoreww@gmail.com</span>
    </div>
    
<!------------FIRST GRID------------------->
<div id="TextForm">
<form action="includes/feedbackemail.inc.php" method="post">
<input name='fname' type="text" placeholder="First Name" required>
<input name='lname' type="text" placeholder="Last Name" required>
<input name = 'email' type="text" placeholder="Email" required>
<input name='subject' type="text" placeholder="Subject of the message"required>
<textarea name="message" placeholder="Write your Messaage..." rows="5" required></textarea>
<button type="submit" name="submit"> Send Message</button>
</form>


</div>
</div>
</div>
</section>



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




</html>