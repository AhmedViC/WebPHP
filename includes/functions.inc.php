<?php


function checkEmail($conn,$email)
{

    $stmt = $conn->prepare("SELECT * FROM customer where email = ?");
    $stmt->bind_param("s",$email);
     $stmt->execute();
     $stmt->store_result();
     $stmt->fetch();
     $rows = $stmt->num_rows;
     if($rows==0)
     {
        return true;

     }
     else{
        return false;
     }
  



}

function ManagerLogIn($conn, $email , $password)
{
    $stmt = $conn->prepare("SELECT * FROM store.storeadmin where id=?");
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);
   if($result->num_rows==1)
   {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['adminpass'];
    if(password_verify($password,$hashed_password))
    {
        session_start();
        $_SESSION['fname']=$row['fname'];
        $_SESSION['admin']=true;
        
    

        return 3;
    }
}
}
  //LogIn will return 1 if pass & username are correct
    // will return 2 if email correct but poassword is not correct
    //will return 3 then he is a manager
    //will return 4 if email &pass are not correct
function logIn($conn, $email , $password)
{
   
 
    $stmt = $conn->prepare("SELECT * from customer where email = ?");
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);
   if($result->num_rows==1)
   {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['u_pass'];
    if(password_verify($password,$hashed_password))
    {
        session_start();
        $_SESSION['fname']=$row['Fname'];
        $_SESSION['userID']=$row['C_id'];
    

        return 1;
    }
    else{
       return 2;
    
            
    }

   
}
else {
    ManagerLogIn($conn, $email , $password);
   

}



//if all conditions failed
   return 4;

        


 


}

function insertUser($conn, $fname, $lname, $email, $passw, $birthdate,$phone,  $district,$city)
{
    

    $hashed_password = password_hash($passw,PASSWORD_DEFAULT);


    $stmt = $conn->prepare("INSERT INTO `customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES (?, ? , ? , ?, ?, ?, ?, ?);"); 
    
     $stmt->bind_param("ssssssss",$fname, $lname, $email, $hashed_password, $birthdate,$phone,  $district, $city);
    $insert =  $stmt->execute();
    return $insert;

 
   

}

//to print product in home page
function retriveProducts($conn)
{
    
    $stmt = $conn->prepare("SELECT * FROM products");
    
     $stmt->execute();
    
     $result = mysqli_stmt_get_result($stmt);

     while($row = mysqli_fetch_assoc($result))
     {
        $price=$row['price'];
        $pname=$row['Name'];
        $pid = $row['Product_ID'];
     
       echo ' <form><div class="productsContainer">
 
       <div >
           <div class="productCard">
               <img src="'.$row['Picture'].'">
             
               <h3><a href="productDetails.php?id='.$row['Product_ID'].'">'.$row['Name'].'</a></h3>
               <h4>'.$row['price'].'</h4>
               <Button  type="button" class="open"><i class="fa-solid fa-cart-shopping"></i></Button>
             
               <input type="hidden" class="pr_id" id="producId" value="'.$row['Product_ID'].'">
               <input type="hidden" class="pr_name" name="productName" value="'.$row['Name'].'">
               <input type="hidden"  class="pr_price" name="productPrice" value="'.$row['price'].'">
               <input type="hidden"  class="pr_stock" name="stock" value="'.$row['Stock'].'">
              
              

           </div>
         
       </div>
       
       </div>
       </form>

';
     }
  

}

function productDetailsQuery($conn,$id)
{
    
    $stmt = $conn->prepare("SELECT * from products, category where Product_ID=? and products.category=Category_ID;");
    $stmt->bind_param("s",$id);
    
     $stmt->execute();
    
     $result = mysqli_stmt_get_result($stmt);

     while($row = mysqli_fetch_assoc($result))
     {
       echo '<div class="product">
       <img class="productImg" src="'.$row['Picture'].'">
       <div class="ProductDetails">
           <h2>'.$row['Name'].'</h2>
           <div class="data">
           <label><span>Brand:</span> '.$row['Brand'].'</label>
           <label><span>Category:</span>'.$row['Category_Name'].'</label>
           <label><span>Stock:</span>'.$row['Stock'].'</label>
           <label><span>Price:</span>'.$row['price'].'</label>
           <label class="p_description"><span>Details:</span>'.$row['p_description'].'</label>
           <Button><i class="fa-solid fa-cart-plus"></i></Button>
   
       </div>
       </div>
   </div>';
     }
  

}


