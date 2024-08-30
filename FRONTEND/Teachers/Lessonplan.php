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
        height: 30vh;
        border-radius: 10px;
        background-color: white;
      }
            
      .form-container{
            display: grid;
            grid-template-columns: 30% 30% 30%;
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
        .lessonContainer{
            display: grid;
            grid-template-columns: 50% 50%;
            background-color: white;
            gap: 5px;
            height: 50vh;
            border: 1px solid black;
            border-radius: 5px;
        }
        .lessonContainer div input{
            width: 25vw;
            height: 4vh;
            border: 1px solid black;
            border-radius: 5px;
           
        }
        button{
            background-color: blue;
            color: white;
            width: 15vw;
            height: 7vh;
            border: 1px solid black;
            border-radius: 10px;
            margin-top: 10px;

        }
        input[type="file"]{
            height: 15px;
        
        }
       
    </style>
 <div class="container">
  <h1 style="text-align: center;" >Lesson Plan</h1>

    <form action="" method="post">
      <div class="form-container" >
        <div>
            <label for="Class">Choose a Class</label> <br>
           <select name="class" id="">
             <option value="">Select</option>
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
                   <label for="Date">Start Time</label> <br>
                  
                  <input type="datetime-local" name="startdate" id="">
              </div>

              <div>
                   <label for="Date">End Time</label> <br>
                  
                  <input type="datetime-local" name="enddate" id="">
              </div>
                    
        </div>


        
   
     </div>
     <div class="lessonContainer" >
        <div>
            <label for="week">Week</label> <br>
            <input type="number" name="week"  placeholder="Week number" id="">
        </div>

        
        <div>
        <label for="Strand">Strand</label> <br>
        <input type="text" name="strand" placeholder="Strand">
        </div>

        <div>
        <label for="Sub-strand">Sub-strand</label> <br>
        <input type="text" name="Sub-strand" id=""  placeholder="substrand" >
        </div>

        <div>
        <label for="learning-indicators">Learning Indicators</label> <br>
        <input type="text" name="learning-indicators" id="" placeholder="learning indicators" >
        </div>

        <div>
        <label for="learning-resources">Learning Resources</label> <br>
        <input type="text" name="learning-resources"  placeholder="learning resources" id="">
        </div>

        <div>
        <label for="performance-indicator">Performance Indicators</label> <br>
        <input type="text" name="performance-indicator" placeholder="performance indicators" id=""> <br> <br>
        <label for="uploadlessonplan">upload lesson plan </label>
            <br>
            <input type="file" name="uploadlessonplan" id="">     
        </div>
        <button>submit</button>
     </div>
                                                                                       
                                                                                                             
                    
                         
    </form>

    
 </div>    


</body>
</html>