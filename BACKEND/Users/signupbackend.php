<?php                                            
                                                                                   
  if($_SERVER["REQUEST_METHOD"]=='POST'){
  include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");   

  $firstname=trim($_POST['firstname']);

  $lastname=trim($_POST['lastname']);

  $email=trim($_POST['email']);

  $password=trim($_POST['password']);

  if(empty($firstname)){
     $firstnameErr="firstname cannot be empty" ;
  }

  if(empty($lastname)){
    $lastnameErr="lastname cannot be empty" ;
  }

  if(empty($email)){
    $emailErr= "email cannot be empty";
  }

  if(empty($password)){
     $passwordErr="password cannot be empty";
  }
 
  
  
                                                                           
  $sql="SELECT * FROM `teachers` WHERE email='$email'";

  
  $query=mysqli_query($dbcon,$sql);
   
 
    $row = mysqli_fetch_assoc($query);
    // checking whether user already exist in the database
    if($row['email']===$email ){
      echo "email has already been registered";
      exit();
    }else{
   

    $sql2="INSERT INTO `teachers`(`firstName`,`lastname`,`email`,`password`) VALUES('$firstname','$lastname','$email','$password')"; 
    $query2=mysqli_query($dbcon,$sql2);
   
    echo "your record has successfully been inserted";
       
  }
}
                                                                                                                                                             
                                                                                   
                                                                       
  mysqli_close($dbcon);                                                                                              
?>