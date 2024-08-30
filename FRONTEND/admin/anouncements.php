<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
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

        h1 {
            color: #333;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .add-button-container {
            width: 100%;
            display: flex;
            justify-content: flex-end;
            margin: 20px 0;
            padding: 0 20px;
        }

        .add-button-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .add-button-container button:hover {
            background-color: #0056b3;
        }

        .announcement-container {
            width: 90%;
            max-width: 800px;
            margin: 10px auto;
        }

        .announcement {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin: 10px 0;
            padding: 15px;
        }

        .announcement p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="add-button-container">
        <button>Add Announcement</button>
    </div>
    <h1>Announcements</h1>
    <div class="announcement-container">
        <div class="announcement">
            <p>Announcement 1</p>
        </div>
        <div class="announcement">
            <p>Announcement 2</p>
        </div>
    </div>
</body>
</html>
