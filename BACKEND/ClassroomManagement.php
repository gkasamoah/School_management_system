<?php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/472926979a.js" crossorigin="anonymous"></script>

</head>
<body>
    <style>
        #header{
            background-color: whitesmoke;
            height: 5vh;
            border-radius: 10px;
        }

        .side-nav{
            background-color: #ab1cfa;
            height:120vh;                                          
            width: 15vw;                                         
        }
        .container{
           display: grid;
           grid-template-columns: 17% 83%;
        }
        .container .item1{
            background-color: #ab1cfa;
            height: 95vh;
        }
        .container .item1 a{
            color: white;
            text-decoration: none;
            font-size: 1.4rem;
        }
      span a:hover{
            color: blue;
            transition: ease-out;
        }
    </style>
    <header>
        <div id="header">
            <span>Logo</span>
             <span style="float: right;"><img src="" alt=""></span>

        </div>
    </header>

    <main>
       <div class="container"  >
        <div class="item1" >
            <i class="fa-solid fa-user fa-2x" style="color: white;"></i> <a href="">Profile</a> <br> <br>
            <span><a href="http://localhost/school/FRONTEND/Teachers/Classroom.html">Classroom Management</a></span> <br> <br>
            <span><a href="http://localhost/school/FRONTEND/Teachers/Student.html">Student Management</a></span> <br> <br>
            <span><a href="http://localhost/school/FRONTEND/Teachers/report.html">Report Management</a></span> <br> <br>
            <span><a href="http://localhost/school/BACKEND/landingpage.php">Logout</a></span> <br> <br>
    </div>
        <div  class="item2" > hello</div>
       </div>
        



    </main>
    


</body>
</html>

