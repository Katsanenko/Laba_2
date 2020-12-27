<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "lab_2";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$currentUser = $_GET['id'];

$sql = "SELECT id, first_name, last_name, password, role_id, photo FROM users WHERE id='$currentUser'";
$result = $conn->query($sql);

while($row = $result->fetch_assoc()) {
    $currentUserName =  $row["first_name"];
    $currentUserLastName = $row["last_name"];
    $currentUserRole = $row["role_id"];
    $currentUserPhoto = $row["photo"];
    $currentUserPass = $row["password"];
}

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
<form action="lb2_simple_update_ex_user.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="userId" value="<?=$currentUser;?>" >
        
    <p style="color: aliceblue;">Выберите изображение для загрузки:</p> 
    <input type="file" style="color: aliceblue;" name="fileToUpload" id="fileToUpload" value="<?=$currentUserPhoto;?>">
    <div class="form-group">
        <label for="fName" style="color: aliceblue;">First Name:</label>
        <input type="name" class="form-control" placeholder="Enter your name" name="name" required pattern="[A-Za-z0-9]{2,}" value="<?=$currentUserName;?>">
    </div>
    <div class="form-group">
        <label for="sName" style="color: aliceblue;">Surname:</label>
        <input type="name" class="form-control" placeholder="Enter new surname" name="surname" required pattern="[A-Za-z0-9]{2,}" value="<?=$currentUserLastName;?>">
    </div>
    <div class="form-group">
        <label for="password" style="color: aliceblue;">Password:</label>
        <input type="name" class="form-control" placeholder="Enter new password" name="password" required pattern="[A-Za-z0-9]{6,}" value="<?=$currentUserPass;?>">
    </div>

    <input type="submit" value="Обновить" name="submit" class="btn btn-primary">
    <br><br><a href="main.php" class="btn btn-primary">Вернуться</a>
</form>

</body>
</html>