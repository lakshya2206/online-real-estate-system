<?php
$conn = mysqli_connect("localhost","root","","realestate_db");

if(!$conn){
    die("Connection failed");
}

echo "Database Connected Successfully!";
?>
