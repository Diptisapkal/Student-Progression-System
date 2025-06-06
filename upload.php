<?php
include ("menus.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload CSV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 50%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        input[type="file"], input[type="submit"] {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        input[type="file"]:hover, input[type="submit"]:hover {
            background-color: #0056b3;
        }
        img {
            width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
<div class="home-section">
    <div class="home-content">
      <i class="fas fa-bars"></i>
      <span class="text">Student Progression Management System</span>
     

    
    </div>

<div class="container">
    <h2>Upload CSV File</h2>
    <div class="input-group">
        <form action="upload1.php" method="post" enctype="multipart/form-data">
            <label for="csvFile">Choose a CSV file:</label><br>
            <img src="excel.png" alt="Excel Logo">
            <input type="file" id="csvFile" name="csvFile" accept=".csv"><br>
            <input type="submit" value="Upload">
        </form>
    </div>
   
</div>

</body>
</html>
