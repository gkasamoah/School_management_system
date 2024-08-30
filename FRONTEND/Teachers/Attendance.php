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
      .container{
        border: 1px gray solid;
        height: 80vh;
        border-radius: 10px;
        background-color: white;
      }
            
      .form-container{
            display: grid;
            grid-template-columns: 50% 50%;
            outline: grey 1px solid;
            height: 10vh;
            background-color: rgb(223, 223, 233);  
            width:80%;
            margin-left:10%; 
                                                 
        }
        input[type="date"]{
            width: 10vw;
            height: 20px;
        }
        select{
            width: 15vw;
            height: 22px;
            background-color: white;
        }
        .student-details{
            margin-left: 10%;
            margin-top: 5%;
        }
      .student-details input{
        width: 15vw;
        height: 20px;
        border-radius: 4px;
        border-width: 1px;
      }
      span{
       position: relative;
       bottom: -15vh;
      }
      span input{
        border-color:blue;
        
      }
      button{
        background-color: blue;
            color: white;
            width: 15vw;
            height: 7vh;
            border: 1px solid black;
            border-radius: 10px;
            

      }
    </style>
 <div class="container">
  <h1 style="text-align: center;" >Class Attendance</h1>

    <form action="" method="post">
      <div class="form-container" >
        <div>
            <label for="Class">Choose a Class</label> <br>
           <select name="class" id="">
             <option value=""></option>
             <option value="grade1">grade1</option>
             <option value="grade2">grade2</option>
             <option value="grade3">grade3</option>
             <option value="grade4">grade4</option>
             <option value="grade5">grade5</option>
             <option value="grade6">grade6</option>
             <option value="grade6">grade7</option>
             <option value="grade6">grade8</option>
             <option value="grade6">grade9</option>
           </select>

        </div>
               <div>
                   <label for="Date">Date</label> <br>
                   <input type="date" name="date" id="">
              </div>
                    
        </div>
    <div class="student-details" >
        <label for="" style="font-weight: bold;" >Student</label> <br>
        <input type="text" name="student" id="" value=" Ethan "> 
        <select name="" id="">
            
            <option value=""></option>
            <option value="Presence">Present</option>
            <option value="Abscent">Absent</option>
        </select><br> <br>
       
      
        <input type="text" name="student" id="" value=" Ethan "> 
        <select name="" id="">
            <option value=""></option>

            <option value="Presence">Present</option>
            <option value="Absent">Absent</option>
        </select>
        <br>

        <span>

            <input type="number" placeholder="number of students present">
            <input type="number" placeholder="Total students" > <br>  <br>
            <button>Submit</button>
        </span>
       
     </div>
                                          
                                                                                                
                                                                                                             
                    
                         
    </form>


 </div>    


</body>
</html>