<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styleCheckOut.css">
        <title>
            Complete your purchase
        </title>
    </head>
    <body>

        <header>
            <img src="LogoWOW.PNG">
            <ul class="menu-container">
                 <li class="menu-item"><a href="HomePage.html" >Home</li></a> 
                <li class="menu-item">Products</li>
                      
            </ul>
         
        </header>
        
        <div class="progress-checkout-container">
            <div class="progress-step-container">
                <div class="step-check"></div>
                <span class="step-title">Shipping</span>
            </div>
            <div class="progress-step-container">
                <div class="step-check"></div>
                <span class="step-title">Payment</span>
            </div>
            <div class="progress-step-container">
                <div class="step-check"></div>
                <span class="step-title">Review</span>
            </div>
        </div>

            <div class="form-container">
                <h2 class="form-title">Payment Details</h2>
                <form action="" class="check-form">
                    <div class="input-line">
                        <lable for="name">Name on card</lable>
                        <input type="text" name="name" id="name" placeholder="Your name and surname">
                    </div>
                    <div class="input-line">
                        <lable for="card">Card number</lable>
                        <input type="text" name="card" id="card" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="input-container">
                    <div class="input-line">
                        <lable for="date">Expiring Date</lable>
                        <input type="text" name="date" id="date" placeholder="09-21">
                    </div>
                    <div class="input-line">
                        <lable for="cvc">CVC</lable>
                        <input type="text" name="cvc" id="cvc" placeholder="***">
                    </div>
                    </div>
                    <input type="button" value="Complete purchase">
                </form>
            </div>

    </body>
</html>