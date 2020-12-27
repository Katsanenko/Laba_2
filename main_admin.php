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

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
    <div class="topnav">
    <?php 
    echo <<< HTML
    <a class="active" href="logout.php">Log out</a>
    HTML;
    ?>
    </div>

    <h2 style="color:aliceblue;">Информация о пользователях:</h2>
    <div class="containe">
    <table class="table table-dark">
    <thead>
      <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Role</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    
    $sql = "SELECT id, first_name, last_name, role_id FROM users";

    $result = $conn->query($sql);
    

    while($row = $result->fetch_assoc()) {
        $_SESSION['id'] = $row["id"];
        echo '<tr>';
        echo '<td><a href="' . htmlspecialchars("user_page.php?id=" . urlencode($row["id"])) . '">'. "ID: " . $row["id"] . '</a></td>';
        echo '<td>User name: ' . $row["first_name"] . '</td>';
        echo '<td>User last name: ' . $row["last_name"] . '</td>';
        if($row["role_id"] == 1) {
            echo '<td>User role: Admin</td>';
        } else {
            echo '<td>User role: User</td>';
        }
        echo '</tr>';
    }
    ?>
    </tbody>
    </table>
    </div>

    <a href="register.php" class="btn btn-warning">Добавить нового пользователя</a>
</body>
</html>