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
function insertUser($conn, $fname, $lname, $email, $password, $birthdate,$phone,  $district,$city)
{
    


    $stmt = $conn->prepare("INSERT INTO `customer` (`Fname`, `Lname`, `email`, `u_pass`, `birthdate`, `phoneNumber`, `district`, `City_id`) VALUES (?, ? , ? , ?, ?, ?, ?, ?);"); 
    
     $stmt->bind_param("ssssssss",$fname, $lname, $email, $password, $birthdate,$phone,  $district, $city);
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
       echo '  <div class="productsContainer">
       <div>
           <div class="productCard">
               <img src="'.$row['Picture'].'">
               <h3><a href="">'.$row['Name'].'</a></h3>
               <h4>'.$row['price'].'</h4>
               <Button><i class="fa-solid fa-cart-plus"></i></Button>
           </div>
       </div>


   </div>';
     }
  

}



?>