<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM properties");

while($row = mysqli_fetch_assoc($result)){
    echo "<hr>";
    echo "Title: ".$row['title']."<br>";
    echo "Price: ".$row['price']."<br>";
    echo "City: ".$row['city']."<br>";
    echo "Type: ".$row['type']."<br>";
    echo "Description: ".$row['description']."<br>";
    echo "Owner: ".$row['owner_email']."<br>";
}
?>
