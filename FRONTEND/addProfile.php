<?php 
Include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");
$telphoneErr=$telphoneErr=$dateOfBirthErr=$residenceErr=$dateofjoinErr='';
$telphone=$_POST["telephone"];
$dateOfBirth=$_POST["date-of-birth"];
$residence=$_POST["residence"];
$password=$_POST["password"];
$dateOfJoin=$_POST["date-of-join"];

if($_SERVER['REQUEST_METHOD']=== 'POST'){
  if(empty($_POST['date-of-join'])){
     $dateofjoinErr='date cannot be empty';
}
else{
    $date_of_join=$_POST['date-of-join'];
}

if(empty($_POST['date-of-birth'])){
  $dateOfBirthErr='datebirth  cannot be empty';
}
else{
 $date_Of_birth=$_POST['date-of-birth'];
}

 if(empty($_POST['telephone'])){
     $telphoneErr='telephone cannot be empty';
}
else{
    $telphone=$_POST['telephone'];
}



if(empty($_POST['residence'])){
    $residenceErr='residence cannot be empty';
}
else{
   $residence=$_POST['residence'];
}

$sql="INSERT INTO `teachers`(`telephone`,`date_of_join`,`resident`,`dateOfbirth`)
VALUES('$telephone','$dateOfJoin','$residence','$dateOfBirth')";

$query=mysqli_query($dbcon,$sql);
if(!$query){
  echo mysqli_error( $dbcon );
}else{
  echo "data submitted successfully";

} 





}

 

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
          width: 28em;
          height: 4.5em;
          border-radius: 12px;
          margin-top: 5%;
          color: white;
        }
    </style>
  <!-- form to create your profile-->
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <h1>Complete your profile</h1>
  <div class="container">
    <div class="col">
     
         <label for="residence">Residence</label> <br> <br>
        <input type="text" name="residence" placeholder="your residence">
        <span class="errore" > <?php echo $residenceErr ?> </span>
        <br> <br>

        <label for="date-of-join">Date-of-join</label> <br> <br>
        <input type="date" name="date-of-join">
        <span> <?php echo $dateofjoinErr ?> </span>
        <br>
       


    </div>

    <div class="col">
        

        <label for="residence">Telephone</label> <br> <br>
        <input type="number" name="telephone" placeholder="your telephone">
        <span> <?php echo $telphoneErr ?> </span>
        <br> <br>

        <label for="date-of-join">Date-of-birth</label> <br> <br>
        <input type="date" name="date-of-birth"> <br>
        <span> <?php echo $dateOfBirthErr ?> </span>

    </div>

  </div>
  <button type="submit" name="submit" >Submit</button>
</form>

  





    
</body>
</html>