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
        margin-left: 35%;
        box-shadow: 1px 1px gray;
        width: 50vw;
        background-color: white;
        height: fit-content;
        margin-top: 5%;
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
    width: 32vw;
    border-radius: 6px;
    border: 1px solid black;
    padding: 8px;
    margin-top: 8px;
}
.err{
    color: red;
}
select{
    width: 280px;
    height: 9vh;   
}

    </style>
     
    <!--Designing the Login page-->
    <div id="form-container">                                                 
     <form action="http://localhost/school/BACKEND/addStudentsBackend.php" method="post" style="border-width: 25px; border-color: blue;">
    <h3 style="font-size:2em">Register a Student</h3>

   <label for="firstname">firstname</label> <br> 
   <input type="text" name="firstname" id="firstname" placeholder="enter your firstname">
   <span class="firstnameErr err" ><?php echo $firstnameErr ?></span><br> <br>

   <label for="lastname">lastname</label> <br> 
   <input type="text" name="lastname" id="lastname" placeholder="enter your lastname">
   <span class="lastnameErr err" ><?php echo $lastnameErr ?></span><br> <br>

   <label for="residence">residence</label> <br> 
   <input type="text" name="residence" id="residence" placeholder="enter your residence">
   <span class="residenceErr err" ><?php echo $residenceErr ?></span><br> <br>




   <label for="gender">Gender</label> <br> 
   <select name="gender" id="gender">
    <option value="">Select</option>
    <option value="male">male</option>
    <option value="female">female</option>
    <span class="genderErr err" ><?php echo $GenderErr ?></span>
   </select> <br> <br>
   
   

   



   <label for="ParentName">ParentName</label><br> 
   <input type="text" name="parentname" id="parentname" placeholder="Parent name">
   <span class="parentNameErr err" id="parentNameErr"><?php echo $parentNameErr ?></span><br> <br>

   <button type="submit" name="signup">Submit</button>
   
</form>
</div>





</body>
</html>




