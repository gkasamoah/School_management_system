
<?php    // connection to the database
                                      
if($_SERVER["REQUEST_METHOD"=='POST']){
    include_once("/Applications/XAMPP/xamppfiles/htdocs/school/BACKEND/dbcon.php");
    $firstnameValue=$_POST["firstname"];
    $lastnameValue=$_POST["lastname"];
    $residenceValue=$_POST["residence"];
    $parentNameValue=$_POST["parentname"];
    $GenderValue=$_POST["gender"];

    if(empty($firstnameValue)){
        $firstnameErr="firstname cannot be empty" ;
     }
   
     if(empty($lastnameValue)){
        $lastnameErr="lastname cannot be empty" ;
     }
   
     if(empty($residenceValue)){
       $residenceErr= "residence cannot be empty";
     }

     if(empty($parentNameValue)){
        $residenceErr= "email cannot be empty";
      }
    
   
     if(empty($password)){
        $passwordErr="password cannot be empty";
     }
   //$dateOfbirthValue=$_POST["dateOfbirth"];
    //$dateofAdmissionValue=$_POST["dateOfAdmission"];
    $sql="SELECT * FROM `students` WHERE `firstname`='$firstnameValue' AND `lastname`=$lastnameValue";

  
    $query=mysqli_query($dbcon,$sql);
     
    if($num_of_row=mysqli_num_rows($query)==0){
        $query2="INSERT INTO `students`(`firstname`,`lastname`,`residence`,`parent_name`,`gender`) VALUES('$firstnameValue',
'$lastNameValue','$residenceValue','$parentNameValue','$GenderValue')";
$query_Results2=mysqli_query($dbcon,$query2);
if(!$query_Results){
    echo "something happened".mysqli_error($dbcon);
} else{
    echo "data successfully entered thanks";
}
      
         
}
}



mysqli_close($dbcon)
                                                                       
                                                                                                
?>

