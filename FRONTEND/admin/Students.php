<?php 

include_once("BACKEND/dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 40px;
            margin: 20px 0;
            color: #333;
        }

        #container {
            width: 80%;
            max-width: 1000px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        thead {
            background-color: #4a54f1;
            color: white;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            font-weight: bold;
            font-size: 18px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        button {
            background-color: #4a54f1;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #3a44c8;
        }

        #addBtn {
            background-color: #28a745;
            margin: 20px 0;
            width: auto;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
        }

        #addBtn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h2>Students</h2>
    <div id="container">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Class</th>
                        <th>Id Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kelvin Kwao</td>
                        <td>Grade 9</td>
                        <td>PL001</td>
                        <td><button><a href="#">Delete</a></button></td>
                    </tr>
                    <tr>
                        <td>Michealla Afli</td>
                        <td>Grade 9</td>
                        <td>PL002</td>
                        <td><button><a href="#">Delete</a></button></td>
                    </tr>
                </tbody>
            </table>

            <button id="addBtn"><a href="http://localhost/school/addStudent.php">Add</a></button>
        </div>
    </div>
</body>
</html>
