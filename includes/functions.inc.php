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
  //LogIn will return 1 if pass & username are correct
    // will return 2 if email correct but poassword is not correct
    //will return 3 if email and passowrd are not correct
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

        return 1;
    }
    else{
       return 2;
    
            
    }

   
}
else{
   return 3;

        
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
 
       <div>
           <div class="productCard">
               <img src="'.$row['Picture'].'">
             
               <h3><a href="productDetails.php?id='.$row['Product_ID'].'">'.$row['Name'].'</a></h3>
               <h4>'.$row['price'].'</h4>
               <Button  type="button" class="open">aa</Button>
             
               <input type="hidden" class="pr_id" id="producId" value="'.$row['Product_ID'].'">
               <input type="hidden" class="pr_name" name="productName" value="'.$row['Name'].'">
               <input type="hidden"  class="pr_price" name="productPrice" value="'.$row['price'].'">
              
              

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
           <Button><i class="fa-solid fa-cart-plus"></i></Button>
   
       </div>
       </div>
   </div>';
     }
  

}






?>