<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM properties");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Real Estate Listings</title>
    <style>
        body { font-family: Arial; background:#f2f2f2; }
        .card {
            background:white;
            padding:15px;
            margin:15px;
            border-radius:8px;
            width:300px;
            display:inline-block;
        }
    </style>
</head>
<body>

<h1>🏠 Property Listings</h1>

<?php while($row = mysqli_fetch_assoc($result)) { ?>

<div class="card">
    <h3><?php echo $row['title']; ?></h3>
    <p>City: <?php echo $row['city']; ?></p>
    <p>Type: <?php echo $row['type']; ?></p>
    <p>Price: ₹<?php echo $row['price']; ?></p>
    <p><?php echo $row['description']; ?></p>
    <small>Owner: <?php echo $row['owner_email']; ?></small>
</div>

<?php } ?>

</body>
</html>
