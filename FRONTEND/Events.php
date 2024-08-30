<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h2 {
            letter-spacing: 2px;
            margin: 20px 0;
            color: #333;
        }

        div {
            width: 80%;
            max-width: 800px;
            background-color: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            margin: 20px;
            padding: 20px;
        }

        p {
            border-bottom: 1px solid #ddd;
            margin: 0;
            padding: 10px 0;
            font-size: 16px;
        }

        #event-item {
            font-weight: bold;
            font-size: 18px;
            color: #4a54f1;
        }

        #edate, #etime, #eaction {
            display: inline-block;
            margin: 0 10px;
        }

        #edate {
            float: right;
            color: #555;
        }

        #etime {
            color: #555;
        }

        #eaction {
            text-align: right;
        }

        #edetails {
            background-color: #f9f9f9;
            padding: 10px;
            border-radius: 4px;
        }

        #view, #del {
            border: none;
            color: white;
            padding: 8px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            border-radius: 4px;
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
            margin-left: 10px;
        }

        #del:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h2>Events</h2>
    <div>
        <p id="event-item">Upcoming Events</p>
        <p>
            <span>EVENT TITLE</span>
            <span id="edate">EVENT DATE</span>
            <span id="etime">EVENT TIME</span>
            <span id="eaction">ACTION</span>
        </p>
        <p id="edetails">
            <span>Vacation</span>
            <span id="edate">December 22, 2023</span>
            <span id="etime">8:00 AM</span>
            <span id="eaction">
                <button id="view">View</button>
                <button id="del">Delete</button>
            </span>
        </p>
    </div>
</body>
</html>
