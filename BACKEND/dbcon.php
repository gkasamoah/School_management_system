<?php
$database="school_management_system";
$host="localhost";
$username="root";
$password="";
$port=3306;

#making connection to the database on the xamp server
$dbcon=mysqli_connect($host,$username,$password,$database,$port);

if($dbcon){
    echo "";
}else{
  
    die("connection failed".mysqli_connect_error());
}

?>