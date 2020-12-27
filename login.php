<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    body {
        background: #333;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>

<body>
    <form action="check_user.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="fName" style="color:aliceblue;">First Name:</label>
        <input type="name" class="form-control" placeholder="Enter your name" name="first_name" required pattern="[A-Za-z0-9]{2,}" >
    </div>
    <div class="form-group">
        <label for="pass" style="color: aliceblue;">Password:</label>
        <input type="password" class="form-control" placeholder="Enter your password" name="password" required pattern="[A-Za-z0-9]{6,}" >
    </div>
    <button type="submit" class="btn btn-primary">Подтвердить</button>
    </form>
   <br><a href="main.php" class="btn btn-primary">Вернуться</a>
</body>
</html>