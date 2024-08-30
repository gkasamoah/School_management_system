<?php 
session_start(); 
include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");
$username=$_POST['username'];
$password=$_POST['password'];

if(isset($_POST['login'])){
$sql= "SELECT * FROM admin ";
$result=mysqli_query($dbcon,$sql);
if(!$result){
 echo mysqli_error($dbcon);
}
  if(mysqli_num_rows($result)== 1){
    $row=mysqli_fetch_assoc($result);
    echo $row['username'];
    if($row["username"]== $_POST['username'] && $row["password"]==$_POST['password']){
      $_SESSION["username"]=$username;
      $_SESSION["user_id"]=$row['admin_id'];
      echo "<script>
      window.location.href=http://localhost/school/FRONTEND/admin/admin.php;
      </script>";
     
    
    }else{
      header("location:http://localhost/school/BACKEND/admin/AdminLoginController.php");
    }
    }                  
  }

?>

    









