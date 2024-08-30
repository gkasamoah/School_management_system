<?php 
  session_start();
  if($_SESSION["user_level"] && $_SESSION["user_level"]==0 ){
    header("Location: http://localhost/school/FRONTEND/Teachers/TeachersDashboard.php");

  }
  if($_SESSION["user_level"] && $_SESSION["user_level"]==1){
    header("Location: http://localhost/school/FRONTEND/admin/admin.php");
  }
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
    
            $sql = "SELECT * FROM teachers WHERE email='$email' AND password='$pass'";
    
            $result = mysqli_query($dbcon, $sql);
    
            if (mysqli_num_rows($result) == 1) {
    
                $row = mysqli_fetch_assoc($result);
    
                if ($row['email'] === $email && $row['password'] === $pass) {
    
                   $_SESSION['user_level']=$row["user_level"];
                   $_SESSION['email']=$row["email"];
    
                    header("Location: http://localhost/school/FRONTEND/Teachers/TeachersDashboard.php");
    
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
        img{
            height: 700px;
            border-radius: 100px;
            margin-top: 5%;
        }
     #container{
        display: grid;
        grid-template-columns: 60% 45%; 
        background-color: #e0e4f5;
        border-radius: 5%;
        
     }
     .container{
        background-color: white;
        height: 90vh;
        margin-top: 10vh;
        border-radius: 17px;
        margin-right: 5vw;
     }
     .container .cont-signup{
        margin-left: 30%;
        margin-top: 20%;
     }
     input{
        width: 23vw;
        height: 5vh;
        border-radius: 5px;
        border: 1px solid gray;
     }
     button{
        height: 6vh;
        background-color: blue;
        color: white;
        width: 10vw;
        border-radius: 10px;
     }
    </style>
    <div id="container">
        <div>
            <img src="http://localhost/school/student/WhatsApp Image 2023-10-19 at 19.06.26.jpeg" alt="">
        </div>
        <div class="container" >
            <div class="cont-signup" >
                <h2>Sign in</h2>

                <form action="http://localhost/school/BACKEND/landingpage.php" method="post">
                  <label for="email">Email</label> <br> <br>
                  <input type="email" name="email" id="" placeholder="email"> <br> <br>

                  <label for="password">Password</label> <br> <br>
                  <input type="password" name="password" id="" placeholder="password"> <br> <br>
                  <span>
                    <a href="">Forgotten Password?</a>
                    <p>Don't have an account yet? <a href="">Sign up</a></p>
                  </span> <br> <br>
                  <button name="submit" >Login</button>

                </form>

            </div>
        </div>
    </div>
</body>
</html>