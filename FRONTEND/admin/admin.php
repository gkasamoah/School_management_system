<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./admin.css">
    <script src="https://kit.fontawesome.com/472926979a.js" crossorigin="anonymous"></script>
    <style>
        /* General styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            display: flex;
            flex: 1;
        }

        .nav {
            background-color: #9CBCDB;
            width: 250px;
            height: 100vh;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            box-sizing: border-box;
        }

        .nav div {
            margin-bottom: 20px;
        }

        .nav div a {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .nav div a:hover {
            background-color: black;
            color: white;
        }

        .nav div a i {
            margin-right: 10px;
        }

        .main {
            flex: 1;
            padding: 20px;
        }

        .header {
            background-color: white;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .header span {
            float: right;
        }

        .header #search {
            width: 400px;
        }

        #week {
            background-color: white;
            border: 1px gray solid;
            margin-top: 20px;
            border-radius: 9px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        #week h1 {
            color: blue;
            margin-bottom: 10px;
        }

        #week ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        #week ul li, #week ul p {
            margin-bottom: 10px;
        }

        #teachers, #students {
            background-color: #055FA8;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 2px 2px gray;
            text-align: center;
            width: 150px;
            margin-right: 20px;
        }

        .main div {
            display: flex;
            justify-content: space-between;
        }

        .main div #students {
            background-color: #055FA8;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="nav">
            <div><a href=""><i class="fa-solid fa-border-all fa-lg"></i>Dashboard</a></div>
            <div><a href="Teachers.php"><i class="fa-regular fa-user fa-lg"></i>Teachers</a></div>
            <div><a href="Students.php"><i class="fa-regular fa-user fa-lg"></i>Students</a></div>
            <div><a href="http://localhost/school/FRONTEND/subjects.php"><i class="fa-solid fa-book-open fa-lg"></i>Subjects</a></div>
            <div><a href="http://localhost/school/FRONTEND/Events.php"><i class="fa-solid fa-calendar-day fa-lg"></i>Events</a></div>
            <div><a href="http://localhost/school/FRONTEND/admin/anouncements.php"><i class="fa-solid fa-bullhorn fa-lg"></i>Announcement</a></div>
            <div><a href="http://localhost/school/FRONTEND/admin/Adminlogin.php"><i class="fa-solid fa-sign-out-alt fa-lg"></i>Logout</a></div>
        </div>

        <div class="main">
            <div class="header">
                <!-- Header Content -->
            </div>

            <div>
                <div id="teachers">
                    <p>Total Teachers</p>
                    <p>20</p>
                </div>
                <div id="students">
                    <p>Total Students</p>
                    <p>500</p>
                </div>
                <div id="students">
                    <p>Total Staff</p>
                    <p>45</p>
                </div>
            </div>

            <div id="week">
                <h1>Events and Upcoming Activities</h1>
                <ul>
                    <li>Inter Houses Competition</li>
                    <li>Club Activities</li>
                    <li>Graduation Rehearsals</li>
                    <li>Inter Classes Quiz</li>
                </ul>
                <h1>Additional Information</h1>
                <ul>
                    <li>P. O. Box 16236</li>
                    <li>Opening Hours: 8:30 AM</li>
                    <li>Closing Hours: 3:30 PM</li>
                    <li>Telephone: 0244567867</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
