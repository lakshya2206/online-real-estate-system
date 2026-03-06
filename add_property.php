<?php
include "db.php";
session_start();

if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit'])) {

    $title = $_POST['title'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $owner_email = $_SESSION['user'];

    $query = "INSERT INTO properties (title, price, city, type, description, owner_email)
              VALUES ('$title', '$price', '$city', '$type', '$description', '$owner_email')";

    mysqli_query($conn, $query);

    header("Location: view_property.php");
exit();

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Property</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Property</h2>

<form method="post">
    Title: <input type="text" name="title" required><br><br>
    Price: <input type="text" name="price" required><br><br>
    City: <input type="text" name="city" required><br><br>
    Type: <input type="text" name="type" required><br><br>
    Description: <textarea name="description"></textarea><br><br>
    <button type="submit" name="submit">Add Property</button>
</form>

<br>
<a href="view_property.php">View Properties</a> |
<a href="logout.php">Logout</a>
<div class="footer">
    © 2026 Dream Homes | Real Estate Management System
</div>


</body>
</html>
