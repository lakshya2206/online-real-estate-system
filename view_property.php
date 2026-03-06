<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM properties");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Properties</title>
     <link rel="stylesheet" href="style.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #ddd;
        }
    </style>
</head>

<body class="view-page">



<h2 style="text-align:center; color:white;">Property Listings</h2>


<!-- 2️⃣ SEARCH FORM GOES HERE -->
<form method="GET">
Search City:
<input type="text" name="city">
<input type="submit" value="Search">
</form>

<!-- 3️⃣ TOTAL COUNT GOES HERE -->
<?php
$count = mysqli_num_rows($result);
echo "<h3 style='text-align:center; color:white;'>Total Properties: $count</h3>";
?>

<table>
<tr>
  <tr>
    <th>Title</th>
    <th>Price</th>
    <th>City</th>
    <th>Type</th>
    <th>Description</th>
    <th>Owner Email</th>
    <th>Action</th>
</tr>

</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<tr>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['price']; ?></td>
    <td><?php echo $row['city']; ?></td>
    <td><?php echo $row['type']; ?></td>
    <td><?php echo $row['description']; ?></td>
    <td><?php echo $row['owner_email']; ?></td>
    <td>
        <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

</tr>
<?php } ?>

</table>

</body>
</html>
<br><br>
<a href="add_property.php">⬅ Back to Add Property</a>
