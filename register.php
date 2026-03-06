<?php
include "db.php";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (name,email,password,role) 
            VALUES ('$name','$email','$password','user')";

    if(mysqli_query($conn,$sql)){
        echo "Registered successfully!";
    }else{
        echo "Error occurred";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="view-page">


<h2>Register</h2>

<form method="POST">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    Password: <input type="password" name="password" required><br><br>

    <button type="submit" name="register">Register</button>
</form>

</body>
</html>
