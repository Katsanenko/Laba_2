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
   
    </div>
    <form action="new_user.php" method="POST" enctype="multipart/form-data">
    <p style="color:aliceblue">Выберите изображение для загрузки:</p>
    <input type="file" style="color: aliceblue;" name="fileToUpload" id="fileToUpload">
    <div class="form-group">
        <label for="fName" style="color: aliceblue;">First Name:</label>
        <input type="name" class="form-control" placeholder="Enter your name" name="name" required pattern="[A-Za-z0-9]{2,}">
    </div>
    <div class="form-group">
        <label for="sName" style="color: aliceblue;">Surname:</label>
        <input type="name" class="form-control" placeholder="Enter your surname" name="surname" required pattern="[A-Za-z0-9]{2,}" >
    </div>
    <div class="form-group">
        <label for="password" style="color: aliceblue;">Password:</label>
        <input type="text" class="form-control" placeholder="Create your password" name="password" required pattern="[A-Za-z0-9]{6,}" >
    </div>
    <div class="form-group">
    <select name="role_id">
    <option value="0">USER</option>
    <option value="1">ADMIN</option>
    </select>
    </div>
    
    <input type="submit" style="color: aliceblue;" value="Зарегистрироваться" name="submit" class="btn btn-primary">
    </form>
    <br><a href="main.php" style="color: aliceblue;" class="btn btn-primary">Вернуться</a>
</body>
</html>