function insertOrder($conn,$customerID)
{
    $str=rand();
    $orderKey = md5($str);
    $stmt = $conn->prepare("INSERT INTO `Orders` (`OrderKey`,`CustomerID`) VALUES (?, ?);");
    $stmt->bind_param("si",$orderKey,$customerID);
    if($stmt->execute()>0)
    {
        return $orderKey;

    }
    else{
        return 0;
    }
  
  

}


function insertAnOrderItem($conn, $orderKey, $productID, $quantity)
{
    echo 'here';
    $stmt = $conn->prepare("INSERT INTO `OrdersDATA` (`D_OrderKey`,`ProductID`,`Quantity`) VALUES (?, ?,?);");
    $stmt->bind_param("sii",$orderKey,$productID,$quantity);
    
   $stmt->execute();
  
    

    



}

function insertAllItems($sessionCart,$conn,$orderKey)
{

    foreach( $sessionCart as $item)
    {
        $productID = $item["p_id"];
        $productQuantity = $item["quantity"];
        
     insertAnOrderItem($conn,$orderKey,$productID,$productQuantity);
    
    } 

}
function insertPaymentDetails($conn, $orderKey, $nameOnCard,$creditNumber,$expMonth,$cvv,$expYear)
{
    echo 'hhi';
    $stmt = $conn->prepare("INSERT INTO `paymentinfo` (`Nameoncard`, `CreditCardNum`, `ExpMonth`, `CVV`, `ExpYear`, `D_OrderKey`) VALUES (?,?,?,?,?,?);
    ");
    $stmt->bind_param("ssisis",$nameOnCard,$creditNumber,$expMonth,$cvv,$expMonth,$orderKey);
    echo $stmt->execute();


}
function insertBillingDetails($conn , $orderKey, $fullName,$email,$address,$city,$zip)
{
    $stmt = $conn->prepare("INSERT INTO `billingaddress` (`B_OrderKey`, `FullName`, `Eamil`, `b_Address`, `City`, `ZIP`) VALUES (?,?,?,?,?,?);");


    $stmt->bind_param("ssssss",$orderKey,$fullName,$email,$address,$city,$zip);
    if($stmt->execute())
    {
        return true;
    }
    else
    {
        return false;
    };



}
function insertBill($conn,$orderKey,$purchasedate,$totalPrice,$email,$customerID)
{
    
    $stmt = $conn->prepare(" INSERT INTO `bill` ( `Total_price`,
     `date_purchase`, `CustomerEmail`, `CustomerID`, `D_OrderKey`) 
     VALUES (?,?,?,?,?);");
     $stmt->bind_param("sssss",$totalPrice,$purchasedate,$email,$customerID,$orderKey);
     if($stmt->execute())
     {
         return true;
     }
     else
     {
         return false;
     };


}
/*
@param order key

*/

function saveorderInCookie($orderKey)
{
    setcookie($orderKey,$orderKey,time()+10000000,"/");
   


}


function deleteAllCookies()
{
    foreach ( $_COOKIE as $key => $value )
{
  
   
    
}

}
/*

@return copy orders saved in cookies to an array and return it
*/
function getPreviousOrders()
{
   
    $counter=0;
    for(reset($_COOKIE);$element = key($_COOKIE);next($_COOKIE))
    {
        
        $previousOrders[$counter]=$_COOKIE[$element];
        $counter++;
    
    }
   
    return  $previousOrders;
}

function retriveOrderData($orderID,$conn)
{
   
    $stmt = $conn->prepare("SELECT * from OrdersDATA,Products where D_OrderKey=?  and productID=product_ID;");
    $stmt->bind_param("s",$orderID);
    
     $stmt->execute();
    
     $result = mysqli_stmt_get_result($stmt);

     while($row = mysqli_fetch_assoc($result))
     {
        
         
       echo '     
       <div class="containerHeader"><H2>Order</H2></div>
        <div class="containerBody">
           
                <table border="1">
                    <thead>
                       <td>
                        Name
                       </td>
                       <td>
                       Quantity
                       </td>
                       <td>
                        Price
                       </td>
                    </thead><tbody>
       <td>
          '.$row['Name'].'
          </td>
          <td>
         '.$row['Quantity'].'
          </td>
          <td>
          2000
          </td>

   </tbody>
</table>


</div>
</div>'

                          ;
                        


}

}

function displayOrders($customerID,$conn)
{
    $cookieArray = getPreviousOrders();
   
     for($i=1 ; $i<count($cookieArray);$i++)
    {
        echo ' <div class="ordersContainer">
        ';

       retriveOrderData($cookieArray[$i],$conn);
    }
    echo ' </div>
        ';

  
}



?>