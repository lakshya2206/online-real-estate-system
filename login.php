<?php
include "db.php";
session_start();

if(isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1) {
        $_SESSION['user'] = $email;
        header("Location: add_property.php");
        exit();
    } else {
        $error = "Invalid Email or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="topbar">
    Dream Homes - Property Listing System
</div>

<div class="login-container">
    <h2>Login</h2>
    <form method="POST">
        <input type="text" name="email" placeholder="Enter Email" required>
        <input type="password" name="password" placeholder="Enter Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>


<?php
if(isset($error)) {
    echo "<p style='color:red;'>$error</p>";
}
?>

<p>Don't have an account? <a href="register.php">Register</a></p>

</body>
</html>
header("Location: add_property.php");
