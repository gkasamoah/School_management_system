<?php 



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
        }
    #form-container{
        margin-left: 30%;
        box-shadow: 1px 1px gray;
        width: 50vw;
        background-color: white;
        height: 140vh;
        margin-top: 10%;
    }


#form-container form button{
    background-color: rgb(13, 66, 240);
    width: 40em;
    height: 4.5em;
    border-radius: 12px;
    margin-top: 5%;
    color: white;
    
}

input{
    height: 5vh;
    width: 33vw;
    border-radius: 6px;
    border: 1px solid black;
    padding: 8px;
    margin-top: 8px;
}
.err{
    color: red;
}

    </style>
     
    <!--Designing the Login page-->
    <div id="form-container">                                                 
     <form action="http://localhost/school/BACKEND/Users/signupbackend.php" method="post" style="border-width: 25px; border-color: blue;" enctype="application/x-www-form-urlencoded"  >
    <h3 style="font-size:2em">Sign up for an account</h3>

   <label for="firstname">firstname</label> <br> 
   <input type="text" name="firstname" id="firstname" placeholder="enter your firstname">
   <span class="firstnameErr err" ><?php echo $firstnameErr ?></span><br> <br>

   <label for="lastname">lastname</label> <br> 
   <input type="text" name="lastname" id="lastname" placeholder="enter your lastname">
   <span class="lastnameErr err" ><?php echo $lastnameErr ?></span><br> <br>


  
   <label for="email">email</label> <br> 
   <input type="email" name="email" id="email" placeholder="your email" >
   <span class="emailErr err" ><?php echo $emailErr ?></span><br> <br>
   

   <label for="Password">Password</label><br> 
   <input type="password" name="password" id="password" placeholder="type your password" title="more than 8 characters" >
   <span class="passwordErr err" id="passErr"><?php echo $passwordErr ?></span><br> <br>
   <button type="submit" name="signup">Submit</button>
   
</form>
</div>


</body>
</html>



