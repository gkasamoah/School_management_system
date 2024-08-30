<?php
session_start();
if(isset($_POST["signup"])){
$firstname=trim($_POST['firstname']);
$lastname=trim($_POST['lastname']);
$email=trim($_POST['email']);
$password=trim($_POST['password']);

$sql="SELECT * `teachers` WHERE `email`='$email' AND `password`='$password'";


$query=mysqli_query($dbcon,$sql);
if(mysqli_num_rows($query)== 0){
    echo "Sorry no account exist for this user";

}else{
    $_SESSION["username"] = $email;
    header("Location:");
}
}
?>