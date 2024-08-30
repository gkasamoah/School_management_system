<?php                                            
 
 session_start();
 

   if (isset($_POST['email']) && isset($_POST['password'])) {
       include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");


       function validate($data){
   
          $data = trim($data);
   
          $data = stripslashes($data);
   
          $data = htmlspecialchars($data);
   
          return $data;
   
       }
   
       $email = validate($_POST['email']);
   
       $pass = validate($_POST['password']);
   
       if (empty($email)) {
   
           echo "email cannot be empty";
   
           exit();
   
       }else if(empty($pass)){
   
         //  header("Location: index.php?error=Password is required");
         echo "password cannot be empty";
           exit();
   
       }else{
   
           $sql = "SELECT * FROM teachers WHERE email='$email' AND password='$pass' AND user_level=1 ";
   
           $result = mysqli_query($dbcon, $sql);
   
           if (mysqli_num_rows($result) == 1) {
   
               $row = mysqli_fetch_assoc($result);
   
               if ($row['email'] === $email && $row['password'] === $pass) {
   
                  $_SESSION['user_level']=$row["user_level"];
                  $_SESSION['email']=$row["email"];
   
                   header("Location: http://localhost/school/FRONTEND/admin/admin.php");
   
                   exit();
   
               }else{
   
                   echo("Incorect User name or password");
   
                   exit();
   
               
   
           }


   
       }
   
   }
}
                                                                                                                                   
                                                                                   
                                                                       
                                                                                                
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <style>
        body{
            background-color: whitesmoke;
            background-image: url("http://localhost/school/images/book-laptop-pencil-clock-wooden-table-library-education-learning-concept.jpg");
            background-size: contain;
        }
  
    #form-container{
        margin-left: 25%;
        box-shadow: 1px 1px gray;
        width: 50vw;
        background-color: white;
        height: 80vh;
        margin-top: 10%;
        border-radius: 15px;
    }


#form-container form button{
    background-color: rgb(13, 66, 240);
    width: 28em;
    height: 4.5em;
    border-radius: 12px;
    margin-top: 5%;
    color: white;
    margin-left: 30%;
    
}

input{
    height: 5vh;
    width: 23vw;
    border-radius: 6px;
    border: 1px solid black;
    padding: 8px;
    margin-top: 8px;
    margin-left: 30%;
}
.err{
    color: red;
}
h3{
    text-align: center;
}
label{
    margin-left: 30%;
}

    </style>
     
    <!--Designing the Login page-->
    <div id="form-container"> 
    <div >                                                 
     <form action="http://localhost/school/FRONTEND/admin/Adminlogin.php" method="post" style="border-width: 25px; border-color: blue;">
    <h3 style="font-size:2em">Login in as Administrator</h3>

   <label for="email">Email</label> <br> 
   <input type="email" name="email" id="email" placeholder="your email" > <br> <br>
   
   

   <label for="Password">Password</label><br> 
   <input type="password" name="password" id="password" placeholder="type your password"> <br> <br>
                                                                  
   <button type="submit" name="submit">Submit</button>
   
    </form>
   </div>

</div>





</body>
</html>



