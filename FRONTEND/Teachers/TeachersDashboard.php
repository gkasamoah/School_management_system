<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/472926979a.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        #header {
            background-color: #f8f9fa;
            height: 60px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .container {
            display: grid;
            grid-template-columns: 15% 85%;
            gap: 20px;
            padding: 20px;
        }

        .side-nav {
            background-color: #9CBCDB;
            height: calc(100vh - 20px); /* Adjust height to account for padding */
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .side-nav a {
            display: block;
            color: white;
            text-decoration: none;
            font-size: 1.1rem;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .side-nav a:hover {
            background-color: #006bb3;
            color: white;
        }

        .item2 {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .item2 h2 {
            color: #333;
            margin-top: 0;
        }

        .course-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            column-gap: 15px;
            gap: 20px;
        }

        #griditem1,
        #griditem2,
        #griditem3 {
            background-color: #e9ecef;
            border-radius: 10px;
            border: 1px solid #dee2e6;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        #griditem1 {
            height: 20vh;
        }

        #griditem2,
        #griditem3 {
            height: fit-content;
        }
         #griditem2 table{
            margin-top: -15px;
         }

        span {
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th {
            background-color: #007bff;
            color: white;
            padding: 10px;
            text-align: left;
        }

        td {
            padding: 10px;
        }

        #view,
        #del {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #view:hover {
            background-color: #0056b3;
        }

        #del {
            background-color: #dc3545;
        }

        #del:hover {
            background-color: #c82333;
        }

        @media (max-width: 768px) {
            .container {
                grid-template-columns: 1fr;
            }

            .side-nav {
                height: auto;
            }

            .course-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div id="header">
        <h1>Dashboard</h1>
    </div>
    <main>
        <div class="container">
            <div class="side-nav">
                <a href="http://localhost/school/FRONTEND/viewProfile.php">Profile</a>
                <a href="http://localhost/school/FRONTEND/Teachers/Classroom.html">Classroom Management</a>
                <a href="">Logout</a>
            </div>
            <div class="item2">
                <h2>Today's Subjects</h2>
                <div class="course-container">
                    <div>
                        <div id="griditem1">
                            <span>Mathematics</span><br>
                            <span>Our World Our People</span><br>
                            <span>Integrated Science</span><br>
                            <span>Twi</span><br>
                            
                        </div>
                        <div id="griditem1">
                            <p>Number of assignments:</p>
                            <span>4</span><br>
                            <p>Number of Exercises:</p>
                            <span>5</span>
                        </div>
                    </div>
                    <div>
                        <div id="griditem2">
                            <table>
                                <tr>
                                    <th>Subject</th>
                                    <th>Time Start</th>
                                    <th>Time End</th>
                                </tr>
                                <tr>
                                    <td>Mathematics</td>
                                    <td>8:30 am</td>
                                    <td>9:30 am</td>
                                </tr>
                                <tr>
                                    <td>OWOP</td>
                                    <td>9:30 am</td>
                                    <td>10:30 am</td>
                                </tr>
                                <tr>
                                    <td>Science</td>
                                    <td>11:00 am</td>
                                    <td>12:00 pm</td>
                                </tr>
                                <tr>
                                    <td>Computing</td>
                                    <td>12:00 pm</td>
                                    <td>1:00 pm</td>
                                </tr>
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
