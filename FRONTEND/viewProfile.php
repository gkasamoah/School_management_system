<?php 

session_start();
include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");
$sql = "SELECT * from `teachers` where teacher_id=2";

$result = mysqli_query($dbcon,$sql);



// inserting data into the the database
 




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
        .container{
            display: grid;
            grid-auto-flow: column;
            border: 1px solid gray;
            border-radius: 12px;

        }
        h1{
            text-align: center;
        }
        input{
            height: 3em;
            width: 29em;
            border-radius: 10px;
            outline: solid black 0.7px;
            border: none;
        }
        label{
            font-size: 1.3em;
        }
        button{
          margin-top: 30%;
          background-color: rgb(13, 66, 240);
          width: 15em;
          height: 4.5em;
          border-radius: 15px;
          margin-top: 5%;
          color: white;
        }
        button a{
          color: white;
          text-decoration: none;
          font-size: 15px;
        }
    </style>
  <!-- form to create your profile-->
<form action="" method="post">
    <h1>My Profile Information</h1>
  <div class="container">
    <?php while ($row = mysqli_fetch_array($result)) {?>
    <div class="col">
      <label for="residence">Firstname</label> <br> <br>
      
     <span> <?php echo $row["firstName"] ?> </span> <br> <br>

     <label for="lastname">Lastname</label> <br> <br>
      
      <span> <?php echo $row["lastname"] ?> </span> <br> <br>
        

      

        <label for="date-of-appointment">Date-of-Appointment</label> <br> <br>
        <span> <?php echo $row["date-of-join"]   ?> </span> <br> <br> <br>

        <button type="submit"><a href="http://localhost/school/FRONTEND/addProfile.php">Edit</a></button>
       


    </div>

    <div class="col">
        

        <label for="residence">Telephone</label> <br> <br>
        <span> <?php echo $row["telephone"] ?> </span> <br> <br>

        <label for="date-of-join">Date-Of-Birth</label> <br> <br>
        <span> <?php echo $row["dateOfbirth"] ?> </span> 
        <?php }?>  <br>

        <label for="residence">Residence</label> <br> <br>
        <span> <?php echo $row["resident"] ?> </span>  <br>

       

    </div>
    
  </div>
  
</form>

   
</body>
</html>