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
function displayInvalidQuantity($conn, $productID)
{
    $sql = 'Select Name from products where Product_ID=?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $productID);
    $stmt->execute();

    $row = mysqli_stmt_get_result($stmt);
    $result = mysqli_fetch_assoc($row);
    echo 'out of stock ' . $result["Name"] . '';
}

function saveImg()
{


        $filename = $_FILES["Img"]["name"];

    
        $tempname = $_FILES["Img"]["tmp_name"]; 

    
            $folder = "../images/".$filename;   
     
    
 
    
      
    
   
    
            if (move_uploaded_file($tempname, $folder)) {
    
               return 'images/'.$filename;
    
            }else{
    
                return 0;
    
        }
    
    }
    
function insertProductToDB($conn,$name,$price,$stock,$description,$category,$img)
{
    $id=rand();
    $sql='INSERT INTO `store`.`products` (`Product_ID`, `Name`, `price`, `Picture`, `Stock`, `p_description`, `Category`) 
    VALUES (?,?,?,?,?,?,?);';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('isisisi',$id,$name,$price,$img,$stock,$description,$category);
    if($stmt->execute())
    {
        return $id;
    };
    



}

function ManagerLogIn($conn, $email , $password)
{
    echo $email;
    $stmt = $conn->prepare("SELECT * FROM store.storeadmin where email=?");
    $stmt->bind_param('s',$email);
    $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);

  
   if($result->num_rows==1)
   {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['adminpass'];
   echo 'output'.password_verify($password,$hashed_password);
    if(password_verify($password,$hashed_password))
    {
        session_start();
        $_SESSION['fname']=$row['fname'];
       
        $_SESSION['role']='admin';
        echo 'entered';
        
    

        
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
        $_SESSION['role']='customer';
        return;
    

    }
  

   
}
else{
    ManagerLogIn($conn,$email,$password);
}


}

function insertUser($conn, $fname, $lname, $email, $passw, $birthdate,$phone,  $district,$city)
{
    

    $hashed_password = password_hash($passw,PASSWORD_DEFAULT);


    $stmt = $conn->prepare("INSERT INTO `customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES (?, ? , ? , ?, ?, ?, ?, ?);"); 
    
     $stmt->bind_param("ssssssss",$fname, $lname, $email, $hashed_password, $birthdate,$phone,  $district, $city);
    $insert =  $stmt->execute();
    return $insert;

 
   

}


function updateProduct($conn,$id,$newname,$newstock,$newprice,$description)
{
    $sql="UPDATE `store`.`products` SET `Name` = ?, `price` = ?, `Stock` =?, `p_description` = ? WHERE (`Product_ID` = ?);";
    $stmt = $conn->prepare($sql);
    $stmt -> bind_param("ssisi",$newname,$newprice,$newstock,$description,$id);
    $update = $stmt->execute();
    return $update;




}

//to print product in home page
function retriveProducts($conn)
{
    
    $stmt = $conn->prepare("SELECT * FROM products");
    
     $stmt->execute();
    
     $result = mysqli_stmt_get_result($stmt);
     $icon='fa-solid fa-cart-shopping';
     if(isset($_SESSION['role'])&&$_SESSION['role']=='admin')
     {
        $icon = 'fa-solid fa-pen-to-square';


     }

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
               <h4>Price: '.$row['price'].'</h4>
               <Button  type="button" class="open"><i class="'.$icon.'"></i></Button>
             
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
           <Button  id="open" type="button" class="open"><i class="fa-solid fa-cart-plus"></i></Button>
               
           <input type="hidden" class="pr_id" id="producId" value="'.$row['Product_ID'].'">
           <input type="hidden" class="pr_name" name="productName" id="productName" value="'.$row['Name'].'">
           <input type="hidden"  class="pr_price" name="productPrice"  id="pprice" value="'.$row['price'].'">
           <input type="hidden"  class="pr_stock" name="stock" id="stock" value="'.$row['Stock'].'">
           <input type="hidden"  name="img" id="img" value="'.$row['Picture'].'">
   
       </div>
       </div>
   </div>';
     }
  

}

function removeProduct($conn,$productID)
{
    $sql = "DELETE FROM `store`.`products` WHERE (`Product_ID` = ?);";
    echo $productID;
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i",$productID);
    echo $stmt->execute();

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
function addItemsToCookieOrder($sessionCart,$orderKey)
{
    $index = 0;
    if(!empty($_COOKIE['orrders']))
  
    {
     
        $index = count(json_decode($_COOKIE['orrders'],true));
    
        //   var_dump(json_decode($_COOKIE['test'],true));
    
        $arr =  array($index=>$sessionCart);
        
        $ordersArray = json_decode($_COOKIE['orrders'],true);
        $newArray =array_merge($ordersArray,$arr);
   


        setcookie("orrders",json_encode($newArray),time()+1000000,"/");
        unset($_SESSION['shoppingcart']);
        header("location: ../Homepage.php");

    }
    else{

    $arr = 
    array(0=>$sessionCart);
    setcookie("orrders",json_encode($arr),time()+1000000,"/");

    }
           
    
       
       
        }
    
    

function printCookies()
{
   
   
   print_r($_COOKIE['test']);
   echo 'array:'.'<br>';
   print_r(json_decode($_COOKIE['test'],true));

}
function checkQuantity($sessionCart, $conn)
{
    foreach( $sessionCart as $item)
    {
        $productID = $item["p_id"];
        $productQuantity = $item["quantity"];
    

     
    $stmt = $conn->prepare("select * from products where Product_ID=?
    ");
    $stmt->bind_param("i",$productID);
     $stmt->execute();
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);
   

    if($row['Stock']< $productQuantity)
    { 
        return $productID;
      
    }
}
return 0;

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



function deleteAllCookies()
{
    echo 'delete'
;    $past = time() - 3600;
   
        setcookie( '$test','', time()-3600 );
    }
{
  
   
    
}


function cookiesOrdersData()
{
    if(empty($_COOKIE['orrders']))
    {
        return;
    }
    $arr = json_decode($_COOKIE['orrders'],true);
$counter = 0;


foreach($arr as $orders)

{
   echo' <div class="ordersContainer">
        
    
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
                    </thead><tbody>  ';
    foreach($orders as $items)
    {
          
       echo '     
       <tr>
       <td>
          '.$items['name'].'
          </td>
          <td>
         '.$items['quantity'].'
          </td>
          <td>
           '.$items['tPrice'].'
          </td>
           <tr>

';                


}


echo '   </tbody>
</table>
</div>
</div>
    ';
   
    
}
}
