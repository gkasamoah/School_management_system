<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subjects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin-top: 20px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4a54f1;
            color: white;
            font-size: 16px;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #e0e0e0;
        }

        #view, #del {
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #view {
            background-color: #007bff;
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

        .subject-container {
            margin: 20px auto;
            width: 80%;
        }

        .subject-container span {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="subject-container">
        <table>
            <tr>
                <th>Name</th>
                <th>Special</th>
                <th>Action</th>
            </tr>
            <tr>
                <td>English</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Social Studies</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>French</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Our World Our People</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Mathematics</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Integrated Science</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
            <tr>
                <td>Coding</td>
                <td>Yes</td>
                <td>
                    <span>
                        <button id="view">View</button>
                        <button id="del">Delete</button>
                    </span>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>
