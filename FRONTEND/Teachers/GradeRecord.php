

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        h3{
            text-align: center;
            font-size: 30px;
        }
        .form-container{
            display: grid;
            grid-template-columns: 25% 25% 25% 25%;
            outline: grey 1px solid;
            height: 10vh;
            background-color: rgb(223, 223, 233);                                        
        }
        .form-container:hover{
            transition: ease-out 1s;
            background-color: whitesmoke;
        }
        label{
            font-size: 20px;
        }
        select{
            width: 15vw;
            height: 22px;
            background-color: white;
        }
        input[type="date"]{
            width: 10vw;
            height: 20px;
        }
        .student-records{
            margin-top: 5%;
            box-shadow: 1px 2px grey;
            display: flex;
        }
       
        .score-container{
            height: 22px;
            margin-left: 10px;
            width: 15vw;
            border-radius: 5px;
            outline: none;
            border-width: 1px;
            
        }
        .stu-name{
            height: 22px;
            margin-left: 10px;
            width: 15vw;
            border-radius: 5px;
            border-width: 1px;
        }
        button{
            background-color: blue;
            width: 7vw;
            color: white;
            border-radius: 8px;
            height: 5vh;
            margin-left: 7px;
            margin-top: 10px;
        }
                                                                                     
    </style>
     <h3>Record Student Grades</h3>
    <form action="" method="post">
        <div class="form-container">
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



         <div>
           <label for="Class">Choose a Subject</label> <br>
           <select name="class" id="">
            <option value=""></option>
            <option value="English">English</option>
            <option value="Mathematics">Mathematics</option>
            <option value="Coding">Coding</option>
            <option value="ICT">ICT</option>
            <option value="Social">Social</option>
            <option value="OWOP">OWOP</option>
            <option value="Twi">Twi</option>
            <option value="RME">RME</option>
            <option value="French">French</option>
            </select>
        </div>
        <div>
        <label for="Class">Examination type</label> <br>
           <select name="class" id="">
            <option value=""></option>
            <option value="Final-Examination">Final-Examination</option>
            <option value="Mid-Term">Midterm-Examination</option>
            <option value="First-Assesment-Test">First-Assesment-Test</option>
            <option value="Exercise">Exercise</option>
            <option value="Assignment">Assignment</option>
            <option value="Mock">Mock</option>
        
         </select>


        </div>
             
        </div>
      <div class="student-records">
        
            <div>
              <input type="text" value="Baaba Adepa"  class="stu-name">
            </div> 
            <div>  <input type="number" placeholder="score" name="score" class="score-container"  > 
            <input type="number" placeholder="total" name="total" class="score-container" >
            
         </div>
        

        

      </div>

      <button type="submit" >Submit</button>

    </form>

    
</body>
</html>