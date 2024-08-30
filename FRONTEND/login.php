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
        height: 80vh;
        margin-top: 10%;
    }


#form-container form button{
    background-color: rgb(13, 66, 240);
    width: 28em;
    height: 4.5em;
    border-radius: 12px;
    margin-top: 5%;
    color: white;
    
}

input{
    height: 5vh;
    width: 23vw;
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
     <form action="http://localhost/school/BACKEND/Users/signupbackend.php" method="post" style="border-width: 25px; border-color: blue;">
    <h3 style="font-size:2em">Login into your account</h3>

   <label for="email">email</label> <br> 
   <input type="email" name="email" id="email" placeholder="your email" >
   <span class="emailErr err" ><?php echo $emailErr ?></span><br> <br>
   

   <label for="Password">Password</label><br> 
   <input type="password" name="password" id="password" placeholder="type your password">
   <span class="passwordErr err" id="passErr"><?php echo $passwordErr ?></span><br> <br>
   <button type="submit" name="signup">Submit</button>
   
</form>
</div>



<script>
// getting access to elements for validation
let form =document.querySelector('form');
let firstName =document.getElementById('firstname');
let lastName =document.getElementById('lastname');
let email =document.getElementById('email');
let password =document.getElementById('password');

// getting access to the error elements
let firstNameErr= document.querySelector(".firstnameErr")

let lastNameErr= document.querySelector(".lastnameErr")

let emailErr= document.querySelector(".emailErr")

let passwordErr= document.getElementById()
form.addEventListener('submit',(e)=>{
    e.preventDefault();
    if(firstName.value ===''){
        firstNameErr.innerHTML="firstname can not be empty";
    }

    if(lastName.value ===''){
        lastNameErr.innerHTML="lastname can not be empty";
    }

    if(email.value ===''){
        emailErr.innerHTML="email can not be empty";
    }

    if(password.value ===''){
        passwordErr.innerHTML="password can not be empty";
    }



})


</script>

</body>
</html>



